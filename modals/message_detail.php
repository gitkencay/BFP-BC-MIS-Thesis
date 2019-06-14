 <!--Start modal view sms alert-->
 <?php
      require 'require/databaseconnection.php';
      $year = date('Y');
      if(isset($_GET['year']))
      {
          $year=$_GET['year'];
      }      
      $query3 = $conn->query("SELECT * FROM  `messages`" ) or die(mysqli_error());
      while($fetch3 = $query3->fetch_array()){
            $appno = $fetch3["application_no"];
            
            $query2 = $conn->query("SELECT * from `application` where `application_no` = '$appno'") or die(mysqli_error());
            $fetch2 = $query2->fetch_array();
 ?>
 <div class="modal fade" id="Message_Alert<?php echo $fetch2['application_no']?>" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">SMS Information</h4>
                        </div>

                        <div class="modal-body">
                           <div class="row">
                               <div class="col-md-12">
                                    <div class="form-group">
                                           <label for="officer-type" class="col-sm-6 control-label">Owner Name</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" readonly value="<?php echo $fetch2['owner_name']?>">
                                           </div>
                                   </div>
                                   <div class="form-group">
                                           <label for="officer-type" class="col-sm-6 control-label">Establishment Address</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" readonly value="<?php echo $fetch2['establishment_address']?>">
                                           </div>
                                   </div>
                                   <div class="form-group">
                                           <label for="rank-code" class="col-sm-6 control-label">Business Name</label>
                                           <div class="col-sm-8">
                                               <input type="text" class="form-control" id="officer" readonly value="<?php echo $fetch2['business_name']?>">
                                           </div>
                                           <br> <br>
                                   </div>
                                   <div class="form-group">
                                           <label for="rank-code" class="col-sm-6 control-label">Date and Time</label>
                                           <div class="col-sm-8">
                                                <?php echo $fetch3['date']?>
                                           </div>
                                   </div>
                                   
                                   <div class="form-group">
                                            <label for="rank-code" class="col-sm-8 control-label"><br>Number</label>
                                            <div class="col-sm-8">
                                                <?php echo $fetch3["number"];?>
                                            </div>
                                            <label for="rank-code" class="col-sm-8 control-label"><br>Message Details</label>
                                            <div class="col-sm-8">
                                               <p id="comment">
                                                    <?php echo $fetch3["text_message"];?>
                                               </p>
                                            </div>
                                   </div>
                           </div>
                        </div>
                       </div>
                        <div class="modal-footer">
                               <div class="col-sm-6">
                                       <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
                               </div>
                           <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>Close</button>
                               </div>
                       </div>
                    </div>
                </div>
                <?php
}
$conn->close();
?>
                <!--End modal view sms alert-->