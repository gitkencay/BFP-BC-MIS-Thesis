

<!-- Barangay -->
<?php
$conn = new mysqli("localhost", "root", "", "bfp-bcmis") or die(mysqli_error());
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$queryapp = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `status` = 'Pending' && `year` = '$year'") or die(mysqli_error());
$fetchapp = $queryapp->fetch_array();

$queryapp2 = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `status` = 'Complete' && `year` = '$year'") or die(mysqli_error());
$fetchapp2 = $queryapp2->fetch_array();

$queryapp3 = $conn->query("SELECT COUNT(*) as total FROM `assessment` WHERE `status` = 'Pending' && `year` = '$year'") or die(mysqli_error());
$fetchapp3 = $queryapp3->fetch_array();

$queryapp4 = $conn->query("SELECT COUNT(*) as total FROM `assessment` WHERE `status` = 'Complete' && `year` = '$year'") or die(mysqli_error());
$fetchapp4 = $queryapp4->fetch_array();

$queryapp5 = $conn->query("SELECT COUNT(*) as total FROM `inspection_order` WHERE `status` = 'for certification' && `year` = '$year'") or die(mysqli_error());
$fetchapp5 = $queryapp5->fetch_array();

$queryapp6 = $conn->query("SELECT COUNT(*) as total FROM `inspection_order` WHERE `status` != 'for certification' && `year` = '$year'") or die(mysqli_error());
$fetchapp6 = $queryapp6->fetch_array();

$queryapp9 = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `assessment_status` = 'Evaluated' && `year` = '$year'") or die(mysqli_error());
$fetchapp9 = $queryapp9->fetch_array();

$queryapp10 = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `assessment_status` = 'Inspected' && `year` = '$year'") or die(mysqli_error());
$fetchapp10 = $queryapp10->fetch_array();

$queryapp9z = $conn->query("SELECT COUNT(*) as total FROM `evaluation_checklist` WHERE `status` = 'Ready for Certification' && `year` = '$year'") or die(mysqli_error());
$fetchapp9z = $queryapp9z->fetch_array();

$queryapp9y = $conn->query("SELECT COUNT(*) as total FROM `evaluation_checklist` WHERE `status` = 'On Progress' && `year` = '$year'") or die(mysqli_error());
$fetchapp9y = $queryapp9y->fetch_array();
?>


<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res = $conn->query("SELECT * FROM `evaluation_checklist` where year='$year' GROUP BY status") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
    $R = $result['status'];
    $q = $conn->query("SELECT *, COUNT(*) as total FROM `evaluation_checklist` WHERE `status` = '$R' && year = '$year' group by status ") or die(mysqli_error());
    $f = $q->fetch_array();
    $FR = intval($f['total']);
    $point = array('label' => $R, 'y' => $FR);
    array_push($data_points, $point);
}
json_encode($data_points);
?>

<!-- Payment per Month -->  
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res1 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by month") or die(mysqli_error());
$data_points1 = array();
while($result1 = $res1->fetch_array()){
    $R1 = $result1['month'];
    $q1 = $conn->query("SELECT *, sum(total_amount) as total FROM `assessment` WHERE `month` = '$R1' && `year` = '$year' group by month") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $FR1 = intval($f1['total']);
    $point1 = array('label' => $R1, 'y' => $FR1);
    array_push($data_points1, $point1);
}
json_encode($data_points1);
?>


<!-- Payment per Year -->  
<?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res2 = $conn->query("SELECT * FROM `assessment` where `year` = '$year' group by year") or die(mysqli_error());
$data_points2 = array();
while($result2 = $res2->fetch_array()){
    $R2 = $result2['year'];
    $q2 = $conn->query("SELECT sum(total_amount) as total FROM `assessment` WHERE `year` = '$R2' && `year` = '$year' group by year") or die(mysqli_error());
    $f2 = $q2->fetch_array();
    $FR2 = intval($f2['total']);
    $point2 = array('label' => $R2, 'y' => $FR2);
    array_push($data_points2, $point2);
}
json_encode($data_points2);
?>
