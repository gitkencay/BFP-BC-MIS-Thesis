<?php

$username = $_POST['username'];

require '../require/databaseconnection.php';

$q1 = $conn->query ("select * from `application` where application_type = 'FSEC' && `username` = '$username'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;
echo $check;

?>