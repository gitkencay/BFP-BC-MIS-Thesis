<?php
// ang 'submit', name na sa ka button sa may modal ang SAVE na button
if(isset($_POST['save_issue_notice'])){
    $type_of_notice = $_POST['type_of_notice'];
    $amount = $_POST['amount'];
    $owner_name = $_POST['owner_name'];
    $inspector_name = $_POST['inspector_name'];
    $business_name = $_POST['business_name'];
    $deficiency = $_POST['deficiency'];
    $date_issued = $_POST['date_issued'];
    $IR_date_applied = $_POST['IR_date_applied'];
    $application_no = $_POST['application_no'];
    $inspection_order = $_POST['inspection_order'];
    $business_address = $_POST['business_address'];
    $grace_period_from = $_POST['grace_period_from'];
    $grace_period_to = $_POST['grace_period_to'];
    $application_no = $_POST['application_number'];
    $month = date("M");
    $year = date("Y");


    require '../require/databaseconnection.php';


    $conn->query("INSERT INTO `issue_notice` VALUES('', '$type_of_notice', '$amount', '$owner_name', '$inspector_name', '$business_name','$deficiency',
    '$date_issued', '$IR_date_applied', '$application_no', '$inspection_order', '$business_address', '$grace_period_from',
     '$grace_period_to', '$month', '$year' )") or die(mysqli_error());
    $conn->close();

    echo "<script type='text/javascript'>alert('Successfully added new Issue Notice!');</script>";
    echo "<script>document.location='../inspection-order.php?application_no=$application_no'</script>";
}
?>