       <!--Start Modal View Issue Notice-->
       <?php
       require 'require/databaseconnection.php';
            $query = $conn->query("select * from `inspection_report`") or die(mysqli_error());
            while ($fetch = $query->fetch_array()) {
                $ir_no2 = $fetch['ir_no'];
                $io_no = $fetch['io_no'];
                // $app = trim($fetch['application_no'], "2019-01-");

                $query10 = $conn->query("select * from `issue_notice` where inspection_order = '$io_no' ") or die(mysqli_error());
                $fetch10 = $query10->fetch_array();
                $app = $fetch['application_no'];
                $year = date('Y');
                $month = date('m');

                $query12 = $conn->query("select * from `application` where application_no = '$app' ") or die(mysqli_error());
                $fetch12 = $query12->fetch_array();
                $month2 = date("m", strtotime($fetch10['month']));
        

       ?>
       <div id="view_notice<?php echo $ir_no2; ?>" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Issue Notice (Updating)</h4>
            </div>
            <form method="post" action="actions/editIssueNotice.php" >
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" name="type_of_notice">
                                        <option value="<?php echo $fetch10['type_of_notice']?>"><?php echo $fetch10['type_of_notice']?></option>
                                        <option value="Comply">Comply</option>
                                        <option value="Correct Violation">Correct Violation</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">                                                        
                            <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" id="amount" value="<?php echo $fetch10['amount'];?>" required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control" name="application_number" id="application_number" value="<?php echo $fetch3['owner_name'] ?>" >
                                    <input type="text" class="form-control" name="owner_name" id="owner_name" value="<?php echo $fetch10['owner_name'] ?>" >
                                    <input type="hidden" class="form-control" name="issuenum" id="issuenum" value="<?php echo $fetch10['issue_notice_no'] ?>" >
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
                                        <option value="<?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?>"> <?php echo $rows["officer_fname"]. ' ' .$rows["officer_lname"]; ?></option>
                                        <?php } ?>
                                    </select>
                                    </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Business Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_name" id="business_name" value="<?php echo $fetch10['business_name'] ?>" >
                                </div>
                        </div>
                        <div class="form-group">
                            <!-- <label for="app-name" class="col-sm-8 control-label">Deficiences</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deficiency" id="deficiency" value="<?php echo $fetch10['deficiency'] ?>" required>
                                </div> -->
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">          
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Date Issued</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control datepicker" id="date_issued" name="date_issued" value="<?php echo $fetch10['date_issued']?>" required/>
                                    <input type="hidden" class="form-control datepicker" id="number" name="number" value="<?php echo $fetch10["cpnumb"];?>" />
                                    <input type="hidden" class="form-control datepicker" id="applicant_num" name="applicant_num" value="<?php echo $app?>"/>
                                    <input type="hidden" class="form-control" id="nameofowner" name="nameofowner"  value="<?php echo $fetch['owner_name'] ?>">
                                    <input type="hidden" class="form-control" id="message" name="message2"  value="<?php echo "We are the Bureau of Fire Protection - Bacolod City and we would like to inform you Mr/Ms " . $fetch['owner_name'] . "that your application did not pass the inspection, we issue notice to comply and we will message you for further notice." ?>">
                                    <input type="hidden" class="form-control" id="message" name="message"  value="<?php echo "We are the Bureau of Fire Protection - Bacolod City and we would like to inform you  " . $fetch['owner_name'] . " you have passed the inspection and your application is ready for clearance." ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-10 control-label">After Inspection Report</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="IR_date_applied" id="IR_date_applied" value="<?php echo $fetch10['IR_date_applied']?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="applicantsnumber" id="applicantsnumber" value="<?php echo $fetch12['year'] .'-'. $month2 .'-'. $fetch12['application_no']; ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Inspection Order</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inspection_order" id="inspection_order" value="<?php echo $fetch10['inspection_order']?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Business Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_address" id="business_address" value="<?php echo $fetch10['business_address'] ?>" required>
                                </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="app-name" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_from" require id="grace_period_from" value="<?php echo $fetch10['grace_period_from'] ?>" required>                                    
                                </div>
                               
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_to" require id="grace_period_to" value="<?php echo $fetch10['grace_period_to'] ?>" required>
                                </div>
                        </div> -->
                        <div class="form-group">
                                <label for="date" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="inspection_date1" name="inspection_date1" value="<?php echo $fetch10['grace_period_from'] ?>" required/>
                                </div>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" id="inspection_date2" name="inspection_date2" value="<?php echo $fetch10['grace_period_to'] ?>" required/>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-sm-10">          
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class = "form-group">
                        <?php
$deficiency_checklist = $fetch10['deficiency_checklist'];
$check = explode(",", $deficiency_checklist);
?>

                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Classification </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox" value="checklist1" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist1", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_classification" require id="checklist_classification" value="<?php echo $fetch['checklist_classification']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Exit Details </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox" value="checklist2" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist2", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_exit" require id="checklist_exit" value="<?php echo $fetch['checklist_exit']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Lightnings and Signs </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox" value="checklist3" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist3", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_lightings" id="checklist_lightings" value="<?php echo $fetch['checklist_lightings']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Features of Fire Protection </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox" value="checklist4" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist4", $check)) {
    echo "checked";
}
?>
>
                                    
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_protection" require id="checklist_protection" value="<?php echo $fetch['checklist_protection']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Building Service Equipment </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox"  value="checklist15" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist15", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_equipments" require id="checklist_equipments" value="<?php echo $fetch['checklist_equipments']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Hazardous Areas </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox"  value="checklist6" name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist6", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_hazardous" require id="checklist_hazardous" value="<?php echo $fetch['checklist_hazardous']; ?>" required>                                    
                                </div>      
                            </div>
                        </div>

                        <div class = "form-group">
                            <div class="col-sm-12">
                                <label for="app-name" class="col-sm-12 control-label"> Operating Features </label>
                                <div class="col-sm-2">
                                    <input type="checkbox" class="icheckbox"  value="checklist7"  name="deficiency_checklist[]"
                                    <?php
if (in_array("checklist7", $check)) {
    echo "checked";
}
?>
>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="checklist_operating" require id="checklist_operating" value="<?php echo $fetch['checklist_operating']; ?>" required>                                    
                                
                                    <?php
$deficiency_checklist = $fetch10['deficiency_checklist'];
$check = explode(",", $deficiency_checklist);
?>

                                </div>      
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <!-- <ul class="panel-controls"> -->
                                        <label for="confirm" style="display: none; font-size: 24px;text-align: center;" id="upnoticeconfirmation"  class="col-sm-12 control-label">
                                        Are you sure you want to update this Issue Notice?
                                        </label>
                                        <div class="col-sm-3">
                                                &nbsp;
                                        </div>
                                        <div id="confirmedyes2">
                                            <div class="col-sm-4">
                                                <button type="submit" style="display:none;" class="btn btn-info" id="upnoticeyes" name="save_issue_notice"><span class="fa fa-check"></span>Yes</button>
                                            </div>
                                        </div>
                                        <div id="confirmedno2">
                                            <div class="col-sm-2">
                                                <button type="button" style="display:none;" class="btn btn-danger" id="upnoticeno" data-dismiss="modal"><span class="fa fa-times"></span>No</button>
                                            </div>
                                        </div>    
                                    <!-- </ul>-->
                                </div>    
                            </div>
                        </div>

            
                        <div class="modal-footer">
                            <input type="hidden" name="status_of_checklist">
                            <button type="button" class="btn btn-info" onclick="myFunctioneditNotice()"><span class="fa fa-check"></span>Confirm</button>
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