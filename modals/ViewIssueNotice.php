       <!--Start Modal View Issue Notice-->
       <div id="view_notice<?php echo $appno_2 ?>" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Issue Notice</h4>
            </div>
            <form method="post" action="actions/addIssueNotice.php" onsubmit="return confirm('Are you sure you want to add this Issue Notice?');"  >
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Type of Notice</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" name="type_of_notice">
                                        <option value="<?php echo $fetch3['type_of_notice']?>"><?php echo $fetch3['type_of_notice']?></option>
                                        <option value="Comply">Comply</option>
                                        <option value="Correct Violation">Correct Violation</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">                                                        
                            <label for="app-name" class="col-sm-5 control-label">Amount</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="amount" id="amount" value="<?php echo $fetch3['amount'] ?>" require>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Owner Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="owner_name" id="owner_name" value="<?php echo $fetch3['owner_name'] ?>" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Inspector Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="inspector_name" name="inspector_name">
                                        <option value="<?php echo $fetch3['inspector_name']?>"><?php echo $fetch3['inspector_name']?></option>
                                        <option value="Inspector Cardo">Inspector Cardo</option>
                                        <option value="Inspector Dalisay">Inspector Dalisay</option>
                                        <option value="Inspector Poe">Inspector Poe</option>
                                        <option value="Inspector Duterte">Inspector Duterte</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Business Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_name" id="business_name" value="<?php echo $fetch3['business_name'] ?>" >
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Deficiences</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deficiency" id="deficiency" value="<?php echo $fetch3['deficiency'] ?>" required>
                                </div>
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
                                    <input type="text" class="form-control datepicker" id="date_issued" name="date_issued" value="<?php echo $fetch3['date_issued'] ?>" required/>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-10 control-label">After Inspection Report</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="IR_date_applied" id="IR_date_applied" value="<?php echo $fetch3['IR_date_applied']  ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-5 control-label">Application No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="application_no" id="application_no" value="<?php echo $fetch3['year'] . '-' . $month . '-' . $fetch3['application_no'] ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Inspection Order</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inspection_order" id="inspection_order" value="<?php echo $fetch3['inspection_order'] ?>">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-8 control-label">Business Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="business_address" id="business_address" value="<?php echo $fetch3['business_address'] ?>" require>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="app-name" class="col-sm-10 control-label">Grace Period</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_from" require id="grace_period_from" value="<?php echo $fetch3['grace_period_from'] ?>" require>                                    
                                </div>
                               
                                <div class="col-sm-5">
                                    <input type="text" class="form-control datepicker" name="grace_period_to" require id="grace_period_to" value="<?php echo $fetch3['grace_period_to'] ?>" require>
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-10">          
                            </div>
                        </div>
                    </div>

                </div>
            
                        <div class="modal-footer">
                            <div class="col-md-6">
                                <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                            </div>
                            <button type="submit" class="btn btn-info" name="save_issue_notice"><span class="fa fa-check"></span>Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                        </div>
            </form>
            </div>
            </div>
    </div>
    </div>
    <!--End Modal View Issue Notice-->