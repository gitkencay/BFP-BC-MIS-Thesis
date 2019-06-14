<?php
if(isset($_POST['submit'])){
    $application_name = $_POST['application_name'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['establishment_address'];
    $building_type = $_POST['building_type'];
    $barangay_name = $_POST['barangay_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $number_of_floors = $_POST['number_of_floors'];
    $lot_size = $_POST['lot_size'];
    $status = $_POST['status'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");
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
    if (empty($_POST['owner_name'])){
         $owner_name = $_POST['application_name'];
    }
    else 
         $owner_name = $_POST['owner_name'];
    



    require '../require/databaseconnection.php';


    $conn->query("INSERT INTO `application` VALUES('', 'FSEC', '$application_name', '$business_name', '$establishment_address', '$building_type', '$barangay_name', 'NA', '$date_applied', '$username', '$password', '$owner_name', '$number_of_floors', '$lot_size', '$status', '$new', 'Unassessed', '$month', '$year')") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new FSEC application!');</script>";
    echo "<script>document.location='../DataEntry-AppReg.php'</script>";
}
?>