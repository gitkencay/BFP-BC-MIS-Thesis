<div class="assessment reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Assessment Status</th>
                <th >Applicant Name</th>
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
