<?php

$connect = mysqli_connect ("localhost", "root", "", "bfp-bcmis");

$output = '';

if(isset($_POST["inspector_name"])){

    if($_POST["inspector_name"] != '')
    {
        $sql = "SELECT * FROM inspection_schedule WHERE inspectors = '".$_POST["inspector_name"]."'";
    }

    else {
        echo  '<tr><td>No Schedule for this Inspector...</td><td></td><td></td></tr>';
    }
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {

        $output .= '
                <tr>
                    <td>'.$row['inspectors'].'</td>
                    <td>'.$row['inspection_date'].'</td>
                    <td>'.$row['inspection_time'].'</td>

                </tr>
            ';
    }
    echo $output;
}

?>