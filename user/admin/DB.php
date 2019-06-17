<?php

$con = mysqli_connect('localhost','root','') or die('Error connection');
mysqli_select_db($con,'newshop') or die('No database');
mysqli_set_charset($con,'utf8');

 ?>
