<div class="assessment reporttype">
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Status</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
require 'require/databaseconnection.php';
$year = date('Y');
if (isset($_GET['year'])) {
    $year = $_GET['year'];
}
            $res6 = $conn->query("SELECT * FROM `application` where `year` = '$year' GROUP BY assessment_status") or die(mysqli_error());
            $data_points6 = array();
            while($result6 = $res6->fetch_array()){
                $R6 = $result6['assessment_status'];
                $q6 = $conn->query("SELECT *, COUNT(*) as total FROM `application` WHERE `assessment_status` = '$R6' && `year` = '$year' group by assessment_status") or die(mysqli_error());
                $f6 = $q6->fetch_array();
            ?>                                      
            <tr>
                <td><?php echo $f6['assessment_status']?></td>
                <td><?php echo $f6['total']?></td>
                <td class="buttonhide"><a href="filterreports/ApplicantStatusReport.php?status=<?php echo $f6['assessment_status']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">  <i class="fa fa-eye"></i>  Preview</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    
    <hr>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Status</th>
                <th>Applicant Name</th>
                <th>Business Name</th>
                <th>Building Type</th>
                <th>Type of Permit</th>
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
            $query = $conn->query("SELECT * FROM `application` where `year` = '$year' order by assessment_status ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['assessment_status']?></td>
                <td><?php echo $fetch['application_name']?></td>
                <td><?php echo $fetch['business_name']?></td>
                <td><?php echo $fetch['building_type']?></td>
                <td><?php echo $fetch['type_of_permit']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
