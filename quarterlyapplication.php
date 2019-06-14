<div class="quarterly reporttype">
    <hr>
    <table class="table table-bordered table-condensed" >
        <thead>
            <tr class="info">
                <th>Quarter 1</th>
                <th>Quarter 2</th>
                <th>Quarter 3</th>
                <th>Quarter 4</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $year = date('Y');
            if(isset($_GET['year']))
            {
                $year=$_GET['year'];
            }
            require 'require/databaseconnection.php';

            $quarter1 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Jan' or month = 'Feb' or month = 'Mar') && `year` = '$year'") or die(mysqli_error());
            $q1 = $quarter1->fetch_array();
            $quarter2 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Apr' or month = 'May' or month = 'Jun') && `year` = '$year'") or die(mysqli_error());
            $q2 = $quarter2->fetch_array();
            $quarter3 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Jul' or month = 'Aug' or month = 'Sep') && `year` = '$year'") or die(mysqli_error());
            $q3 = $quarter3->fetch_array();
            $quarter4 = $conn->query("SELECT COUNT(*) as total FROM `application` where (month = 'Oct' or month = 'Nov' or month = 'Dec') && `year` = '$year'") or die(mysqli_error());
            $q4 = $quarter4->fetch_array();
            $total = $conn->query("SELECT COUNT(*) as total FROM `application` WHERE `year` = '$year'") or die(mysqli_error());
            $total = $total->fetch_array();
            ?>
            <tr>
                <td><?php echo $q1['total']?></td>
                <td><?php echo $q2['total']?></td>
                <td><?php echo $q3['total']?></td>
                <td><?php echo $q4['total']?></td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Month</th>
                <th >Applicant Name</th>
                <th>Business Name</th>
                <th>Building Type</th>
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
                    $query = $conn->query("SELECT * FROM `application` where `year` = '$year'") or die(mysqli_error());
                    while($fetch = $query->fetch_array()){
            ?>                                      
            <tr>
                <td><?php echo $fetch['month']?></td>
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
