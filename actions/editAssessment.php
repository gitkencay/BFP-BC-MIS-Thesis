<?php
if(isset($_POST['submit'])){
    $opsnumber = $_POST['opsnumber'];
    $application_no = $_POST['application_no'];
    $status = $_POST['status'];
    $assessor = $_POST['assessor'];
    date_default_timezone_set('Asia/Manila');
    $month = date("M");
    $year = date("Y");
    $date_applied=date("F j, Y g:i a");
    $payment = $_POST['paymentview'];
    $total_amount = $_POST['total_amount'];
    $changed = $_POST['changed'];

    if($changed >= 0){
        $status = 'Complete';
    }else{
        $status = 'Pending';
    }

    if($payment >= $total_amount){
        $status = 'Complete';
    }else{
        $status = 'Pending';
    }

    require '../require/databaseconnection.php';

    $conn->query("UPDATE `assessment` SET `status` = '$status', `assessor_name` = '$assessor', `payment` = '$payment', `changed` = 'changed' WHERE `ops_no` = '$opsnumber'") or die(mysqli_error());


    $conn->query("UPDATE `application` SET `assessment_status` = 'Assessed' WHERE `application_no` = '$application_no'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Assessment!');</script>";
    echo "<script>document.location='../Transaction-Assessment.php'</script>";

}

if(isset($_POST['submit'])){
    if($status == 'Complete'){
            include('smsgateway.php');
            $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk","ken05cay@gmail.com","Kenneth**1995");
            $deviceID = 108296;
        
            $number = $_POST['number'];
            $nameofowner = $_POST['nameofowner'];
            $appnum = $_POST['appnum'];
            $message = $_POST['message'];
            date_default_timezone_set('Asia/Manila');
            $date_applied=date("F j, Y g:i a");
        
            $options = [
                'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
                'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
            ];
        
            $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
            if ($result) {
                echo json_encode("");
            }
            else {
                echo "Something went wrong";
            }

            require '../require/databaseconnection.php';
            $conn->query("INSERT INTO `messages` VALUEs('','$appnum', '$nameofowner','$number', '$message', 'Assessment', '$date_applied')") or die(mysqli_error());
            $conn->close();
        }

        if($status == 'Pending'){
            include('smsgateway.php');
            $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk","ken05cay@gmail.com","Kenneth**1995");
            $deviceID = 108296;
        
            $number = $_POST['number'];
            $nameofowner = $_POST['nameofowner'];
            $appnum = $_POST['appnum'];
            $message = $_POST['message2'];
            date_default_timezone_set('Asia/Manila');
            $date_applied=date("F j, Y g:i a");
        
            $options = [
                'send_at' => strtotime('+30 seconds'), // Send the message in 10 minutes
                'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
            ];
        
            $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
            if ($result) {
                echo json_encode("");
            }
            else {
                echo "Something went wrong";
            }

            require '../require/databaseconnection.php';
            $conn->query("INSERT INTO `messages` VALUEs('','$appnum', '$nameofowner','$number', '$message', 'Assessment', '$date_applied')") or die(mysqli_error());
            $conn->close();
        }

}



?>

