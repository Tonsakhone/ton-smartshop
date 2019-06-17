
<?php 
require'DB.php';
$id=$_POST['id'];

$sql="DELETE FROM user WHERE no = $id";
mysqli_query($con,$sql);


 ?>