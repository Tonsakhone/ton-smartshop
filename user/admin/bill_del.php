<?php 	
		require'DB.php';
		$bill_no = $_POST['id'];
		$sql_delbill="DELETE FROM bill WHERE bill_no = $bill_no";
		$sql_delbuy="DELETE FROM buying WHERE bill_no = $bill_no";
		//echo $sql_delbill;
		//echo $sql_delbuy;
		mysqli_query($con,$sql_delbill);
		mysqli_query($con,$sql_delbuy);
		


 ?>