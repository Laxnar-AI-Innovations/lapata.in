<?php
date_default_timezone_set('Asia/Kolkata');

// ---------- CONFIG ----------
$dryRun = false; // true = safe test mode, false = real API call
$logFile = '/var/www/html/khoji-migrated/activecronlog.log';

// ---------- ERROR REPORTING ----------
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/var/www/html/khoji-migrated/php_error.log');

// ---------- LOG HELPER ----------
function logMessage($msg) {
    global $logFile;
    $line = "[" . date('Y-m-d H:i:s') . "] " . $msg . "\n";
    file_put_contents($logFile, $line, FILE_APPEND);
}

// ---------- START SCRIPT ----------
logMessage("Cron started");

// ---------- DB CONNECTION (Supabase Postgres compatible via env) ----------
$pgHost   = getenv('DB_HOST') ?: 'localhost';
$pgPort   = getenv('DB_PORT') ?: '5432';
$pgDb     = getenv('DB_NAME') ?: 'postgres';
$pgUser   = getenv('DB_USER') ?: 'postgres';
$pgPass   = getenv('DB_PASS') ?: '';
$sslmode  = getenv('DB_SSLMODE') ?: 'require';

$dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s;sslmode=%s', $pgHost, $pgPort, $pgDb, $sslmode);
try {
    $conn = new PDO($dsn, $pgUser, $pgPass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Throwable $e) {
    logMessage('DB Connection failed: ' . $e->getMessage());
    exit;
}

// ---------- FUNCTION: Save vector response ----------
function saveVectorResponse($conn, $vectorResponse) {
    if (isset($vectorResponse['output'])) {
        $message = $vectorResponse['output'];
    } elseif (isset($vectorResponse['image_count'])) {
        $message = $vectorResponse['image_count'] . ' Vectorised successfully';
    } else {
        $message = 'Unexpected API response: ' . json_encode($vectorResponse);
    }

    try {
        $stmt = $conn->prepare("INSERT INTO vectorResponse (response, dateCreated) VALUES (:response, CURRENT_TIMESTAMP)");
        $stmt->execute([':response' => $message]);
        logMessage("Vector response saved: " . substr($message, 0, 100) . "...");
    } catch (Throwable $e) {
        logMessage("DB Error (vectorResponse insert): " . $e->getMessage());
    }
}

// ---------- HELPER: Safe API call ----------
function callApi($collection_id) {
    global $dryRun;
    if ($dryRun) {
        return ["output" => "Simulated API response for {$collection_id}"];
    } else {
        $curl = curl_init();
        $postdata = json_encode(["collection_id" => $collection_id]);
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://dmat6epj7yjhvxizflfuioym2i0rmpxl.lambda-url.ap-south-1.on.aws/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postdata,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN'
            ],
        ]);
        $response = curl_exec($curl);
        if ($response === false) {
            global $logFile;
            file_put_contents($logFile, "[".date('Y-m-d H:i:s')."] CURL Error: ".curl_error($curl)."\n", FILE_APPEND);
        }
        curl_close($curl);
        return json_decode($response, true);
    }
}

// ---------- HELPER: Safe SMS sending ----------
function sendSms($mob, $data) {
    global $dryRun;
    if ($dryRun) {
        logMessage("Dry run: SMS not sent to {$mob}, data: " . json_encode($data));
        return true;
    } else {
        $url = "https://shammtech.in/api/send-message-91-sms";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            logMessage("SMS CURL Error: " . curl_error($ch));
        } else {
            logMessage("SMS API Response for {$mob}: " . $response);
        }

        curl_close($ch);
        return $response;
    }
}

// ---------- MAIN PROCESS ----------
$algoSentTime = date('Y-m-d H:i:s');

$sql = 'SELECT i.*,u.* FROM indexer i 
        INNER JOIN unknown_person u ON u.id = i.unknownid 
        WHERE i.imagestatus = \'Pending\' 
        AND u.isfinalsubmitted = 1 
        ORDER BY i.id DESC LIMIT 1';

$result = $conn->query($sql);
$rows = $result ? $result->fetchAll() : [];

