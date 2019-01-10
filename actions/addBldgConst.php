<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_bldgconstruction'])){
    $ir_no = $_POST['ir_no'];
    $beams = $_POST['beams'];
    $columns = $_POST['columns'];
    $floor = $_POST['floor'];
    $exterior = $_POST['exterior'];
    $corridor = $_POST['corridor'];
    $partition_no = $_POST['partition_no'];
    $stair = $_POST['stair'];
    $windows = $_POST['windows'];
    $ceiling = $_POST['ceiling'];
    $door = $_POST['door'];
    $trusses = $_POST['trusses'];
    $roof = $_POST['roof'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $application_no = $_POST['application_number'];


    require '../require/databaseconnection.php';

    // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
    $conn->query("INSERT INTO `bldg_construct` VALUES('', '$ir_no', '$beams', '$columns', '$floor', '$exterior', '$corridor', '$partition_no', '$stair', '$windows', '$ceiling', '$door', '$trusses', '$roof', '$date_applied')") or die(mysqli_error());
    $conn->close();
    echo "<script type='text/javascript'>alert('Successfully added new Building Construction!');</script>";
    echo "<script>document.location='../inspection-order.php?application_no=$application_no'</script>";
}
?>