<?php

$connect = mysqli_connect ("localhost", "root", "", "bfp-bcmis");

$output = '';

if(isset($_POST["officer_type"])){

    if($_POST["officer_type"] != '')
    {
        $sql = "SELECT * FROM EMPLOYEE WHERE officer_type = '".$_POST["officer_type"]."'";
    }

    else {
        $sql = "SELECT * FROM employee";
    }
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {

            $output .= '
                <tr>
                    <td>'.$row['officer_type'].'</td>
                    <td>'.$row['rank'].'</td>
                    <td>'.$row['officer_fname'].'</td>
                    <td>'.$row['firestation'].'</td>
                </tr>
            ';
    }
    echo $output;
}

?>