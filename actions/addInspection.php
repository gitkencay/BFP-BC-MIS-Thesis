<?php

if (isset($_POST['save_inspection'])) {
    $applicantsnumber = $_POST['applicantsnumber'];
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $inspection_cro = $_POST['inspection_cro'];
    $estabaddress = $_POST['estabaddress'];
    $date_applied = $_POST['date_applied'];
    date_default_timezone_set('Asia/Manila');
    $date_created = date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");

    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... ..
    $conn->query("INSERT INTO `inspection_order` VALUES('','$applicantsnumber','$owner_name','$business_name','$estabaddress','$inspection_cro','$date_applied','$date_created','$month','$year','For After Inspection Report')") or die(mysqli_error());

    $conn->query("UPDATE `application` SET `assessment_status` = 'After Inspection Report' WHERE `application_no` = '$applicantsnumber'") or die(mysqli_error());

    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Inspection Order!');</script>";
    echo "<script>document.location='../inspection-orderEdit.php?appnum=$applicantsnumber'</script>";
}

// ang 'submit', name na sa ka button sa may modal ang SAVE na button

if (isset($_POST['save_inspection'])) 
    {
        include 'smsgateway.php';
        $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk", "ken05cay@gmail.com", "Kenneth**1995");
        $deviceID = 108296;

        $number = $_POST['number'];
        $message = $_POST['message'];
        date_default_timezone_set('Asia/Manila');
        $date_applieds = date("F j, Y g:i a");
        $nameofowner = $_POST['nameofowner'];
        $appnum = $_POST['appnum'];

        $options = [
            'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour'), // Cancel the message in 1 hour if the message is not yet sent
        ];

        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
        if ($result) {
            echo json_encode("");
        } else {
            echo "Something went wrong";
        }

        require '../require/databaseconnection.php';
        $conn->query("INSERT INTO `messages` VALUES('','$appnum', '$nameofowner', '$number', '$message', 'Inspection', '$date_applieds')") or die(mysqli_error());
        $conn->close();
    }
?>