<div class="pendingschedule reporttype">
    <table class="table table-bordered table-condensed">
        <thead >
            <tr  class="info">
                <th>Inspector</th>
                <th>Pending Schedule</th>
                <th>Times Reminded</th>
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

            $current = date("F j, Y");
            
            $query = $conn->query("SELECT * FROM `employee` where `officer_type` = 'Inspector' && `year` = '$year' ORDER BY `employee`.`fullname` ASC") or die(mysqli_error());
            while($fetch = $query->fetch_array()){
                $querydate = $conn->query("SELECT * FROM `inspection_schedule` WHERE `inspection_date` != '$current' && `inspection_date` < '$current' && `status` = 'Pending' ORDER BY `inspection_schedule`.`inspectors` ASC") or die(mysqli_error());
                $fetchdate = $querydate->fetch_array();
                $status = $fetchdate['status'];

                $name = $fetch['fullname'];
                $query2 = $conn->query("SELECT *, COUNT(*) as numberofschedule FROM `inspection_schedule` WHERE `inspectors` = '$name' && `year` = '$year' && `status` = '$status' ORDER BY `inspection_schedule`.`inspectors` ASC") or die(mysqli_error());
                $fetch2 = $query2->fetch_array();
                
                $inspectors = $fetch2['inspectors'];
                $number = $fetch2['numberofschedule'];
                $remind = $fetch2['remind'];
            ?>                                      
            <tr>
                <td><?php echo $name?></td>
                <td style="text-align: center">
                <?php echo $number?> &nbsp;&nbsp;&nbsp;
                <a href="filterreports/openinspectorsched.php?name=<?php echo $name;?>&year=<?php echo $year?>&num=<?php echo $number?>" class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i> View </a></td>
                </td>
                
                <td><?php echo $remind?></td>
                <td class="buttonhide"><a href="actions/scheduleremind.php?name=<?php echo $name;?>&year=<?php echo $year?>&num=<?php echo $number?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-envelope-o"></i> Remind </a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
