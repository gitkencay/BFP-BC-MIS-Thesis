<div class="yearly reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead>
            <tr class="info">
                <th>Year</th>
                <th>Total Count</th>
                <th>Actions</th>
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
            $query1 = $conn->query("SELECT count(*) as permonth FROM `application`") or die(mysqli_error());
            $fetch1 = $query1->fetch_array();
            $query = $conn->query("SELECT year, count(*) as count FROM `application` group by year order by count DESC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                // $permonth = ($fetch['count']/$fetch1['permonth']) * 100;
            ?>                                      
            <tr>
                <td><?php echo $fetch['year']?></td>
                <td><?php echo $fetch['count']?></td>
                <td><a href="filterreports/YearlyApplicantReport.php?year=<?php echo $fetch['year']?>" class="btn btn-default btn-sm">  <i class="fa fa-eye"></i>  Preview</a></td>
            </tr>
            <?php
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th >Applicant Name</th>
                <th>Business Name</th>
                <th>Building Type</th>
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
            $query = $conn->query("SELECT * FROM `application` where `year` = '$year'") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['application_name']?></td>
                <td><?php echo $fetch['business_name']?></td>
                <td><?php echo $fetch['building_type']?></td>
                <td><?php echo $fetch['type_of_permit']?></td>
                <td><?php echo $fetch['assessment_status']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>


</div>
