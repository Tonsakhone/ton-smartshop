<?php 
	require'DB.php';
	require'session.php';
	 $total = $_POST['id'];
	$sql_bill = "INSERT INTO bill VALUES ('',$total,1,CURRENT_TIMESTAMP,$pw,'$user')";
	mysqli_query($con,$sql_bill);

	$sql_bil_no=" SELECT max(bill_no) FROM bill WHERE user_pw = $pw AND user_name = '$user'";
	$rs_bill_no = mysqli_query($con,$sql_bil_no);
	$row_bill = mysqli_fetch_array($rs_bill_no);
	$bill_no = $row_bill['max(bill_no)'];

	$sql_pro = "SELECT * FROM bookig WHERE user_name = '$user' AND user_pw = $pw";
	$rs_pro = mysqli_query($con,$sql_pro);
	while ($row_pro = mysqli_fetch_array($rs_pro)) {
				$pro_name = $row_pro['pro_name'];
				$pro_price = $row_pro['price'];
				$no_size = $row_pro['pro_size'];
				$qtt = $row_pro['qtt'];
				$photos = $row_pro['photos'];
				$total = $row_pro['total'];
				$pro_no = $row_pro['pro_no'];
				

				$sql_insert="INSERT INTO buying VALUES ('',$bill_no,$pro_no,'$pro_name',$pro_price,$no_size,$qtt,$total,'$photos')";
				mysqli_query($con,$sql_insert);
				
			}

	$sql_delete = "DELETE FROM bookig WHERE user_name = '$user' AND user_pw = $pw ";
	mysqli_query($con,$sql_delete);
	echo 'ສຳເລັດ';

	
?>