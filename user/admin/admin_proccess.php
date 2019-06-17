<?php require'DB.php';

 $uname = $_POST['name'];
 $pw = $_POST['pw'];
 $no = $_POST['no'];

 $sql="UPDATE admin SET name ='$uname', password = $pw WHERE no = $no";
 mysqli_query($con,$sql);
 echo 'Successful';

 ?>