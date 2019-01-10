<!--Start MODAL-->
<!--Start Modal Add Schedule-->
<?php
require 'require/databaseconnection.php';
$query2 = $conn->query("SELECT * FROM `inspection_report`") or die(mysqli_error());
$fetch2 = $query->fetch_array();

$month = date("m");
$year = date('Y');
$io_no = $fetch2['io_no'] + 1;
?>
<!--Start Modal Add Schedule-->
<div class="modal fade add_inspection" id="add_inspection" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Inspection Schedule</h3>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
            </div>
            <form method="post" action="actions/addSchedule.php" onsubmit="return confirm('Are you sure you want to add this Schedule?');"  >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="application_number" value="<?php echo $fetch['application_no']?>"/>
                            <input type="hidden" class="form-control" id="io_no" name="io_no" value="<?php echo 'IO' . '-' . $year . '-' . $month . '-' . $io_no ?>"/>
                            <div class="form-group">
                                <label for="bldg-code" class="col-sm-5 control-label">Inspector&emsp;</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="inspectors_drop" name="inspectors_drop">
                                        <option value="" selected="selected">Select Inspector</option>
                                        <option value="Cardo">Cardo</option>
                                        <option value="Cardo">Elmer</option>
                                        <option value="Cardo">Cartagena</option>
                                        <option value="Cardo">Alvin</option>
                                        <option value="Cardo">Julia</option>
                                        <?php
    $sql = "SELECT * FROM inspection_schedule";
                                   $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                   while( $rows = mysqli_fetch_assoc($resultset) ) {
                                        ?>
                                        <option value="<?php echo $rows["inspectors"]; ?>"><?php echo $rows["inspectors"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class="col-sm-4 control-label">Date of Inspection</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" id="inspection_date" name="inspection_date" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-12 control-label">Time of Inspection Office Hours (7:30 AM - 5:30 PM) </label>
                                <div class="col-sm-10">
                                    <input type="time" id= "inspection_time" name="inspection_time" min="07:30" max="17:30" required/>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <br>
                            <div id="display">
                                <div class="row" id="heading" style="display:none;"><h3>
                                    <div class="col-sm-4"><strong>Inspector Name</strong></div>
                                    <div class="col-sm-4"><strong>Inspection Date</strong></div><div class="col-sm-4">
                                    <strong>Inspection Time</strong></div></h3>
                                </div><br>			
                                <div class="row" id="records">
                                    <div class="col-sm-4" id="inspector"></div>
                                    <div class="col-sm-4" id="inspector_date"></div>
                                    <div class="col-sm-4" id="inspector_time"></div>
                                </div>			
                                <div class="row" id="no_records"><div class="col-sm-4">Plese select Inspector to view details</div></div>
                            </div>
                            <hr>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-8">
                        <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                    </div>
                    <button type = "button" id="addnew" class = "btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--End modal Add Schedule-->
<!--End MODAL-->
