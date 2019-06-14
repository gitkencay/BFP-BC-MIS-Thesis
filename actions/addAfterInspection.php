<?php
if (isset($_POST['saveafterinspection'])) {
    $io_no = $_POST['io_no'];
    $application_no = $_POST['application_no'];
    $appnum = $_POST['appnum'];
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $estab = $_POST['establishment_address'];
    $bldg_height = $_POST['bldg_height'];
    $lot_size = $_POST['lot_size'];
    $number_of_floors = $_POST['number_of_floors'];
    date_default_timezone_set('Asia/Manila');
    $date_created = date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");
    $recommendation = $_POST['recommendation'];
    $checklist_classification = $_POST['checklist_classification'];
    $checklist_exit = $_POST['checklist_exit'];
    $checklist_lightings = $_POST['checklist_lightings'];
    $checklist_protection = $_POST['checklist_protection'];
    $checklist_equipments = $_POST['checklist_equipments'];
    $checklist_hazardous = $_POST['checklist_hazardous'];
    $checklist_operating = $_POST['checklist_operating'];
    $officername = $_POST['officername'];

    if (empty($_POST["checklist_classification"])) {
        $checklist_classification = 'NA';

    }
    if (empty($_POST["checklist_exit"])) {
        $checklist_exit = 'NA';

    }
    if (empty($_POST["checklist_lightings"])) {
        $checklist_lightings = 'NA';

    }
    if (empty($_POST["checklist_protection"])) {
        $checklist_protection = 'NA';

    }
    if (empty($_POST["checklist_equipments"])) {
        $checklist_equipments = 'NA';

    }
    if (empty($_POST["checklist_hazardous"])) {
        $checklist_hazardous = 'NA';

    }
    if (empty($_POST["checklist_operating"])) {
        $checklist_operating = 'NA';

    }

    $check = $checklist_classification . ' ' . $checklist_exit . ' ' . $checklist_lightings . ' ' . $checklist_protection . ' ' . $checklist_equipments . ' ' . $checklist_hazardous . ' ' . $checklist_operating;

    if ($check == 'NA NA NA NA NA NA NA') {
        $status_of_checklist = 'for certification';
    } else {
        $status_of_checklist = 'for compliance';
    }

    require '../require/databaseconnection.php';

    $conn->query("INSERT INTO `inspection_report` VALUES('','$io_no','$application_no','$owner_name','$business_name','$estab','$bldg_height','$lot_size', '$number_of_floors','$month','$year','$recommendation','$checklist_classification','$checklist_exit','$checklist_lightings','$checklist_protection', '$checklist_equipments','$checklist_hazardous','$checklist_operating','$status_of_checklist','$officername','$check','$date_created')") or die(mysqli_error());
    
    $conn->query("UPDATE `inspection_order` SET `status` = '$status_of_checklist' WHERE `applicantsnumber` = '$appnum'") or die(mysqli_error());

    if ($status_of_checklist == 'for certification') {
        $conn->query("UPDATE `application` SET `assessment_status` = 'Inspected' WHERE `application_no` = '$appnum'") or die(mysqli_error());
    }
    if ($status_of_checklist == 'for compliance') {
        $conn->query("UPDATE `application` SET `assessment_status` = 'For Compliance' WHERE `application_no` = '$appnum'") or die(mysqli_error());
    }

    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Inspection Report!');</script>";
    echo "<script>document.location='../Transaction-Inspection.php'</script>";

}

if(isset($_POST['saveafterinspection'])){
    if($status == 'for certification'){
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

        if($status == 'for compliance'){
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