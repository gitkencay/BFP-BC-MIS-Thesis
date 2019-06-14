<?php

$passwordold = $_POST['passwordold'];

require '../require/databaseconnection.php';

$q1 = $conn->query ("select * from `users` where `password` = '$passwordold'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$check = $q1->num_rows;
echo $check;

?>