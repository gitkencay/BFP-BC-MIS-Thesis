<div class="building reporttype">
    <hr>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Building Type</th>
                <th >Applicant Name</th>
                <th>Business Name</th>
                <th>Type of Permit</th>
                <th>Assessment Status</th>
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
            $query = $conn->query("SELECT * FROM `application` where `year` = '$year' order by building_type ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
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
