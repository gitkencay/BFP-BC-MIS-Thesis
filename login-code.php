<?php
session_start();
?>
<?php
require 'loader.php';

require 'require/databaseconnection.php';

if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query = $conn->query("SELECT * FROM `users` WHERE `name` = '$username' && `password` = '$password' && `status` = 'Active' ") or die(mysqli_error());
    $fetch = $query->fetch_array();

    $type = $fetch['type'];
    
    $correct_user = $fetch['name'];
    $correct_pass = $fetch['password'];

    date_default_timezone_set('Asia/Manila');
    $date=date("F j, Y, g:i a");
    $id = $fetch['id'];
    
    $_SESSION['id'] = $fetch['id'];
    if($username == $correct_user && $password == $correct_pass){
        if($type == 'CRO'){
            $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
            echo "<script>alert('You have successfully logged in')</script>";
            echo '<meta http-equiv="refresh" content="2;url=home-CRO.php">';
        }
        else if($type == 'Assessor'){
            $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
            echo "<script>alert('You have successfully logged in')</script>";
            echo '<meta http-equiv="refresh" content="2;url=home-Assessor.php">';
        }
        else if($type == 'Inspection-CRO'){
            $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
            echo "<script>alert('You have successfully logged in')</script>";
            echo '<meta http-equiv="refresh" content="2;url=home-Inspection-CRO.php">';
        }
        else if($type == 'Inspector'){
            $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
            echo "<script>alert('You have successfully logged in')</script>";
            echo '<meta http-equiv="refresh" content="2;url=home-Inspector.php">';
        }
        else if($type == 'Evaluator'){
            $conn->query ("UPDATE `users` SET `login` = '$date' WHERE `id` = '$id'") or die(mysqli_error());
            echo "<script>alert('You have successfully logged in')</script>";
            echo '<meta http-equiv="refresh" content="2;url=home-Evaluator.php">';
        }
        else {
            echo "<script>alert('You entered incorrect username or password!')</script>";
            echo '<meta http-equiv="refresh" content="2;url=index.php">';
        }
    } else {
        echo "<script>alert('You entered incorrect username or password!')</script>";
        echo '<meta http-equiv="refresh" content="2;url=index.php">';
    }
}
?>
