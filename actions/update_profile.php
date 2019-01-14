<?php
if(isset($_POST['save'])){

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require '../require/databaseconnection.php';
    $conn->query("UPDATE `user` SET `name` = '$username', `password` = '$password', `fname` = '$firstname', `lname` = '$lastname' WHERE `id` = '$id'") or die(mysqli_error());
        echo "<script type='text/javascript'>alert('Successfully edited FSEC application!');</script>";
        echo "<script>document.location='../Maintenance-MyAccount.php'</script>";
}

?>