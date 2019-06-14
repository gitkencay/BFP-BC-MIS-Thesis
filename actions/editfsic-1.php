<?php
require '../require/databaseconnection.php';
if(isset($_POST['editfsic'])){
    $application_no = $_POST['application_no'];
    $application_name = $_POST['application_name'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['establishment_address'];
    $building_type = $_POST['building_type'];
    $barangay_name = $_POST['barangay_name'];
    $type_of_permit = $_POST['type_of_permit'];
    $cpnumb = $_POST['cpnumb'];
    $croname = $_POST['croname'];
    $owner_name = $_POST['owner_name'];
    $number_of_floors = $_POST['number_of_floors'];
    $lot_size = $_POST['lot_size'];
    $status = $_POST['status'];
    $initial_requirements = $_POST['initial_requirements'];
    $new = "";
	if (empty($_POST["initial_requirements"])) {
		$new = 'No Initial Requirements';

	}
	else {
		foreach($initial_requirements as $value)  
		{  
			$new .= $value . ",";  
		}
	}


    $conn->query("UPDATE `application` SET `application_name` = '$application_name', `business_name` = '$business_name', `establishment_address` = '$establishment_address', `building_type` = '$building_type', `barangay_name` = '$barangay_name', `type_of_permit` = '$type_of_permit', `cpnumb` = '$cpnumb', `owner_name` = '$owner_name', `number_of_floors` = '$number_of_floors', `lot_size` = '$lot_size', `status` = '$status', `initial_requirements` = '$new' WHERE `application_no` = '$application_no'") or die(mysqli_error());


    echo "<script type='text/javascript'>alert('Successfully edited FSIC application!');</script>";
    echo "<script>document.location='../DataEntry-AppReg.php'</script>";
}
?>