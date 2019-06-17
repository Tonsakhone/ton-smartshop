<?php 
	require'header.php';
	require'DB.php';
 ?>
<div class="page-head">
	<div class="container">
		<h3 class="fontlaos">ລາຍລະອຽດໃບບິນ</h3>
	</div>
</div>
<br>
<?php 	

$bill_no=mysqli_real_escape_string($con,$_GET['bill_no']);
//echo $bill_no;
$sql="SELECT * FROM buying WHERE bill_no = $bill_no";


$sql="SELECT * FROM bill WHERE bill_no = $bill_no";
 $rs=mysqli_query($con,$sql);
 $row = mysqli_fetch_array($rs);
 ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
			

			<div class="container">	
				<div class="table-responsive">
						<table class="table table-hover" style="width: 100%;height: 10%;">
							   <thead style="background-color: darkorange;">
							      <tr>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize">ລະຫັດໃບບິນ</b></th>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize">ລາຄາລວມທັງໝົດ</b></th>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize">ວັນທີ່</b></th>
							        
							      </tr>
							   </thead>
							   <tbody style="background-color: #F6F6F6;">
							      <tr>
							        <td class="textcenter"><h4><?php echo $bill_no; ?></h4></td>
							        <td class="textcenter"><h4><b><?php echo number_format($row['total']); ?></b> kip</h4></td>
							        <td class="textcenter "><h5><?php echo $row['date'] ?></h5></td>
							        
							      </tr>
    							</tbody>
						</table>
				</div>
			</div>		
					
<div class=" " >
	<div class="container">					

<?php 
$sql_list="SELECT * FROM buying WHERE bill_no = $bill_no";
$rs_list= mysqli_query($con,$sql_list);
	$i = 1;
	$count = 0;
   while ($rowl = mysqli_fetch_array($rs_list)) { 
   	$total= $rowl['qtt'] * $rowl['pro_price'];
   	 $size_no = $rowl['no_size'];	
   	$sql_s = "SELECT * FROM size WHERE size_no =  $size_no";
   	$rs_s= mysqli_query($con,$sql_s);
   	$rows = mysqli_fetch_array($rs_s);
   	$num = mysqli_num_rows($rs_list);

   	$count++;
 ?>
 <!-- Start history -->
 						<?php if($i == 1): ?>
					 	<div class="bs-example4" data-example-id="contextual-table"  style="background-color: white; ">
					 		<div class="row">
					 	<?php endif;?>	
					 		
					 			<div class="col-sm-6">
					 				<div class="col-sm-6">
					 						<center>
					 							<img class="img photo" src="admin/IMG/<?php echo $rowl['photos']; ?>">
					 						</center>
					 				</div>
					 				<div class="col-sm-6" style="background: white;">
					 					<label for="quantity"><h3  class="fontlaos"><b>ລາຍລະອຽດ </b></h3></label>
					 					<div>
					 						<br>
					 						<h4 class="fontlaos">
					 							ຊື່ສິນຄ້າ &nbsp;&nbsp;&nbsp; : <span><?php echo $rowl['pro_name']; ?></span>
					 						</h4>
					 					</div>		
					 					<div>
					 						<h4 class="fontlaos">
					 							ລາຄາ &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; : <span><?php echo number_format($rowl['pro_price']); ?> kip</span>
					 						</h4>
					 					</div>
					 					<div>
					 						<h4 class="fontlaos">
					 							ຂະໜາດ &nbsp;&nbsp;&nbsp;: <span class="size"><?php echo $rows['name_size']; ?> </span>
					 						</h4>
					 					</div>
					 					<div>
					 						<h4 class="fontlaos">
					 							ຈຳນວນ &nbsp;&nbsp;&nbsp; : <span class="fonttotal"><b><?php echo $rowl['qtt']; ?><b></span>
					 							</h4>
					 					</div>
					 					<div>
					 						<h4 class="fontlaos">
					 							ລາຄາລວມ : <span class="fonttotal"><b><?php echo number_format($total); ?> kip</b></span>
					 						</h4>
					 					</div>

					 				</div>
					 			</div><!--col6-->
					 		<?php if($i == 2 or $count == $num): ?>
					 			</div><!-- row -->
					 		</div><!-- white -->
					 		<hr>
					 		<?php 
					 		endif;
					 		$i++;
					 		
					 		if($i==3){
					 			$i=1;
					 		}
					 		?>	

<?php } ?>			 
					
</div>			
			
</div>
<?php 
	require'footer.php';
	
 ?>
  <script>
  $(document).ready(function () {
    $('.button_search').click(function (e) {
      var search = $("#s").val();
		if (search == '') {
			alert('ກະລຸນາປ້ອນຊື່ສິນຄ້າທີ່ຕ້ອງການຄົ້ນຫາ');
			e.preventDefault();
		}
    });
  });
</script>

