<?php
include('DB.php');
session_start();
$user_admin=filter_input(INPUT_POST,'user',FILTER_DEFAULT);
$pw_admin=filter_input(INPUT_POST,'pw',FILTER_DEFAULT);
$sql_a="SELECT count(no)  FROM admin WHERE name='$user_admin' AND password=$pw_admin";
	$rs_a=mysqli_query($con,$sql_a);
	$row_a = mysqli_fetch_array($rs_a);
	$check_a = $row_a['count(no)'];

if ($check_a == 1) {
	$_SESSION["user_admin"] = $user_admin;
	$_SESSION["password_admin"] = $pw_admin;
	header('Location: index.php');
}else{
	header('Location: login.php');
}
?>