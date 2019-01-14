<?php

$fsicusername = $_POST['fsicusername'];

require '../require/databaseconnection.php';

$q1 = $conn->query ("select * from `application` where application_type = 'FSIC' && `username` = '$fsicusername'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;
echo $check;

?>