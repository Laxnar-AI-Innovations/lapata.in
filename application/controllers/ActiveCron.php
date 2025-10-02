<?php 
    date_default_timezone_set('Asia/Kolkata');
    $pgHost   = getenv('DB_HOST') ?: 'localhost';
    $pgPort   = getenv('DB_PORT') ?: '5432';
    $pgDb     = getenv('DB_NAME') ?: 'postgres';
    $pgUser   = getenv('DB_USER') ?: 'postgres';
    $pgPass   = getenv('DB_PASS') ?: '';
    $sslmode  = getenv('DB_SSLMODE') ?: 'require';

    $dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s;sslmode=%s', $pgHost, $pgPort, $pgDb, $sslmode);
    try {
        $conn = new PDO($dsn, $pgUser, $pgPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    } catch (Throwable $e) {
        http_response_code(500);
        echo 'DB error';
        exit;
    }

    $stmt = $conn->query('SELECT * FROM unknown_person WHERE "isFinalSubmitted" = 1 AND "awsEventName" = \'All\' AND "isMessageSent" = 0');
    $rows = $stmt ? $stmt->fetchAll() : [];
    if($rows){
        foreach($rows as $row){
            $finalSubmitTime = $row['finalSubmitTime'];
            $date1 = new DateTime();
            $date2 = new DateTime($finalSubmitTime);
            $date2 = $date2->modify('+4 minutes');
            $interval = $date1->diff($date2);
            $diff =  $interval->i;
            if($diff > 4){
                $mob = '91'.$row['well1'];
                try {
                    $apiKey = urlencode("NGQ2YzQ3NDM0MjcxNjU2YjcwNmIzOTYzMzI0ZTZkNjg=");
                    $sender = urlencode('KHOJI');
                    $msg = "Uploaded missing complaint with application no - ".$row['Application_no']." is activated till ".date('d-m-Y',strtotime($row['expiryDate'])).". %nKHOJI";
                    $message = rawurlencode($msg);
                    $data = array('apikey' => $apiKey, 'numbers' => $mob, 'sender' => $sender, 'message' => $message);
                    $ch = curl_init('https://api.textlocal.in/send/');
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    $stmtU = $conn->prepare('UPDATE unknown_person SET "isMessageSent" = 1 WHERE id = :id');
                    $stmtU->execute([':id' => $row['id']]);
                    curl_close($ch);
                } catch (Throwable $th) {
                    throw $th;
                }
            }
        }
    }
?>