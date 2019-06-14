<?php
require 'require/databaseconnection.php';
if(isset($_POST['search'])){
    $tableContent = '';
    $start = $_POST['start'];
    $sql = "SELECT * FROM employee where `officer_type` = '$start'";
    $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
    // while ($rows = mysqli_fetch_assoc($resultset)){
        
    // }
    // $conn->close();

    foreach ($resultset as $rows){
        $table = $tableContent.'<tr>'.
        '<td>'.$rows['id'].'</td>'.
        '<td>'.$rows['officer_fname'].'</td>'.
        '<td>'.$rows['officer_lname'].'</td>'.
        '<td>'.$rows['officer_type'].'</td>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="trialworld.php" method="POST">
        <select name="start">
            <option value="">...</option>
            <option value="CRO">CRO</option>
            <option value="Assessor">Assessor</option>
            <option value="Inspection-CRO">Inspection-CRO</option>
            <option value="Inspector">Inspector</option>
            <option value="Evaluator">Evaluator</option>
        </select>
        <input type="submit" name="search" value="Find">

        <table>
            <tr>
                <td>#ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Employee Type</td>
            </tr>
            <?php
require 'require/databaseconnection.php';
$sql = "SELECT * FROM employee";
$resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
while ($rows = mysqli_fetch_assoc($resultset)) {
    ?>

            <tr>
                <td>
                    <?php echo $rows['id'];?>
                </td>
                <td>
                    <?php echo $rows['officer_fname'];?>
                </td>
                <td>
                    <?php echo $rows['officer_lname'];?>
                </td>
                <td>
                    <?php echo $rows['officer_type'];?>
                </td>
            </tr>            
<?php
}
$conn->close();
?>
                        
            <?php 
            echo $table;
            ?>
        </table>
    </form>
</body>

</html>