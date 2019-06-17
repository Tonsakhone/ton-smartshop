<?php 
session_start();

$user_admin = $_SESSION["user_admin"];
$password_admin = $_SESSION["password_admin"];

if ( $user_admin == NULL & $password_admin == NULL) {

	header('Location: login.php');
}
 ?>
