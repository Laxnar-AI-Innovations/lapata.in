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

    $result = $conn->query('SELECT "status" FROM "indexedImages" ORDER BY "Id" DESC LIMIT 1');
    $rows = $result ? $result->fetchAll() : [];
    if($rows){
        foreach($rows as $row){
            if($row['status'] == 'Received'){
                $curl = curl_init();
                $postdata = json_encode(array(
                    "collection_id" => "shivaguptabcakhoji4",
                ));
                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://api.pixnif.com/api/v1/sd/vectorizer',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => $postdata,
                  CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN',
                  ),
                ));
                $vectorResponse = json_decode(curl_exec($curl),true);
                if(isset($vectorResponse['output'])){
                    $stmt = $conn->prepare('INSERT INTO "vectorResponse" ("response","dateCreated") VALUES (:response, CURRENT_TIMESTAMP)');
                    $stmt->execute([':response' => $vectorResponse['output']]);
                } else {
                    $output = $vectorResponse['Message']['total_faces'].' Vectorised successfully';
                    $stmt = $conn->prepare('INSERT INTO "vectorResponse" ("response","dateCreated") VALUES (:response, CURRENT_TIMESTAMP)');
                    $stmt->execute([':response' => $output]);
                }
                $conn->query('INSERT INTO "indexedImages" ("date","status") VALUES (CURRENT_TIMESTAMP,\'Sent\')');
                curl_close($curl);
            } else {
                $conn->query('INSERT INTO "indexedImages" ("date","status") VALUES (CURRENT_TIMESTAMP,\'Received\')');
            }
        }
    } else {
        $conn->query('INSERT INTO "indexedImages" ("date","status") VALUES (CURRENT_TIMESTAMP,\'Received\')');
    }

    $curl = curl_init();
    $postdata = json_encode(array(
        "collection_id" => "shivaguptabcavehicle",
    ));
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.pixnif.com/api/v1/sd/vectorizer',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $postdata,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: PUeneXi4iI5cBFJy5m69KfHoRhrpBActw?Ue185-/OazFu=EsgU4EEIyfpgmUEcN',
      ),
    ));
    $vectorResponse = json_decode(curl_exec($curl),true);
    curl_close($curl);
?>