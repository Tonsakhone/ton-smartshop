<?php 
require'DB.php';
	$id=$_POST['id'];
	$sql="UPDATE bill SET status = 2 WHERE bill_no = $id";
	mysqli_query($con,$sql);

	$sql_rd="SELECT * FROM buying WHERE bill_no= $id";
	$rs = mysqli_query($con,$sql_rd);

	while ($row = mysqli_fetch_array($rs)) {
		$pro_no = $row['pro_no'];
		$size = $row['no_size'];
		$order_qtt = $row['qtt'];
			$sql_qtt="SELECT * FROM qtt WHERE pro_no = $pro_no AND size_no = $size";
			$rs_qtt = mysqli_query($con,$sql_qtt);
			$row_qtt = mysqli_fetch_array($rs_qtt);
			$old_qtt = $row_qtt['qtt'];
			$new_qtt = $old_qtt - $order_qtt;
			 	$sql_update="UPDATE qtt SET qtt = $new_qtt WHERE pro_no = $pro_no AND size_no = $size";
			 	mysqli_query($con,$sql_update);

	}


	echo 'ສຳເລັດ';


 ?>