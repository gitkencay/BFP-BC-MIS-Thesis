<?php

if(isset($_POST['add'])){
    $io_no = $_POST['io_no'];
    $inspector_name = $_POST['inspector_name'];
    $inspection_date = $_POST['inspection_date'];
    $inspection_time = $_POST['inspection_time'];

    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y - g:i a");
    $month = date("M");
    $year = date("Y");


    require '../require/databaseconnection.php';

    $conn->query("INSERT INTO `inspection_schedule` VALUES('', '$io_no', '$inspector_name', '$inspection_date', '$inspection_time', '$date_applied', '$month', '$year', 'Pending', '0', 'Pending')") or die(mysqli_error());

}
?>