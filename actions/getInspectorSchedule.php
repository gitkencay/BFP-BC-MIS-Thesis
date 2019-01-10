<?php
$conn = new mysqli("localhost", "root", "", "bfp-bcmis") or die(mysqli_error());
if($_REQUEST['inspectorname']) {
    //   $sql = "SELECT * FROM employee WHERE id='".$_REQUEST['empid']."'";
    $fetch = $conn->query("SELECT * FROM `inspection_schedule` WHERE inspectors='".$_REQUEST['inspectorname']."'") or die(mysqli_error());
    $data_points = array();
    while($result = $fetch->fetch_array()){
        $data_points = $result;
    }
    echo json_encode($data_points);
} else {
    echo 0;
}
?>
