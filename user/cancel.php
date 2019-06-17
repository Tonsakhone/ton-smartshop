<?php 
	require'DB.php';
	 $no = $_POST['id'];
	 $sql="DELETE FROM bookig WHERE no=$no";
	 mysqli_query($con,$sql);
	 echo 'ການຍົກເລິກສຳເລັດ';


 ?>