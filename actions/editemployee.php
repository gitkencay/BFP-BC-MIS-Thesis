<?php
require '../require/databaseconnection.php';
if(isset($_POST['edit_new_employ'])){
    $officer_type = $_POST['officer_type'];
    $rank = $_POST['rank'];
    $id = $_POST['id'];
    $officer_fname = $_POST['officer_fname'];
    $officer_mname = $_POST['officer_mname'];
    $officer_lname = $_POST['officer_lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $firestation = $_POST['firestation'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");

    $conn->query("UPDATE `employee` SET `officer_type` = '$officer_type', `rank` = '$rank', `officer_fname` = '$officer_fname', `officer_mname` = '$officer_mname', `officer_lname` = '$officer_lname', `username` = '$username',`password` = '$password', `confirm_password` = '$confirm_password',`firestation` = '$firestation' WHERE `id` = '$id'") or die(mysqli_error());


    echo "<script type='text/javascript'>alert('Successfully edited Employee profile!');</script>";
    echo "<script>document.location='../DataEntry-EmpProf.php'</script>";
}
?>