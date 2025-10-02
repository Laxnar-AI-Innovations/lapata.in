<?php 
    date_default_timezone_set('Asia/Kolkata');
    $servername = "localhost"; // Change this to your database server
    $username = "khoji_user"; // Change this to your database username
    $password = "K~RWw{{%Gai&"; // Change this to your database password
    $database = "khoji_db"; // Change this to your database name
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = 'select * from unknown_person where isFinalSubmitted = 1 and awsEventName="All" and isMessageSent = 0';
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
            $finalSubmitTime = $row['finalSubmitTime'];
            $date1 = new DateTime();
            $date2 = new DateTime($finalSubmitTime);
            $date2 = $date2->modify('+4 minutes');
            $interval = $date1->diff($date2);
            $diff =  $interval->i;
            if($diff > 4)
            {
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
                    $sql = "update unknown_person set isMessageSent = 1 where id=".$row['id'];
                    $update = $conn->query($sql);
                    curl_close($ch);
                } catch (\Throwable $th) {
                    throw $th;
        
                }
            }
        }
    }
    $conn->close();
?>