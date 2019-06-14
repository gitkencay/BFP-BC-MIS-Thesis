
<!-- Monthly Application -->
<?php
$year = date('Y');
require 'require/databaseconnection.php';
$qjan = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
$fjan = $qjan->fetch_array();
$qfeb = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
$ffeb = $qfeb->fetch_array();
$qmar = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
$fmar = $qmar->fetch_array();
$qapr = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
$fapr = $qapr->fetch_array();
$qmay = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
$fmay = $qmay->fetch_array();
$qjun = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
$fjun = $qjun->fetch_array();
$qjul = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
$fjul = $qjul->fetch_array();
$qaug = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
$faug = $qaug->fetch_array();
$qsep = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Sep' && `year` = '$year'") or die(mysqli_error());
$fsep = $qsep->fetch_array();
$qoct = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
$foct = $qoct->fetch_array();
$qnov = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
$fnov = $qnov->fetch_array();
$qdec = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
$fdec = $qdec->fetch_array();
$total = $conn->query("SELECT sum(payment) as total FROM `assessment` WHERE `year` = '$year'") or die(mysqli_error());
$total = $total->fetch_array();
?>


<!-- Quarterly Application -->
<?php
$quarter1 = $conn->query("SELECT sum(payment) as total FROM `assessment` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
$quarter1 = $quarter1->fetch_array();
$quarter2 = $conn->query("SELECT sum(payment) as total FROM `assessment` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
$quarter2 = $quarter2->fetch_array();
$quarter3 = $conn->query("SELECT sum(payment) as total FROM `assessment` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
$quarter3 = $quarter3->fetch_array();
$quarter4 = $conn->query("SELECT sum(payment) as total FROM `assessment` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
$quarter4 = $quarter4->fetch_array();

?>