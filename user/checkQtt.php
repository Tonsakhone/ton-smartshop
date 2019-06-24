<?php 
	include'DB.php';

	$pro_id = $_POST['pro_id'];
	$size_no = $_POST['size_no'];

		$sql="SELECT * FROM qtt WHERE pro_no = $pro_id AND size_no = $size_no";
		$rs = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($rs);

		echo $row['qtt'];

 ?>