<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login";
$errors = array();

$conn = new mysqli($host, $user, $password, $dbname) or die(mysqli_error());

if (isset($_POST['username'])) {
    $offtype = $_POST['officer-type'];
    $rankcode = $_POST['Rank'];
    $officer_fname = $_POST['officer_fname'];
    $officer_mname = $_POST['officer_mname'];
    $officer_lname = $_POST['officer_lname'];
    $password = $_POST['password'];
    $firestation = $_POST['firestation'];

    if (empty($offtype)) {
        array_push($errors, "Officer type is required");
    }
    if (empty($rankcode)) {
        array_push($errors, "Rank is required");
    }
    if (empty($offname)) {
        array_push($errors, "Officer Name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (empty($firestation)) {
        array_push($errors, "Firestation is required");
    }

    if (count($errors) == 0) {
        $passwordmd = md5($password);

        $sql = "INSERT INTO employee (officer-type, rank, officer, password, firestation)
                VALUES ($offtype, $rankcode, $offname, $passwordmd, $firestation)";
        mysqli_query($conn, $sql);
    }

}
