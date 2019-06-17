<?php require'header.php'; ?>
<!-- /head -->

<?php 
	$sql="SELECT * FROM bookig WHERE user_name = '$user' AND user_pw = $pw";
	$rs=mysqli_query($con,$sql);
 ?>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3 class="fontlaos" id="history">ກະຕ່າສິນຄ້າ ແລະ ໃບບິນ</h3>
	</div>
</div>


		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;"><br><br>
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab" onclick="bastket()"><span class="fontlaos" id="bastket">ກະຕ່າສິນຄ້າ ແລະ ໃບບິນ</span></li> 
					<li class="resp-tab-item " aria-controls="tab_item-1" role="tab" onclick="history()" ><span  class="fontlaos history">ປະຫວັດການສັ່ງຊື້</span></li> 
					
				</ul>				  	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								
							<div class="checkout">
								<div class="container">
									<?php if ($item >= 1) { ?>
										<div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
										<table class="timetable_sub">
											<thead>
												<tr>
													<th class="fontlaos">ຈັດການ</th>
													<th class="fontlaos">ສິນຄ້າ</th>
													<th class="fontlaos">ຈຳນວນ</th>
													<th class="fontlaos">ຊື່</th>
													<th class="fontlaos">ລາຄາ</th>
													<th class="fontlaos">ລາຄາລວມ</th>
												</tr>
											</thead>
											<?php while ($row=mysqli_fetch_array($rs)) { 
												$size_no = $row['pro_size'];
												$sql_size="SELECT * FROM size WHERE size_no = $size_no ";
												$rs_s=mysqli_query($con,$sql_size);
												$row_s=mysqli_fetch_array($rs_s);

												?>
												<tr class="rem1">
													<td class="invert-closeb">
														<button type="button" class="btn btn-danger del fontlaos" id="<?php echo $row['no']; ?>"> <i class="far fa-window-close"></i> ຍົກເລີກ</button><br><br>
														<a href="edit_book.php?id=<?php echo $row['no']; ?>"><button type="button" class="btn btn-primary fontlaos" ><i class="far fa-edit"></i> ແກ້ໄຂ..</button></a>
													</td>
													<td class="invert-image">
														<center><a href="single.html"><img src="admin/IMG/<?php echo $row['photos']; ?>" alt=" " class="img-responsive " /></a></center></td>
													<td class="invert">
														 <?php echo $row_s['name_size']. ' = '.$row['qtt']; ?>
													</td>
													<td class="invert table"><p class="laofont"><?php echo $row['pro_name']; ?></p></td>
													<td class="invert tablep"><?php echo number_format($row['price']); ?> kip </td>
													<td class="invert tablet"><?php echo number_format($row['total']); ?> kip </td>
												</tr>

											<?php } ?>
													<tr >
														
														<td colspan="3"><h5 class="fontlaos"><b>ລາຄາລວມທັງໝົດ</b></h5></td>
														<td colspan="3"><b> <?php echo number_format($price_cart); ?> kip</b></td>
														
														
													</tr>
										</table>
									</div>
								<?php } ?>
									<div class="checkout-left">	
										
										<?php if ($item >=1) {?>	
											<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
												<a href="#" id="1" class="order fontlaos"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>ສັ່ງຊື້ທັງໝົດ</a>
											</div>
										<?php } ?>

								<?php 
									$sql_order = " SELECT * FROM bill WHERE user_pw = $pw AND  status = 1 AND user_name = '$user'";
									$rs_order = mysqli_query($con,$sql_order);
									while ($row_order=mysqli_fetch_array($rs_order)) {
										$bill_no = $row_order['bill_no'];
								 ?>
											<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
												<a href="bill_detail.php?bill_no=<?php echo $bill_no; ?>">
												<h4>Smart Shop <?php echo $bill_no; ?></h4>
												<ul>
													<?php 
														$sql_detail="SELECT * FROM buying WHERE bill_no = $bill_no";
														$rs_detail = mysqli_query($con,$sql_detail);
														$tal=0;
														while ($row_detial=mysqli_fetch_array($rs_detail)) {
													 ?>
														<li class="fontlaos"><?php echo $row_detial['pro_name']; ?> <i>-
														</i> <span><?php echo $row_detial['total']; ?> kip</span></li>

													<?php
														$tal+=$row_detial['total'];
													 } ?>
														<hr>
														<li class="fontlaos">ລວມ<i>-
														</i> <span> <?php echo $tal ?> kip</span></li>

														
													
												</ul>
											</a>
											</div>
								<?php } ?>

											<div class="clearfix"> </div>
										</div>
								</div>
							</div>
						<div class="clearfix"></div>
				</div>



			
	<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
		<?php 
			$sql_his ="SELECT COUNT(bill_no) FROM bill WHERE user_pw = $pw AND user_name='$user' AND status=2";
			$rs_his=mysqli_query($con,$sql_his);
			$row_his=mysqli_fetch_array($rs_his);
			
			$his = $row_his['COUNT(bill_no)'];
			
			if ($his > 0) { ?>
				
				<link rel="stylesheet" type="text/css" href="css/style.css">
			
		<div class="container">	
					<div class="table-responsive">						
						<table class="table table-hover" style="width: 100%;">
							   <thead style="background-color: darkorange;">
							      <tr>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize">ລະຫັດໃບບິນ</b></th>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize">ລາຄາລວມ</b></th>
							        <th class="textcenter"><b class="fontlaos fontwhite tfsize ">ວັນທີ່</b></th>
							        
							      </tr>
							   </thead>


								<?php 
									$sql_bill ="SELECT * FrOM bill WHERE user_pw = $pw AND user_name='$user' AND status=2";
									$rs_bill= mysqli_query($con,$sql_bill);
									   while ($row_bill = mysqli_fetch_array($rs_bill)) { 
									   		$bill_no = $row_bill['bill_no'];
								 ?>

							   <tbody style="background-color: #E5E5E5;">
							      <tr  data-toggle="collapse" data-target="#<?php echo $bill_no; ?>" >
							        <td class="textcenter"><h4><?php echo $bill_no; ?></h4></td>
							        <td class="textcenter"><h4><b><?php echo number_format($row_bill['total']); ?></b> kip</h4></td>
							        <td class="textcenter"><h5><?php echo $row_bill['date'] ?></h5></td>
							        
							      </tr>		
    							</tbody>
						</table>
					</div>
					<br>

	<div class="collapse " id="<?php echo $bill_no; ?>">				

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
					 				<div class="col-sm-6">
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
					 					</div><br>

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

<?php
	 }
}
 ?>			 
					
	</div>			
			


						<div class="clearfix"></div><br><br><br><br><br><br>						
				</div>




			<?php // ຖ້າຫາກບໍ່ມີປະຫວັດການື້ຂາຍ
					 }else{
						// ຖ້າຫາກມີປະຫວັດການື້ຂາຍ
					}
		 ?>
					


		


				</div>
			</div>	
		</div>


