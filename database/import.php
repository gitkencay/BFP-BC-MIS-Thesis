<?php

require_once '../require/logincheck.php';


$connection = mysqli_connect('localhost', 'root', '', 'bfp-bcmis');
$date = date("Y-m-d H:i:s");

$filename = 'bfp-bcmis.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));

$sql = explode(';', $contents);
foreach ($sql as $query){
    $result = mysqli_query($connection, $query);
}

fclose($handle);
date_default_timezone_set('Asia/Manila');
$date=date("F j, Y, g:i a");
$id=$_SESSION['user_id'];

$connection->query("INSERT INTO `backup` VALUES('', '$id','Successfully imported database', '$date')") or die(mysqli_error());
echo "<script>alert('Successfully imported database!')</script>";
echo "<script>document.location='../Maintenance-SystemBackUp.php'</script>";  


?>