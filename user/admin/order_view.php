<?php 
	require'header1.php';
	require'DB.php';
 ?>

<?php 	

$bill_no=mysqli_real_escape_string($con,$_GET['bill_no']);
//echo $bill_no;
$sql="SELECT * FROM buying WHERE bill_no = $bill_no";


$sql="SELECT * FROM bill WHERE bill_no = $bill_no";
 $rs=mysqli_query($con,$sql);
 $row = mysqli_fetch_array($rs);
 ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
			<br>
			<div id="page-wrapper ">

				<div class="graphs order">
					<h2 class=" bs-example4">
						<table class="table table-hover">
							   <thead class="hbackground">
							      <tr>
							        <th class="textcenter"><h3 class="fontlaos"><b>ລະຫັດໃບບິນ</b></h3></th>
							        <th class="textcenter"><h3 class="fontlaos"><b>ຜູ້ໃຊ້ງານ</b></h3></th>
							        <th class="textcenter"><h3 class="fontlaos"><b>ວັນທີ່</b></h3></th>
							        
							      </tr>
							   </thead>
							   <tbody>
							      <tr>
							        <td class="textcenter"><h4><?php echo $bill_no; ?></h4></td>
							        <td class="textcenter"><h4><?php echo $row['user_name'] ?></h4></td>
							        <td class="textcenter"><h4><?php echo $row['date'] ?></h4></td>
							        
							      </tr>
    							</tbody>
						</table>
						</h2>

<?php 
$sql_list="SELECT * FROM buying WHERE bill_no = $bill_no";
$rs_list= mysqli_query($con,$sql_list);

   while ($rowl = mysqli_fetch_array($rs_list)) { 
   	$total= $rowl['qtt'] * $rowl['pro_price'];
   	 $size_no = $rowl['no_size'];	
   	$sql_s = "SELECT * FROM size WHERE size_no =  $size_no";
   	$rs_s= mysqli_query($con,$sql_s);
   	$rows = mysqli_fetch_array($rs_s)
 ?>
					 	<div class="bs-example4" data-example-id="contextual-table"  style="background-color: white; ">
					 			<div class="row">
					 				<div class="col-md-3">
					 					<center>
					 						<img class="img" src="IMG/<?php echo $rowl['photos']; ?>">
					 					</center>
					 				</div>
					 				<div class="col-md-6">
					 					<label for="quantity"><h3  class="fontlaos"><b>ລາຍລະອຽດ </b></h3></label>
					 					<div><br><h4 class="fontlaos">ຊື່ສິນຄ້າ &nbsp;&nbsp;&nbsp; : <span><?php echo $rowl['pro_name']; ?></span></h4></div>		
					 					<div><h4 class="fontlaos">ລາຄາ &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; : <span><?php echo number_format($rowl['pro_price']); ?> kip</span></h4></div>
					 					<div><h4 class="fontlaos">ຂະໜາດ &nbsp;&nbsp;&nbsp;: <span class="size"><?php echo $rows['name_size']; ?> </span></h4></div>
					 					<div><h4 class="fontlaos">ຈຳນວນ &nbsp;&nbsp;&nbsp; : <span class="fonttotal"><b><?php echo $rowl['qtt']; ?><b></span></h4></div>
					 					<div><h4 class="fontlaos">ລາຄາລວມ : <span class="fonttotal"><b><?php echo number_format($total); ?> kip</b></span></h4></div>

					 				</div>
					 			</div>
						</div>
						<hr>
<?php } ?>			 
					
				</div>
			</div>

<?php 
	require'footer1.php';
	
 ?>
  <script type="text/javascript">
    $("#order").addClass("active");
  </script>

