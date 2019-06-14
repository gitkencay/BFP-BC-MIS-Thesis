<?php
require '../require/databaseconnection.php';

$query = $conn->query("SELECT * FROM `inspection_schedule` where inspectors = '$_GET[name]' && year = '$_GET[year]'") or die(mysqli_error());
$fetch = $query->fetch_array();

$reminder = $fetch['remind']+1;
$inspectors2 = $_GET['name'];
$number =  $_GET['num'];

$query2 = $conn->query("SELECT * FROM `employee` where fullname = '$inspectors2'") or die(mysqli_error());
$fetch2 = $query2->fetch_array();
date_default_timezone_set('Asia/Manila');
$date_applied=date("F j, Y g:i a");

$cpnumber = $fetch2['contact_num'];
$message = 'Good day Inspector '. $inspectors2 .' You have '. $number . ' PENDING SCHEDULE. \nDo not reply on this number';

            include('smsgateway.php');
            $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk","ken05cay@gmail.com","Kenneth**1995");
            $deviceID = 108296;

            $options = [
                'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
                'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
            ];
        
            $result = $smsGateway->sendMessageToNumber($cpnumber, $message, $deviceID, $options);
            if ($result) {
                echo json_encode("");
            }
            else {
                echo "Something went wrong";
            }


            $conn->query("UPDATE `inspection_schedule` SET `remind` = '$reminder' where `inspectors` = '$inspectors2'") or die(mysqli_error());
            $conn->query("INSERT INTO `messages` VALUES('','','$inspectors2','$cpnumber','$message','Schedule Reminder','$date_applied')") or die(mysqli_error());
            
            $conn->close();
            echo "<script type='text/javascript'>alert('Successfully send a message to the inspector');</script>";
            echo "<script>document.location='../Report-Transaction.php'</script>";


?>