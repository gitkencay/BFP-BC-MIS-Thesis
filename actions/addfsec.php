<?php
if(isset($_POST['submit'])){
    $application_name = $_POST['application_name'];
    $business_name = $_POST['business_name'];
    $establishment_address = $_POST['bussaddress'];
    $building_type = $_POST['building_type'];
    $barangay_name = $_POST['barangay_name'];
    $cpnumb = $_POST['cpnumb'];
    $croname = $_POST['croname'];
    $number_of_floors = $_POST['number_of_floors'];
    $lot_size = $_POST['lot_size'];
    $status = $_POST['status'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $date= $_POST['date_applied'];
    $month = date("M");
    $year = date("Y");
    $owner_name = $_POST['owner_name'];
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

    if($new == "IniReq1,IniReq2,IniReq3,IniReq4,"){
        $status = 'Complete';
    }else{
        $status = 'Pending';
    }
    
    if (empty($_POST['owner_name'])){
         $owner_name = $_POST['application_name'];
    }
    else{
         $owner_name = $_POST['owner_name'];
    }



    require '../require/databaseconnection.php';


    $conn->query("INSERT INTO `application` VALUES('', 'FSEC', '$application_name', '$business_name', '$establishment_address', '$building_type', '$barangay_name', 'NA', '$cpnumb', '$croname', '$date', '$owner_name', '$number_of_floors', '$lot_size', '$status', '$new', 'Unassessed', '$month', '$year', '$date_applied', 'Unrealeased', '', '')") or die(mysqli_error());
    
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new FSEC application!');</script>";
    echo "<script>document.location='../DataEntry-AppReg.php'</script>";
}
?>