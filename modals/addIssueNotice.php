<!--Start Modal View Issue Notice-->
<?php
       require 'require/databaseconnection.php';
            $query = $conn->query("select * from `inspection_report`") or die(mysqli_error());
            while ($fetch = $query->fetch_array()) {
                $ir_no2 = $fetch['ir_no'];
                // $app = trim($fetch['application_no'], "2019-01-");
                $app = $fetch['application_no'];
                $query10 = $conn->query("select * from `application` where application_no = '$app' ") or die(mysqli_error());
                $fetch10 = $query10->fetch_array();
                $year = date('Y');
                $month = date('m');
                $month2 = date("m", strtotime($fetch10['month']));
       ?>
<div id="addNotice<?php echo $ir_no2; ?>" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Issue Notice</h4>
            </div>
            <form method="post" action="actions/addIssueNotice.php">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" name="type_of_notice">
                                        <option>Select</option>
                                        <option value="Comply">Comply</option>
                                        <option value="Correct Violation">Correct Violation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" id="amount" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="application_number" id="application_number"
                                        value="<?php echo $fetch3['owner_name'] ?>">
                                    <input type="text" class="form-control" name="owner_name" id="owner_name" value="<?php echo $fetch['owner_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-8 control-label">Inspector Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="inspectors_drop" name="inspectors_drop">
                                        <option disabled selected="selected">Select Inspector</option>
                                        <?php
    $sql = "SELECT * FROM employee group by officer_fname";
                                   $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                   while( $rows = mysqli_fetch_assoc($resultset) ) {
                                        ?>
                                        <option value="<?php echo $rows[" officer_fname"]. ' ' .$rows["officer_lname"];
                                            ?>">
                                            <?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?>
                                        </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-8 control-label">Business Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_name" id="business_name"
                                        value="<?php echo $fetch['business_name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="app-name" class="col-sm-8 control-label">Deficiences</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deficiency" id="deficiency" value="<?php echo $fetch3['deficiency'] ?>" required>
                                </div> -->
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Date Issued</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" id="date_issued" name="date_issued"
                                        required />
                                    <input type="hidden" class="form-control" id="number" name="number" value="<?php echo $fetch10["
                                        cpnumb"];?>" />
                                    <input type="hidden" class="form-control" id="applicant_num" name="applicant_num"
                                        value="<?php echo $app?>" />
                                    <input type="hidden" class="form-control" id="nameofowner" name="nameofowner" value="<?php echo $fetch['owner_name'] ?>">
                                    <input type="hidden" class="form-control" id="message" name="message2" value="<?php echo "
                                        We are the Bureau of Fire Protection - Bacolod City and we would like to inform
                                        you Mr/Ms " . $fetch['owner_name'] . " that your application did not pass the
                                        inspection, we issue notice to comply and we will message you for further
                                        notice. In case of Emergency please contact 117 or 434-5022 or 434-5023. " ?>">
                                    <input type="hidden" class="form-control" id="message" name="message" value="<?php echo "
                                        We are the Bureau of Fire Protection - Bacolod City and we would like to inform
                                        you " . $fetch['owner_name'] . " you have passed the inspection and your
                                        application is ready for clearance. In case of Emergency please contact 117 or
                                        434-5022 or 434-5023. " ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-10 control-label">After Inspection Report</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="IR_date_applied" id="IR_date_applied"
                                        value="<?php echo " IO"."-".$fetch['year'] . '-' . $month . '-' .
                                        $fetch['ir_no'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="applicantsnumber" id="applicantsnumber"
                                        value="<?php echo $fetch10['year'] . '-' . $month2 . '-' . $app; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-8 control-label">Inspection Order</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inspection_order" id="inspection_order"
                                        value="<?php echo $fetch['io_no'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="col-sm-8 control-label">Business Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_address" id="business_address"
                                        value="<?php echo $fetch['establishment_address'] ?>" required>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="app-name" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_from" require
                                        id="inspection_date" required>
                                </div>
                                
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_to" require
                                        id="grace_period_to" required>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="date" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="inspection_date1" name="inspection_date1" required/>
                                </div>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="inspection_date2" name="inspection_date2" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <ul class="panel-controls"> -->
                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="addnoticec"  class="col-sm-12 control-label">
                                        Are you sure you want to add this Issue Notice?
                                        </label>
                                        <div class="col-sm-3">
                                                &nbsp;
                                        </div>
                                        <div>
                                            <div class="col-sm-4">
                                                <button type="submit" style="display:none;" class="btn btn-info" id="addnoticey" name="save_issue_notice"><span class="fa fa-check"></span>Yes</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-sm-2">
                                                <button type="button" style="display:none;" class="btn btn-danger" id="addnoticen" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                            </div>
                                        </div>    
                                    <!-- </ul>-->
                                </div>    
                            </div>
                        </div>


                        <div class="modal-footer">
                            <div class="col-md-6">
                                <select class="form-control select" id="status_of_checklist" name="status_of_checklist">
                                    <option value="">Update Status Here</option>
                                    <option value="for certification">for certification</option>
                                    <option value="issued NTCV">Issued NTCV</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-info" onclick="myFunctionedAdd()"><span class="fa fa-check"></span>Confirm</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--End Modal View Issue Notice-->
<?php
}
$conn->close();
?>