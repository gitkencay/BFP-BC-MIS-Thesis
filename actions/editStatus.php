<?php
if(isset($_POST['save_status'])){
    $io_schedule = $_POST['io_schedule'];
    $Status = $_POST['Status'];

    require '../require/databaseconnection.php';

    $conn->query("UPDATE `inspection_schedule` SET `Status` = '$Status' WHERE `io_schedule` = '$io_schedule'") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully updated Status!');</script>";
    echo "<script>document.location='../Transaction-Scheduling.php'</script>";
}
?>

