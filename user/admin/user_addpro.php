<?php 
require'DB.php';
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$pw=$_POST['password'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];



		$sql_check="SELECT COUNT(no)FROM user WHERE name = '$name' AND password = $pw";
        $rs_check=mysqli_query($con,$sql_check);
        $row = mysqli_fetch_array($rs_check);
        $check = $row['COUNT(no)'];
       

if ($check > "0") {
	echo 'This name and password had been already.';
}else{
	$sql="INSERT INTO user VALUES ('',$pw,'$name','$lname',$tel,'$email')";
	mysqli_query($con,$sql);
	echo 'Inserted.';
	
}
	
 ?>