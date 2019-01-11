<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_inspection'])){
    $io_no = $_POST['io_no'];
    $application_no = $_POST['application_no'];
    $application_number = $_POST['application_number'];
    $owner_name = $_POST['owner_name'];
    $owner_address = $_POST['owner_address'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['establishment_address'];
    $bldg_height = $_POST['bldg_height'];
    $lot_size = $_POST['lot_size'];
    $number_of_floors = $_POST['number_of_floors'];
    $recommendation = $_POST['recommendation'];
    $application_nos = $_POST['application_number'];
    $date_applied = $_POST['date_applied'];
    date_default_timezone_set('Asia/Manila');
    $date_applieds=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");
    $checklist_classification = $_POST['checklist_classification'];
    $checklist_exit = $_POST['checklist_exit'];
    $checklist_lightings = $_POST['checklist_lightings'];
    $checklist_protection = $_POST['checklist_protection'];
    $checklist_equipments = $_POST['checklist_equipments'];
    $checklist_hazardous = $_POST['checklist_hazardous'];
    $checklist_operating = $_POST['checklist_operating'];

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


    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
   $conn->query("INSERT INTO `inspection_report` VALUES('', '$io_no', '$application_no', '$owner_name', '$owner_address', '$business_name', 
    '$establishment_address', '$bldg_height', '$lot_size', '$number_of_floors', '$date_applied', '$month', '$year', 'Inspection Report', '$recommendation',
    '$checklist_classification', '$checklist_exit', '$checklist_lightings', '$checklist_protection', '$checklist_equipments', '$checklist_hazardous', '$checklist_operating')") or die(mysqli_error());
   

    $conn->query("UPDATE `application` SET `assessment_status` = 'Inspected' WHERE `application_no` = '$application_number'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Inspection Order and Report!');</script>";
    echo "<script>document.location='../Transaction-Inspection.php'</script>";
}
?>