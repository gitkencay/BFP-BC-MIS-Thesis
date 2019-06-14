<!-- Monthly Application -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "bfp-bcmis") or die(mysqli_error());
$qjan = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>


<!-- Quarterly Application -->
<?php
$quarter1 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$q1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$q2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$q3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$q4 = $quarter4->fetch_array();
$total = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();

?>


<!-- Annual Application-->
<?php

$res = $conn->query("SELECT * FROM `application` GROUP BY year") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['year'];
    $q = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `year` = '$R' group by year") or die(mysqli_error());
    $f = $q->fetch_array();
    $FR = intval($f['total']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);
?>


<!-- Barangay -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res5 = $conn->query("SELECT * FROM `application` GROUP BY barangay_name limit 10") or die(mysqli_error());
$data_points5 = array();
while($result5 = $res5->fetch_array()){
    $R5 = $result5['barangay_name'];
    $q5 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `barangay_name` = '$R5' && `year` = '$year' group by barangay_name limit 10") or die(mysqli_error());
    $f5 = $q5->fetch_array();
    $FR5 = intval($f5['total']);
    $point5 = array('label' => $R5, 'y' => $FR5);
    array_push($data_points5, $point5);
}
json_encode($data_points5);
?>


<!-- Assessment Status -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res6 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY assessment_status") or die(mysqli_error());
$data_points6 = array();
while($result6 = $res6->fetch_array()){
    $R6 = $result6['assessment_status'];
    $q6 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `assessment_status` = '$R6' && `year` = '$year' group by assessment_status") or die(mysqli_error());
    $f6 = $q6->fetch_array();
    $FR6 = intval($f6['total']);
    $point6 = array('label' => $R6, 'y' => $FR6);
    array_push($data_points6, $point6);
}
json_encode($data_points6);
?>


<!-- Type of Permit -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res7 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY type_of_permit") or die(mysqli_error());
$data_points7 = array();
while($result7 = $res7->fetch_array()){
    $R7 = $result7['type_of_permit'];
    $q7 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `type_of_permit` = '$R7' && `year` = '$year' group by type_of_permit") or die(mysqli_error());
    $f7 = $q7->fetch_array();
    $FR7 = intval($f7['total']);
    $point7 = array('label' => $R7, 'y' => $FR7);
    array_push($data_points7, $point7);
}
json_encode($data_points7);
?>


<!-- Building Type -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res8 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY building_type") or die(mysqli_error());
$data_points8 = array();
while($result8 = $res8->fetch_array()){
    $R8 = $result8['building_type'];
    $q8 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `building_type` = '$R8' && `year` = '$year' group by building_type") or die(mysqli_error());
    $f8 = $q8->fetch_array();
    $FR8 = intval($f8['total']);
    $point8 = array('label' => $R8, 'y' => $FR8);
    array_push($data_points8, $point8);
}
json_encode($data_points8);
?>


<!-- Application Type -->
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res9 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY application_type") or die(mysqli_error());
$data_points9 = array();
while($result9 = $res9->fetch_array()){
    $R9 = $result9['application_type'];
    $q9 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `application_type` = '$R9' && `year` = '$year' group by application_type") or die(mysqli_error());
    $f9 = $q9->fetch_array();
    $FR9 = intval($f9['total']);
    $point9 = array('label' => $R9, 'y' => $FR9);
    array_push($data_points9, $point9);
}
json_encode($data_points9);
?>