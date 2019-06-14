<div class="application reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Application Type</th>
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
$res9 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY application_type") or die(mysqli_error());
$data_points9 = array();
while($result9 = $res9->fetch_array()){
    $R9 = $result9['application_type'];
    $q9 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `application_type` = '$R9' && `year` = '$year' group by application_type") or die(mysqli_error());
    $f9 = $q9->fetch_array();
?>
            <tr>
                <td>
                    <?php echo $f9['application_type']?>
                </td>
                <td>
                    <?php echo $f9['total']?>
                </td>
                <td>
                    <a href="filterreports/ApplicationTypeReport.php?type=<?php echo $f9['application_type']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">  <i class="fa fa-eye"></i>  Preview</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Application Type</th>
                <th>Building Type</th>
                <th>Applicant Name</th>
                <th>Business Name</th>
                <th>Type of Permit</th>
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
            $query = $conn->query("SELECT * FROM `application` where `year` = '$year' order by application_type ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['application_type']?></td>
                <td><?php echo $fetch['building_type']?></td>
                <td><?php echo $fetch['application_name']?></td>
                <td><?php echo $fetch['business_name']?></td>
                <td><?php echo $fetch['type_of_permit']?></td>
                <td><?php echo $fetch['assessment_status']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
