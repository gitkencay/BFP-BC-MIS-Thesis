<?php

require 'require/databaseconnection.php';

if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = $conn->query("SELECT * FROM `user` WHERE `name` = '$username' && `password` = '$password'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    
    $correct_user = $fetch['name'];
    $correct_pass = $fetch['password'];
    
    if($username == $correct_user){
        echo "<script>alert('You have successfully logged in')</script>";
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    } else {
        echo "<script>alert('You entered incorrect username or password!')</script>";
        echo '<meta http-equiv="refresh" content="2;url=login.php">';
    }
}
?>