if ($rows && count($rows) > 0) {
    $row = $rows[0];
    logMessage("Processing indexer ID: " . $row['id'] . " (awseventname=" . $row['awseventname'] . ")");

    $nextCronTimeRes = $conn->query('SELECT * FROM nextcrontime ORDER BY id DESC LIMIT 1');
    $nextCronTimeRow = $nextCronTimeRes ? $nextCronTimeRes->fetch() : null;
    $nextTimeOk = !$nextCronTimeRow || time() >= strtotime($nextCronTimeRow['nextCronTime']);

    if ($nextTimeOk) {
        logMessage("Next cron time OK, proceeding...");

        // ---------- API CALL ----------
        $collectionId = (in_array($row['awseventname'], ["All", "Unknown"])) ? "shivaguptabcakhoji4" : "shivaguptabcavehicle";

        $vectorResponse = callApi($collectionId);
        logMessage("API response obtained");

        // ---------- SAVE VECTOR RESPONSE ----------
        saveVectorResponse($conn, $vectorResponse);

        // ---------- UPDATE INDEXER ----------
        $lastResponseRes = $conn->query('SELECT * FROM indexer WHERE imagestatus = \'success\' ORDER BY id DESC LIMIT 1');
        $lastResponse = $lastResponseRes ? $lastResponseRes->fetch() : ['algoResponse' => ''];

        try {
            $stmt = $conn->prepare("UPDATE indexer SET 
                        oldresponse = :oldResponse,
                        algoresponse = :algoResponse,
                        imagestatus = 'Success',
                        algosenttime = :algoSentTime,
                        algoreceivedtime = CURRENT_TIMESTAMP
                      WHERE id = :id");
            $stmt->execute([
                ':oldResponse'   => $lastResponse['algoresponse'] ?? '',
                ':algoResponse'  => json_encode($vectorResponse),
                ':algoSentTime'  => $algoSentTime,
                ':id'            => $row['id']
            ]);
            logMessage("Indexer updated successfully for ID " . $row['id']);
        } catch (Throwable $e) {
            logMessage("Indexer update failed: " . $e->getMessage());
        }

        // ---------- SMS SECTION ----------
        if ($row['isfromupload'] == 1 && $row['ismessagesent'] != 1 && $row['awseventname'] == 'All') {
            $getImage = $conn->prepare('SELECT * FROM unknown_person WHERE id = :id');
            $getImage->execute([':id' => $row['unknownid']]);
            $image = $getImage->fetch();

            $mob = '91' . $image['well1'];
            $smsData = [
                "applicationNumber" => $image['application_no'],
                "expiryDate" => $image['expirydate'],
                "mob" => $mob,
                "templateId" => '68ce894906fe837d93181f14'
            ];

            logMessage("Sending SMS to {$mob} with data: " . json_encode($smsData));
            $response = sendSms($mob, $smsData);
            logMessage("SMS send response: " . $response);

            $stmt = $conn->prepare("UPDATE indexer SET ismessagesent = 1 WHERE id = :id");
            $stmt->execute([':id' => $row['id']]);
            logMessage("SMS status updated for indexer ID " . $row['id']);
        }

        // ---------- UPDATE nextCronTime ----------
        $getImage = $conn->prepare('SELECT * FROM unknown_person WHERE id = :id');
        $getImage->execute([':id' => $row['unknownid']]);
        $image = $getImage->fetch();
        $photos = [$image['photo'], $image['photo1'], $image['photo2']];
        foreach ($photos as $photo) {
            if ($photo) {
                $stmt = $conn->prepare('INSERT INTO nextcrontime (nextcrontime, photo) VALUES (:nextCronTime, :photo)');
                $stmt->execute([
                    ':nextCronTime' => date('Y-m-d H:i:s', strtotime('+3 minutes')),
                    ':photo'        => $photo
                ]);
                break;
            }
        }
        logMessage("Next cron time updated");
    } else {
        logMessage("Next cron time not reached yet");
    }
} else {
    logMessage("No pending indexer rows found");
}

// PDO: nothing to close explicitly
logMessage("Cron finished\n");
?>
