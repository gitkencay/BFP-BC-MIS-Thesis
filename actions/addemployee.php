<?php
// ang 'add_new_employ', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['add_new_employ'])){
    $officer_type = $_POST['officer_type'];
    $rank = $_POST['rank'];
    $officer_fname = $_POST['officer_fname'];
    $officer_mname = $_POST['officer_mname'];
    $officer_lname = $_POST['officer_lname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $firestation = $_POST['firestation'];
    date_default_timezone_set('Asia/Manila');
    $date_applied=date("F j, Y g:i a");
    $errors = array();

    require '../require/databaseconnection.php';
    $query = $conn->query("SELECT * FROM 'user' WHERE 'name' = '$username'") or die(mysqli_error());
    $selectresult = mysql_query($query);

    if(mysql_num_rows($selectresult)>0)
    {
        echo "<script type='text/javascript'>alert('Username already exist!');</script>";
        echo "<script>document.location='DataEntry-EmpProf.php'</script>";
    }
        elseif($password != $confirm_password){
            echo "<script type='text/javascript'>alert('Password does not match');</script>";
            echo "<script>document.location='DataEntry-EmpProf.php'</script>";
        }
            else{
            // blank ang sa first field kay auto increment ang id followed sang application name, business name ... .. 
            $conn->query("INSERT INTO `employee` VALUES('', '$officer_type', '$rank', '$officer_fname', '$officer_mname', '$officer_lname', '$username', '$password', '$confirm_password', '$firestation', '$date_applied')") or die(mysqli_error());
            $conn->query("INSERT INTO `user` VALUES('', '$username', '$password', '$officer_fname', '$officer_lname', ' ')") or die(mysqli_error());
            $conn->close();
            echo "<script type='text/javascript'>alert('Successfully added new Employee record!');</script>";
            echo "<script>document.location='../DataEntry-EmpProf.php'</script>";
            }

}
?>