<?php
require_once '../require/logincheck.php';

$connection = mysqli_connect('localhost','root','','bfp-bcmis');
$tables = array();
$result = mysqli_query($connection,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
  $tables[] = $row[0];
}
$return = '';
foreach($tables as $table){
  $result = mysqli_query($connection,"SELECT * FROM ".$table);
  $num_fields = mysqli_num_fields($result);
  
  $return .= 'DROP TABLE '.$table.';';
  $row2 = mysqli_fetch_row(mysqli_query($connection,"SHOW CREATE TABLE ".$table));
  $return .= "\n\n".$row2[1].";\n\n";
  
  for($i=0;$i<$num_fields;$i++){
    while($row = mysqli_fetch_row($result)){
      $return .= "INSERT INTO ".$table." VALUES(";
      for($j=0;$j<$num_fields;$j++){
        $row[$j] = addslashes($row[$j]);
        if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
        else{ $return .= '""';}
        if($j<$num_fields-1){ $return .= ',';}
      }
      $return .= ");\n";
    }
  }
  $return .= "\n\n\n";
}
//save file
date_default_timezone_set('Asia/Manila');
$handle = fopen('bfp-bcmis_'.date('F-j-Y-g-i-a').'.sql','w+');
fwrite($handle,$return);
fclose($handle);

$conn = new mysqli("localhost", "root", "", "bfp-bcmis") or die(mysqli_error());


date_default_timezone_set('Asia/Manila');
$date=date("F j, Y, g:i a");
$id=$_SESSION['id'];

$conn->query("INSERT INTO `backup` VALUES('', '$id','Successfully exported database', '$date')") or die(mysqli_error());

echo "<script> alert ('Successfully backed up BFP-BCMIS database!')</script>";
echo "<script>document.location='../Maintenance-SystemBackUp.php'</script>"; 
?>