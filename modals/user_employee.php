                                             <!--Start modal edit employee-->
                                             <?php
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * from `users` where login like '%$year%'") or die(mysqli_error());
while($fetch2 = $query2->fetch_array()){
?>
                                             <div  class="modal fade" role="dialog" id="Edit_Employee<?php echo $fetch2['id'];?>">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title">Employee <?php echo $fetch2['fname'].' '.$fetch2['lname']?></h4>
                                                            </div>
                                                            <form method="post" action="actions/edit_employee_status.php" onsubmit="return confirm('Are you sure you want to update the status?');"  >
                                                                <div class="modal-body">
                                                                    <input type="hidden" name = "status_id" id = "status_id" value="<?php echo $fetch2['id'] ;?>"/>
                                                                        <p>Update Status</p>
                                                                            <select class="form-control select" id="Status" name="Status">
                                                                                <option value="<?php echo $fetch2['status'];?>"> <?php echo $fetch2['status'];?></option>
                                                                                <option value="Active">Active</option>
                                                                                <option value="Inactive">Inactive</option>
                                                                            </select>
                                                                </div>
                                                           <div class="modal-footer">
                                                                <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                                                                <button type="submit" class="btn btn-info" name="save_employee"><span class="fa fa-check"></span>Save</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                                                            </div>
                                                            </form>
                                                           </div>
                                                        </div>
                                                    </div>
                                                    <?php
}
$conn->close();
?>