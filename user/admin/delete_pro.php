<?php 
require'DB.php';
$id = $_POST['id'];

$sql_del="DELETE FROM product WHERE pro_no = $id;";
$sql_del_qtt="DELETE FROM qtt WHERE pro_no = $id;";

//echo $sql_del;
  mysqli_query($con,$sql_del);
  mysqli_query($con,$sql_del_qtt);
 
 ?>