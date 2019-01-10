<!--Start MODAL-->
<!--Start Modal Add Schedule-->

<div class="modal fade" id="edit_inspection<?php echo $fetch2['io_no'];?>" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Inspection Schedule</h3>
        </div>
        <form method="post" action="actions/addSchedule.php" onsubmit="return confirm('Are you sure you want to add this Schedule?');"  >
        <div class="modal-body">
            <div class="row">
            <div class="col-lg-12"> 
            <div class="form-group">
                <input type="hidden" class="form-control" id="io_no" name="io_no" readonly value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $io_no ?>"/>
                <div class=col-md-4>
                <input type="text" class="form-control" id="inspectSearch" placeholder="Search">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label class="col-md-4 control-label">Inspector :</label>
                <div class="col-md-6">
                <div class="input-group">
                    <select class="form-control select" id="inspectors" name="inspectors" required>
                        <option value="<?php echo $fetch2['inspectors']?>"><?php echo $fetch2['inspectors']?></option>
                    </select>
                </div>
                </div>
            </div>

            <div class="cold-md-4">
                <div class="form-group">
                    <label for="date" class="col-sm-4 control-label">Date of Inspection</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control datepicker" id="inspection_date" name="inspection_date" readonly value="<?php echo $fetch2['inspection_date'] ?>" required/>
                        </div>
                </div>
                <br>
                <br>
                <br>
                <div class="form-group">
                    <label class="col-md-6 control-label">Office Hours (7:30 AM - 5:30 PM)  </label>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label">Time of Inspection: </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id= "inspection_time" readonly name="inspection_time" min="07:30" max="17:30" value="<?php echo $fetch2['inspection_time'] ?>" required/>
                        </div>
                </div>
            </div>
                    <table class="table table-hover">
                    <br>
                    <br>
                    <br>
                    <h3>List of Inspectors Schedule</h3>
                    <thead>
                        <tr>
                            <th>Inspection Order No</th>
                            <th>Inspection Date</th>
                            <th>Time</th>
                            <th>Inspector Name</th>
                            <th>Expected Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    <?php
require 'require/databaseconnection.php';
$query = $conn->query("select * from `inspection_schedule ") or die(mysqli_error());
while ($fetch = $query->fetch_array()) {
    ?>
                    <tr>

                        <td><?php echo $fetch['io_no'] ?></td>
                        <td><?php echo $fetch['inspection_date'] ?></td>
                        <td><?php echo $fetch['inspection_time'] ?></td>
                        <td><?php echo $fetch['inspectors'] ?></td>
                        <td> 2 Hours </td>
                    </tr>
<?php
}
$conn->close();
?>
                    </tbody>
                    </table>
                    <div class="modal-footer">
                    <div class="col-sm-8">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                   
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>

                </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
<!--End modal Add Schedule-->
<!--End MODAL-->
