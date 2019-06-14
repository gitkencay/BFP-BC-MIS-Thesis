<?php

// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_issue_notice'])){
    $type_of_notice = $_POST['type_of_notice'];
    $applicantnumber = $_POST['applicantnumber'];
    $amount = $_POST['amount'];
    $owner_name = $_POST['owner_name'];
    $inspector_name = $_POST['inspectors_drop'];
    $business_name = $_POST['business_name'];
    $date_issued = $_POST['date_issued'];
    $IR_date_applied = $_POST['IR_date_applied'];
    $application_no = $_POST['applicantsnumber'];
    $applicant_num = $_POST['applicant_num'];
    $inspection_order = $_POST['inspection_order'];
    $business_address = $_POST['business_address'];
    $grace_period_from = $_POST['inspection_date1'];
    $grace_period_to = $_POST['inspection_date2'];
    // $status_of_checklist = $_POST['status_of_checklist'];
    $month = date("M");
    $year = date("Y");


    require '../require/databaseconnection.php';


    $conn->query("INSERT INTO `issue_notice` VALUES('', '$type_of_notice', '$amount', '$owner_name', '$inspector_name', '$business_name','$date_issued', '$IR_date_applied', '$applicant_num', '$inspection_order', '$business_address', '$grace_period_from','$grace_period_to', '$month', '$year', ' ')") or die(mysqli_error());

    $conn->query("UPDATE `inspection_order` SET `status` = 'issued NTC' WHERE applicantsnumber = '$applicantnumber'") or die(mysqli_error());

    $conn->query("UPDATE `application` SET `assessment_status` = 'issued NTC' WHERE `application_no` = '$applicantnumber'") or die(mysqli_error());


    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Issue Notice!');</script>";
    echo "<script>document.location='../Transaction-Inspection.php'</script>";
}



if(isset($_POST['save_issue_notice'])){

            include('smsgateway.php');
            $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk","ken05cay@gmail.com","Kenneth**1995");
            $deviceID = 108296;
        
            $number = $_POST['number'];
            $nameofowner = $_POST['nameofowner'];
            $applicant_num = $_POST['applicant_num'];
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
            $conn->query("INSERT INTO `messages` VALUEs('','$applicant_num', '$nameofowner','$number', '$message', 'Issue Notice', '$date_applied')") or die(mysqli_error());
            $conn->close();


}
?>