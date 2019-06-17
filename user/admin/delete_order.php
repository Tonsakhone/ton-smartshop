<?php 
	require'DB.php';
	 $no = $_POST['id'];
	 
	 $sql="DELETE FROM bill WHERE bill_no=$no";
	 mysqli_query($con,$sql);

	 $sql="DELETE FROM buying WHERE bill_no=$no";
	  mysqli_query($con,$sql);

	  echo 'Successful';


 ?>