<?php 
	require'DB.php';
	 $size = $_POST['size'];
	 $qtt = $_POST['qtt'];
	 $price = $_POST['price'];
	 $no = $_POST['no'];
	 $total = $price * $qtt;

	 $sql="UPDATE bookig SET qtt=$qtt, pro_size=$size, total=$total  WHERE no=$no";
	 mysqli_query($con,$sql);
	 echo 'ການແກ້ໄຂສຳເລັດ';
 ?>