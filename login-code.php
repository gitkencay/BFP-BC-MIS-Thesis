<?php
session_start();

require 'require/databaseconnection.php';

if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = $conn->query("SELECT * FROM `user` WHERE `name` = '$username' && `password` = '$password'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    
    $correct_user = $fetch['name'];
    $correct_pass = $fetch['password'];

    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y, g:i a");
    $id = $fetch['id'];
    
    if($username == $correct_user && $password == $correct_pass){
        $_SESSION['id'] = $fetch['id'];
        $conn->query ("UPDATE `user` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
        echo "<script>alert('You have successfully logged in')</script>";
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        echo "<script>alert('You entered incorrect username or password!')</script>";
        echo '<meta http-equiv="refresh" content="2;url=login.php">';
    }
}
?>
