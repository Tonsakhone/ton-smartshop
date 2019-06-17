<?php require'DB.php'; ?>
<?php 
	$no=$_POST['no'];
	$name=$_POST['name'];
	$lname=$_POST['lname'];
	$pw=$_POST['password'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];
	$face=$_POST['face'];

	$sql="UPDATE user SET name='$name' , last_name='$lname',password=$pw, tel=$tel, email='$email' WHERE no = $no";
	
	 mysqli_query($con,$sql);

 ?>