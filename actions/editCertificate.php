<?php
if(isset($_POST['save_status'])){
    $application_no = $_POST['application_no'];
    $Status = $_POST['Status'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $dateapplies=date("F j ");
    $year = date("Y");
    $years = $year+1;
    $expiry = $dateapplies.' '.$years;
    require '../require/databaseconnection.php';

    $conn->query("UPDATE `application` SET `cert_status` = '$Status', `released_date` = '$date_applied', `expiration_date` = '$expiry' WHERE `application_no` = '$application_no'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully updated Status!');</script>";
    echo "<script>document.location='../Report-Certification.php'</script>";
}
?>

