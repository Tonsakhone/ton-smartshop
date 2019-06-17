<?php 
session_start();

$user = $_SESSION["user"];
$pw = $_SESSION["password"];

if ( $user == NULL & $pw == NULL) {

	header('Location: login.php');
}
 ?>