<!-- //banner -->
<!-- check out -->

<input type="hidden" name="" value="<?php echo $item; ?>" id="item">	
<?php require'footer.php'; ?>
</body>
</html>


<script>
function history() {
  document.getElementById("history").innerHTML = "ປະຫວັດການສັ່ງຊື້";
}
function bastket(){
	document.getElementById("history").innerHTML = "ກະຕ່າສິນຄ້າ ແລະ ໃບບິນ";
}
</script>

<script>
  $(document).ready(function () {
    $('.del').click(function () {


Swal.fire({
			  title: '<span class="fontlaos">ທ່ານຕ້ອງການຍົກເລິກ ຫຼື ບໍ່ </span>?',
			  html:'<span class="fontlaos">ສິນຄ້າຈະຖືກລົບອອກຈາກກະຕ່າຂອງທ່ານ</span>',
			  type: 'question',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes'
}).then((result) => {
  if (result.value) {

  			var no = $(this).attr("id");
  			 $.ajax({
	             type: "POST",
	             url: "cancel.php",
	             data: {id:no},
		             success: function(result) {
		             	 Swal.fire({
							  position: 'center-start',
							  type: 'success',
							  title: '<span class="fontlaos">ການຍົກເລີກສິນຄ້າສຳເລັດ<span>',
							  showConfirmButton: false,
							  timer: 1900
						});
		             	 	window.setTimeout(function(){ 
									location.reload();
								} ,1900);
		             
		             }
     		 });
  }
});
     
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.order').click(function () {
      var no = $("#item").val();
      	if (no == 0) {
      		alert('Empty cart');
      	}else{


      		Swal.fire({
			  title: '<span class="fontlaos">ທ່ານຕ້ອງການສັ່ງສິນຄ້າທັງໝົດ ຫຼື ບໍ່ </span>?',
			  html:'<span class="fontlaos">ຫຼັງຂາກສັ່ງແລ້ວຈະບໍ່ສາມາດຍົກເລີກໄດ້</span>',
			  type: 'question',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes'
			}).then((result) => {
  				if (result.value) {
  						var total = <?php echo $price_cart; ?>;
				  			$.ajax({
					           type: "POST",
					           url: "order_proccess.php",
					            data: {id:total},
					           	success: function(result) {
					           		 Swal.fire({
										  position: 'center-start',
										  type: 'success',
										  title: '<span class="fontlaos">ການສັ່ງສິນຄ້າສຳເລັດ</span>',
										  showConfirmButton: false,
										  timer: 1900
										});
							           		window.setTimeout(function(){ 
											location.reload();
										} ,1900);
					           }
				     		});
					   
			
  				}
});



      	}
     
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.button_search').click(function (e) {
      var search = $("#s").val();
		if (search == '') {
			Swal.fire({
		  		type: 'error',
		  		title: '<span class="fontlaos">ບໍ່ສາມາດຄົ້ນຫາໄດ້</span>',
		  		html: '<span class="fontlaos">ກະລຸນາປ້ອນຊື່ສິນຄ້າທີ່ທ່ານຕ້ອງການຄົ້ນຫາ<span>'
 
			});
			e.preventDefault();
		}
    });
  });
</script>		

	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>