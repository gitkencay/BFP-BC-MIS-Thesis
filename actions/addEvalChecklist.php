<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if (isset($_POST['save_eval_checklist'])) {
    $application_no = $_POST['application_no'];
    $application_number = $_POST['application_number'];
    $plan_evaluator = $_POST['plan_evaluator'];
    $owner_name = $_POST['owner_name'];
    $business_name = $_POST['business_name'];
    $project_title = $_POST['project_title'];
    $location = $_POST['location'];
    $occupancy_classification = $_POST['occupancy_classification'];
    $date_received = $_POST['date_received'];
    $means_of_egrees = $_POST['means_of_egrees'];
    $walls = $_POST['walls'];
    $compartmentation = $_POST['compartmentation'];
    $warning_systems = $_POST['warning_systems'];
    $fire_protection = $_POST['fire_protection'];
    $miscellaneous = $_POST['miscellaneous'];
    $month = date("M");
    $year = date("Y");
    $status = $_POST['status_of_checklist'];
    $new = "";
    $new2 = "";
    $new3 = "";
    $new4 = "";
    $new5 = "";
    $new6 = "";

    if (empty($_POST["means_of_egrees"])) {
        $new = 'No Means of Egrees';
        $check = 'No Means of Egrees';
    } else {
        foreach ($means_of_egrees as $value) {
            $new .= $value . ",";
        }
        $check = 'Has Means of Egrees';
    }

    if (empty($_POST["walls"])) {
        $new2 = 'No Walls';
        $check2 = 'No Walls';
    } else {
        foreach ($walls as $value) {
            $new2 .= $value . ",";
        }
        $check2 = 'Has Walls';
    }

    if (empty($_POST["compartmentation"])) {
        $new3 = 'No Compartmentation';
        $check3 = 'No Compartmentation';
    } else {
        foreach ($compartmentation as $value) {
            $new3 .= $value . ",";
        }
        $check3 = 'Has Compartmentation';
    }

    if (empty($_POST["warning_systems"])) {
        $new4 = 'No Warning Systems';
        $check4 = 'No Warning Systems';
    } else {
        foreach ($warning_systems as $value) {
            $new4 .= $value . ",";
        }
        $check4 = 'Has Warning Systems';
    }

    if (empty($_POST["fire_protection"])) {
        $new5 = 'No Fire Protection';
        $check5 = 'No Fire Protection';
    } else {
        foreach ($fire_protection as $value) {
            $new5 .= $value . ",";
        }
        $check5 = 'Has Fire Protection';
    }

    if (empty($_POST["miscellaneous"])) {
        $new6 = 'No Miscellaneous';
        $check6 = 'No Miscellaneous';
    } else {
        foreach ($miscellaneous as $value) {
            $new6 .= $value . ",";
        }
        $check6 = 'Has Miscellaneous';
    }

    $checked = $check . ' ' . $check2 . ' ' . $check3 . ' ' . $check4 . ' ' . $check5 . ' ' . $check6;

    if ($checked == "No Means of Egrees No Walls No Compartmentation No Warning Systems No Fire Protection No Miscellaneous") {
        $status = 'Ready for Certification';
    } else {
        $status = 'On Progress';
    }

    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... ..

    $conn->query("INSERT INTO `evaluation_checklist` VALUES('', '$application_number', '$plan_evaluator', '$owner_name', '$business_name', '$project_title',
    '$location', '$occupancy_classification', '$date_received', '$new', '$new2', '$new3', '$new4', '$new5',
    '$new6', '$month', '$year', '$status', '$checked', 'Pending')") or die(mysqli_error());

    if ($status == 'Ready for Certification') {
        $conn->query("UPDATE `application` SET `assessment_status` = 'Evaluated' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    }
    if ($status == 'On Progress') {
        $conn->query("UPDATE `application` SET `assessment_status` = 'On Progress' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    }

    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Evaluation Checklist!');</script>";
    echo "<script>document.location='../Transaction-BuildEval.php'</script>";

    if ($status == 'Ready for Certification') {
        include 'smsgateway.php';
        $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk", "ken05cay@gmail.com", "Kenneth**1995");
        $deviceID = 108296;

        $number = $_POST['number'];
        $nameofowner = $_POST['nameofowner'];
        $appnum = $_POST['appnum'];
        $message = $_POST['message'];
        date_default_timezone_set('Asia/Manila');
        $date_applied = date("F j, Y g:i a");

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
        $conn->query("INSERT INTO `messages` VALUEs('','$appnum', '$nameofowner','$number', '$message', 'Assessment', '$date_applied')") or die(mysqli_error());
        $conn->close();
    }

    if ($status == 'On Progress') {
        include 'smsgateway.php';
        $smsGateway = new SmsGateway("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJhZG1pbiIsImlhdCI6MTU0NzY2MDMxOCwiZXhwIjo0MTAyNDQ0ODAwLCJ1aWQiOjY2NTk3LCJyb2xlcyI6WyJST0xFX1VTRVIiXX0.Y25qEJcroUcA-o0ylz1QqK_T6RMjRsaejTfkTXAcfJk", "ken05cay@gmail.com", "Kenneth**1995");
        $deviceID = 108296;

        $number = $_POST['number'];
        $nameofowner = $_POST['nameofowner'];
        $appnum = $_POST['appnum'];
        $message = $_POST['message2'];
        date_default_timezone_set('Asia/Manila');
        $date_applied = date("F j, Y g:i a");

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
        $conn->query("INSERT INTO `messages` VALUEs('','$appnum', '$nameofowner','$number', '$message', 'Assessment', '$date_applied')") or die(mysqli_error());
        $conn->close();
    }
}
