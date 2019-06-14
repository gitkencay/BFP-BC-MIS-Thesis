<?php
    require '../require/databaseconnection.php';
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if (isset($_POST['save_eval_checklist'])) {
    $checklist_no = $_POST['checklist_no'];
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
    $new1 = "";
    $new2 = "";
    $new3 = "";
    $new4 = "";
    $new5 = "";
    $new6 = "";
    $status = $_POST['status_of_checklist'];

    if (empty($_POST["means_of_egrees"])) {
		$new1 = 'No Means of Egrees';
	}
	else {
		foreach($means_of_egrees as $value)  
		{  
			$new1 .= $value . ",";  
        }
    }
    if (empty($_POST["walls"])) {
		$new2 = 'No Walls';
	}
	else {
		foreach($walls as $value)  
		{  
			$new2 .= $value . ",";  
        }
    }
    if (empty($_POST["compartmentation"])) {
		$new3 = 'No Compartmentation';
	}
	else {
		foreach($compartmentation as $value)  
		{  
			$new3 .= $value . ",";  
        }
    }
    if (empty($_POST["warning_systems"])) {
		$new4 = 'No Warning Systems';
	}
	else {
		foreach($warning_systems as $value)  
		{  
			$new4 .= $value . ",";  
        }
    }
    if (empty($_POST["fire_protection"])) {
		$new5 = 'No Fire Protection';
	}
	else {
		foreach($fire_protection as $value)  
		{  
			$new5 .= $value . ",";  
        }
    }
    if (empty($_POST["miscellaneous"])) {
		$new6 = 'No Miscellaneous';
	}
	else {
		foreach($miscellaneous as $value)  
		{  
			$new6 .= $value . ",";  
        }
    }

    // $checked = $new . ' ' . $new2 . ' ' . $new3 . ' ' . $new4 . ' ' . $new5 . ' ' . $new6;
    // if ($checked == 'No Means of Egrees No Walls No Compartmentation No Warning Systems No Fire Protection No Miscellaneous') {
    //     $status = 'Ready for Certification';
    // } else {
    //     $status = 'On Progress';
    // }



    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... ..

    $conn->query("UPDATE `evaluation_checklist` SET `application_no` = '$application_no', `plan_evaluator` = '$plan_evaluator', `owner_name` = '$owner_name', `business_name` = '$business_name', `project_title` = '$project_title', `location` = '$location', `occupancy_classification` = '$occupancy_classification', `date_received` = '$date_received', `means_of_egrees` = '$new1', `walls` = '$new2', `compartmentation` = '$new3', `warning_systems` = '$new4', `fire_protection` = '$new5', `miscellaneous` = '$new6' WHERE `checklist_no` = '$checklist_no'") or die(mysqli_error());

    // if ($status == 'Ready for Certification') {
    //     $conn->query("UPDATE `application` SET `assessment_status` = 'Evaluated' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    // }
    // if ($status == 'On Progress') {
    //     $conn->query("UPDATE `application` SET `assessment_status` = 'On Progress' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    // }
    echo "<script type='text/javascript'>alert('Successfully edited new Evaluation Checklist!');</script>";
    echo "<script>document.location='../Transaction-BuildEval.php'</script>";
}
?>