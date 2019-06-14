<div class="permit reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Type of Permit</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}
$res7 = $conn->query("SELECT * FROM `application` where `year` = '$year' && `type_of_permit` != 'NA' GROUP BY type_of_permit") or die(mysqli_error());
$data_points7 = array();
while($result7 = $res7->fetch_array()){
    $R7 = $result7['type_of_permit'];
    $q7 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `type_of_permit` = '$R7' && `year` = '$year' && `type_of_permit` != 'NA' group by type_of_permit") or die(mysqli_error());
    $f7 = $q7->fetch_array();
?>
            <tr>
                <td>
                    <?php echo $f7['type_of_permit']?>
                </td>
                <td>
                    <?php echo $f7['total']?>
                </td>
                <td class="buttonhide">
                    <a href="filterreports/PermitTypeReport.php?permit=<?php echo $f7['type_of_permit']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">  <i class="fa fa-eye"></i>  Preview</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


    <br>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Type of Permit</th>
                <th>Applicant Name</th>
                <th>Business Name</th>
                <th>Building Type</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'require/databaseconnection.php';
            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            $query = $conn->query("SELECT * FROM `application` where `year` = '$year' && type_of_permit != 'NA' order by type_of_permit ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>
            <tr>
                <td>
                    <?php echo $fetch['type_of_permit']?>
                </td>
                <td>
                    <?php echo $fetch['application_name']?>
                </td>
                <td>
                    <?php echo $fetch['business_name']?>
                </td>
                <td>
                    <?php echo $fetch['building_type']?>
                </td>
                <td>
                    <?php echo $fetch['assessment_status']?>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>