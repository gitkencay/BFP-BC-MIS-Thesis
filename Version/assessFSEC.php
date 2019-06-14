<?php
if(isset($_POST['submit'])){
    $application_no = $_POST['application_no'];
    $application_name = $_POST['application_name'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $business_name = $_POST['business_name'];
    $application_type = $_POST['application_type'];
    $construction_tax = $_POST['construction_tax'];
    $reality_tax = $_POST['reality_tax'];
    $premium_tax = $_POST['premium_tax'];
    $sales_tax = $_POST['sales_tax'];
    $proceeds_tax = $_POST['proceeds_tax'];
    $inspection_fee = $_POST['inspection_fee'];
    $storage_clearance = $_POST['storage_clearance'];
    $conveyance_clearance = $_POST['conveyance_clearance'];
    $installation_clearance = $_POST['installation_clearance'];
    $other_clearance = $_POST['other_clearance'];
    $total_amount = $_POST['total_amount'];
    date_default_timezone_set('Asia/Manila');
    $month = date("M");
    $year = date("Y");

    require '../require/databaseconnection.php';

    $conn->query("INSERT INTO `assessment` VALUES('', '$application_no', '$application_name', '$location', '$status', '$business_name', '$application_type', 
    '$construction_tax', '$reality_tax', '$premium_tax', '$sales_tax', '$proceeds_tax', '$inspection_fee', '$storage_clearance', 
    '$conveyance_clearance', '$installation_clearance', '$other_clearance', '$total_amount', '$month', '$year')") or die(mysqli_error());

    $conn->query("UPDATE `application` SET `assessment_status` = 'Assessed' WHERE `application_no` = '$application_no'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new FSEC Assessment!');</script>";
    echo "<script>document.location='../Transaction-Assessment.php'</script>";
}
?>