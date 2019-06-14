<div class="building reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Evaluation Status</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
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
        $res = $conn->query("SELECT * FROM `evaluation_checklist` where year = '$year' GROUP BY status ") or die(mysqli_error());
        $data_points = array();
        while($result = $res->fetch_array()){
            $R = $result['status'];
            $q = $conn->query("SELECT *, COUNT(*) as total FROM `evaluation_checklist` WHERE `status` = '$R' && year='$year' group by status ") or die(mysqli_error());
            $f = $q->fetch_array();
        ?>
            <tr>
                <td><?php echo $f['status']?></td>
                <td><?php echo $f['total']?></td>
                <td class="buttonhide"><a href="filterreports/EvaluationStatusReport.php?status=<?php echo $f['status']?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>                          
            <?php
            }
            ?>
        </tbody>
    </table>

    <br>
    <h4>Building Evaluation</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Owner Name</th>
                <th>Business Name</th>
                <th>Plan Evaluator</th>
                <th>Project Title</th>
                <th>Date Created</th>
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
            $query = $conn->query("SELECT * FROM `evaluation_checklist` where `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['owner_name']?></td>
                <td><?php echo $fetch['business_name']?></td>
                <td><?php echo $fetch['plan_evaluator']?></td>
                <td><?php echo $fetch['project_title']?></td>
                <td><?php echo $fetch['date_received']?></td>
                <td><center><?php if ($fetch['status'] == 'On Progress')echo "<span class='badge badge-danger'>On Progress</span>";
                if ($fetch['status'] == 'Ready for Certification')echo "<span class='badge badge-info'>Complete</span>"
                    ?></center></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
