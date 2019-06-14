<?php

require_once '../require/logincheck.php';
$id = $_SESSION['id'];

if(isset($_POST['savefireincident'])){
    $dateofincident = $_POST['dateofincident'];
    $areatype = $_POST['areatype'];
    $structures = $_POST['structures'];
    $location = $_POST['location'];
    $time = $_POST['time'];
    $casualties = $_POST['casualties'];
    $barangay = $_POST['barangay'];
    $civilianinjured = $_POST['civilianinjured'];   
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $month = date("M");
    $year = date("Y");

    require '../require/databaseconnection.php';

    $query2 = $conn->query("SELECT * from `users` WHERE `id` = '$id'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();

    $cro = $fetch2['fname'] . ' '. $fetch2['lname'];

    $conn->query("INSERT INTO `fire_incident` VALUES('', '$dateofincident', '$structures', '$areatype', '$location', '$time', '$casualties', '$barangay', '$civilianinjured', '$date_applied', '$month', '$year', '$cro')") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Fire Incident!');</script>";
    echo "<script>document.location='../Report-FireFrequency.php'</script>";
}

?>