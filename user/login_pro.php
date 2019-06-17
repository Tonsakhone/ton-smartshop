<?php
include('DB.php');
session_start();
$user=filter_input(INPUT_POST,'user',FILTER_DEFAULT);
$pw=filter_input(INPUT_POST,'pw',FILTER_DEFAULT);
$sql_u="SELECT count(no)  FROM user WHERE name='$user' AND password=$pw";
$rs_u=mysqli_query($con,$sql_u);
$row_u = mysqli_fetch_array($rs_u);
$check_u = $row_u['count(no)'];

if ($check_u == 1) {
	$_SESSION["user"] = $user;
	$_SESSION["password"] = $pw;
	header('Location:index.php');
}else{
		
		header('Location:login.php');
}
?>