<?php 
date_default_timezone_set('Asia/Kolkata');
$algoSentTime = date('Y-m-d H:i:s');

$servername = "localhost";
$username   = "khojiuser";
$password   = "Shivag786@";
$database   = "khoji";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to save vectorResponse
function saveVectorResponse($conn, $vectorResponse) {
    if (isset($vectorResponse['output'])) {
        $message = $vectorResponse['output'];
    } elseif (isset($vectorResponse['image_count'])) {
        $message = $vectorResponse['image_count'] . ' Vectorised successfully';
    } else {
        $message = 'Unexpected API response: ' . json_encode($vectorResponse);
    }

    $messageEscaped = $conn->real_escape_string($message);
    $sql = "INSERT INTO vectorResponse (id, response, dateCreated) 
            VALUES (NULL, '{$messageEscaped}', '" . date('Y-m-d H:i:s') . "')";
    if (!$conn->query($sql)) {
        echo "DB Error (vectorResponse insert): " . $conn->error;
    }
}

// First query: awsEventName = "All"
$sql = 'SELECT i.*,u.* FROM indexer i 
        INNER JOIN unknown_person u ON u.id = i.unknownId 
        WHERE i.imageStatus="Pending" 
        AND u.awsEventName="All" 
        AND u.isFinalSubmitted=1 
        ORDER BY i.Id ASC LIMIT 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nextCronTime = $conn->query('SELECT * FROM nextCronTime ORDER BY Id DESC');
        $numRows = $nextCronTime->num_rows;
        if ($numRows > 0) {
            $result1 = $nextCronTime->fetch_assoc();
            if (time() >= strtotime($result1['nextCronTime'])) {
                $curl = curl_init();
                $postdata = json_encode(array("collection_id" => "shivaguptabcakhoji4"));
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://dmat6epj7yjhvxizflfuioym2i0rmpxl.lambda-url.ap-south-1.on.aws/',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $postdata,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN',
                    ),
                ));
                $vectorResponse = json_decode(curl_exec($curl), true);

                saveVectorResponse($conn, $vectorResponse);

                $conn->query("INSERT INTO indexedImages VALUES(NULL,'" . date('Y-m-d H:i:s') . "','Sent')");

                $getPreviousResponse = $conn->query('SELECT * FROM indexer WHERE imageStatus="success" ORDER BY Id DESC LIMIT 1');
                $lastResponse = $getPreviousResponse->fetch_assoc();
                $sql = "UPDATE indexer SET 
                            oldResponse = '" . $conn->real_escape_string($lastResponse['algoResponse']) . "', 
                            algoResponse = '" . $conn->real_escape_string(json_encode($vectorResponse)) . "',
                            imageStatus='Success',
                            algoSentTime = '{$algoSentTime}',
                            algoReceivedTime='" . date('Y-m-d H:i:s') . "' 
                        WHERE Id=" . $row['Id'];
                $conn->query($sql);

                if ($row['isUpload'] == 1 && $row['isMessageSent'] != 1) {
                    $getImage = $conn->query('SELECT * FROM unknown_person WHERE id=' . $row['unknownId']);
                    $image = $getImage->fetch_assoc();
                    $message = 'The Uploaded Missing complaint with application no - ' . $image['Application_no'] . ' will activate today ' . date('h:i A') . ' & expire ' . date('d/m/Y', strtotime($image['expiryDate'])) . '%n %nKHOJI INFOTECH';
                    $mob = '91' . $image['well1'];
                    try {
                        $apiKey = urlencode("NGQ2YzQ3NDM0MjcxNjU2YjcwNmIzOTYzMzI0ZTZkNjg=");
                        $sender = urlencode('KHOJI');
                        $messageEncoded = rawurlencode($message);
                        $data = array('apikey' => $apiKey, 'numbers' => $mob, 'sender' => $sender, 'message' => $messageEncoded);
                        $ch = curl_init('https://api.textlocal.in/send/');
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_exec($ch);
                        $conn->query("UPDATE indexer SET isMessageSent = 1 WHERE Id=" . $row['Id']);
                        curl_close($ch);
                    } catch (\Throwable $th) {
                        throw $th;
                    }
                } else {
                    $getImage = $conn->query('SELECT * FROM unknown_person WHERE id=' . $row['unknownId']);
                    $image = $getImage->fetch_assoc();
                }

                $getIfAlready = $conn->query('SELECT * FROM nextCronTime WHERE imageUrl="' . $image['Photo'] . '"');
                if ($getIfAlready->num_rows > 0) {
                    $getIfAlready = $conn->query('SELECT * FROM nextCronTime WHERE imageUrl="' . $image['Photo1'] . '"');
                    if ($getIfAlready->num_rows > 0) {
                        $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo2'] . '")');
                    } else {
                        $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo1'] . '")');
                    }
                } else {
                    $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo'] . '")');
                }
                curl_close($curl);
            }
        }
    }
} else {
    // awsEventName != "All"
    $sql = 'SELECT i.*,u.* FROM indexer i 
            INNER JOIN unknown_person u ON u.id = i.unknownId 
            WHERE i.imageStatus="Pending" 
            AND u.awsEventName!="All" 
            AND u.isFinalSubmitted=1 
            ORDER BY i.Id ASC LIMIT 1';
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nextCronTime = $conn->query('SELECT * FROM nextCronTime ORDER BY Id DESC');
            $numRows = $nextCronTime->num_rows;
            if ($numRows > 0) {
                $result1 = $nextCronTime->fetch_assoc();
                if (time() >= strtotime($result1['nextCronTime'])) {
                    $curl = curl_init();
                    $postdata = json_encode(array("collection_id" => "shivaguptabcakhoji4"));
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://dmat6epj7yjhvxizflfuioym2i0rmpxl.lambda-url.ap-south-1.on.aws/',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => $postdata,
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN',
                        ),
                    ));
                    $vectorResponse = json_decode(curl_exec($curl), true);

                    saveVectorResponse($conn, $vectorResponse);

                    $conn->query("INSERT INTO indexedImages VALUES(NULL,'" . date('Y-m-d H:i:s') . "','Sent')");

                    $getPreviousResponse = $conn->query('SELECT * FROM indexer WHERE imageStatus="success" ORDER BY Id DESC LIMIT 1');
                    $lastResponse = $getPreviousResponse->fetch_assoc();
                    $sql = "UPDATE indexer SET 
                                oldResponse = '" . $conn->real_escape_string($lastResponse['algoResponse']) . "', 
                                algoResponse = '" . $conn->real_escape_string(json_encode($vectorResponse)) . "',
                                imageStatus='Success',
                                algoSentTime = '{$algoSentTime}',
                                algoReceivedTime='" . date('Y-m-d H:i:s') . "' 
                            WHERE Id=" . $row['Id'];
                    $conn->query($sql);

                    $getImage = $conn->query('SELECT * FROM unknown_person WHERE id=' . $row['unknownId']);
                    $image = $getImage->fetch_assoc();

                    $getIfAlready = $conn->query('SELECT * FROM nextCronTime WHERE imageUrl="' . $image['Photo'] . '"');
                    if ($getIfAlready->num_rows > 0) {
                        $getIfAlready = $conn->query('SELECT * FROM nextCronTime WHERE imageUrl="' . $image['Photo1'] . '"');
                        if ($getIfAlready->num_rows > 0) {
                            $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo2'] . '")');
                        } else {
                            $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo1'] . '")');
                        }
                    } else {
                        $conn->query('INSERT INTO nextCronTime VALUES(NULL,"' . date('Y-m-d H:i:s', strtotime('+3 minutes')) . '","' . $image['Photo'] . '")');
                    }
                    curl_close($curl);
                }
            }
        }
    }
}

$conn->close();

// Final curl call
$curl = curl_init();
$postdata = json_encode(array("collection_id" => "shivaguptabcavehicle"));
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dmat6epj7yjhvxizflfuioym2i0rmpxl.lambda-url.ap-south-1.on.aws/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $postdata,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN',
    ),
));
$vectorResponse = json_decode(curl_exec($curl), true);
curl_close($curl);
?>
