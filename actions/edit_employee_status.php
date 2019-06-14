<?php
if(isset($_POST['save_employee'])){
    $Status = $_POST['Status'];
    $status_id = $_POST['status_id'];

    require '../require/databaseconnection.php';
    
        $conn->query("UPDATE `users` SET `status` = '$Status' WHERE `id` = '$status_id'") or die(mysqli_error());
        $conn->close();
    
        echo "<script type='text/javascript'>alert('Successfully updated Status!');</script>";
        echo "<script>document.location='../Maintenance-UserManage.php'</script>";
    }

?>