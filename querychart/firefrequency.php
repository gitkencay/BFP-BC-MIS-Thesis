<!-- Barangay -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$conn = new mysqli("localhost", "root", "", "bfp-bcmis") or die(mysqli_error());
$res5 = $conn->query("SELECT * FROM `fire_incident` where `year` = '$year' GROUP BY `barangay` DESC limit 20") or die(mysqli_error());
$data_points5 = array();
while($result5 = $res5->fetch_array()){
    $R5 = $result5['barangay'];
    $q5 = $conn->query("SELECT sum(casualties) as total FROM `fire_incident` WHERE `barangay` = '$R5' && `year` = '$year' group by barangay DESC limit 20") or die(mysqli_error());
    $f5 = $q5->fetch_array();
    $FR5 = intval($f5['total']);
    $point5 = array('label' => $R5, 'y' => $FR5);
    array_push($data_points5, $point5);
}
json_encode($data_points5);
?>