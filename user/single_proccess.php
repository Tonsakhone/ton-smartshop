<?php 
require'DB.php';
require'session.php';

	 $name = $_POST['name'];
	 $price = $_POST['price'];
	 $img = $_POST['img'];
	 $size = $_POST['size'];
	 $qtt = $_POST['qtt'];
	 $pro_no = $_POST['pro_no'];
	 $total = $qtt * $price;

	 $sql_check="SELECT * FROM bookig WHERE pro_no = $pro_no AND pro_size = $size";
	 $rs=mysqli_query($con,$sql_check);
	 $row=mysqli_fetch_array($rs);
	 $no = $row['pro_no'];

	 if ($no == NULL) {
	 	$sql = "INSERT INTO bookig VALUES ('','$user',$pw,$pro_no,'$name',$size,$qtt,'$img',$price, $total)";
	 	echo $sql;
	 }else{
	 	 
	 	$old_qtt = $row['qtt'];
	 	$new_qtt = $old_qtt + $qtt;

	 	$new_total = $new_qtt * $price;

	 	 $sql="UPDATE bookig SET qtt = $new_qtt, total = $new_total  WHERE pro_no = $pro_no AND pro_size = $size ";
	 	
	 }

		mysqli_query($con,$sql);

 ?>