<div class="certification reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Application Status</th>
                <th>Number of Applicants</th>
                <th class="buttonhide">Action</th>
            </tr>
        </thead>
        <tbody>                           
            <tr>
                <td>
                    Evaluated
                </td>
                <td>
                    <?php echo $fetchapp9['total'];?>
                </td>
                <td class="buttonhide"><a href="filterreports/CertificationReportEval.php?status=<?php echo $f['status'] ?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            <tr>
                <td>
                    Inspected
                </td>
                <td>
                    <?php echo $fetchapp10['total'];?>
                </td>
                <td class="buttonhide"><a href="filterreports/CertificationReportIns.php?status=<?php echo $f['status'] ?>&year=<?php echo $year?>" class="btn btn-default btn-sm">
                        <i class="fa fa-eye"></i> Preview</a></td>
            </tr>
            
        </tbody>
    </table>
    <br>
    <h4>Certification</h4>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Application Name</th>
                <th>Application Type</th>
                <th>Business Name</th>
                <th>Building Type</th>
                <th>Date Applied</th>
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
            $query = $conn->query("SELECT * FROM `application` where `assessment_status` != 'Unassessed' && `assessment_status` != 'On Progress' && `assessment_status` != 'Assessed' && `assessment_status` != 'Issued NTCV' && `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
            <td><?php echo $fetch['application_name']?></td>
                <td><?php echo $fetch['application_type']?></td>
                <td><?php echo $fetch['business_name']?></td>
                <td><?php echo $fetch['building_type']?></td>
                <td><?php echo $fetch['date_applied']?></td>
                <td><center><?php if ($fetch['assessment_status'] == 'Evaluated')echo "<span class='badge badge-info'>Evaluated</span>";
                if ($fetch['assessment_status'] == 'Inspected')echo "<span class='badge badge-success'>Inspected</span>"
                    ?></center></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
