<?php
  require 'require/databaseconnection.php';
  $query3 = $conn->query("select * from application") or die(mysqli_error());
  while($fetch3 = $query3->fetch_array()){
    $month3 = date("m", strtotime($fetch3['month']));
    $app = $fetch3['year'].'-'.$month3.'-'.$fetch3['application_no'];
?>
<div class="modal fade" id="edit_status<?php echo $fetch3['application_no'] ;?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Application No: <?php echo $app;?></h3>
        </div>
        <form method="post" action="actions/editCertificate.php" onsubmit="return confirm('Are you sure you want to update the status?');"  >
          <div class="modal-body">
          <input type="hidden" name = "application_no" id = "io_schedule" value="<?php echo $fetch3['application_no'] ;?>"/>
          <p>Update Status</p>
            <select class="form-control select" id="Status" name="Status">
                <option value="<?php echo $fetch3['cert_status'];?>"><?php echo $fetch3['cert_status']?></option>
                <option value="Unreleased">Unreleased</option>
                <option value="Released">Released</option>
            </select>
          </div>
          <div class="modal-footer">
              <p class="text-danger"><small>*If you don't save, your changes will be lost.&emsp;&emsp;&emsp;&nbsp;&nbsp;</small></p>
              <button type="submit" class="btn btn-info" name="save_status"><span class="fa fa-check"></span>Save</button>
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