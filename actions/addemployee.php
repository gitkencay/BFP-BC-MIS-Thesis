<?php
// ang 'add_new_employ', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['add_new_employ'])){
    $officer_type = $_POST['officer_type'];
    
    $rank = $_POST['rank'];
    $officer_fname = $_POST['officer_fname'];
    $officer_mname = $_POST['officer_mname'];
    $officer_lname = $_POST['officer_lname'];
	$fullname = $_POST['officer_fname']. '-' .$_POST['officer_lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $firestation = $_POST['firestation'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $year = date('Y');
    $errors = array();
    $contact_num = $_POST['contact_num'];

    require '../require/databaseconnection.php';

            // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
            $conn->query("INSERT INTO `employee` VALUES('', '$officer_type', '$rank', '$officer_fname', '$officer_mname', '$officer_lname', '$fullname', '$username', '$password', '$confirm_password', '$firestation', '$date_applied', '$year', '$contact_num')") or die(mysqli_error());
            $conn->query("INSERT INTO `users` VALUES('', '$username', '$password', '$officer_fname', '$officer_lname', ' ', '$officer_type', 'Active')") or die(mysqli_error());
            $conn->close();
            echo "<script type='text/javascript'>alert('Successfully added new Employee record!');</script>";
            echo "<script>document.location='../DataEntry-EmpProf.php'</script>";
            

}
?>