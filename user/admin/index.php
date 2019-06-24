
<?php
	
 	require'header1.php';
 	$sql_order="SELECT count(bill_no)  FROM bill WHERE status = 1 ";
 	$rs_order = mysqli_query($con,$sql_order);
 	$row_order = mysqli_fetch_array($rs_order);

 	$sql_bill = "SELECT count(bill_no)  FROM bill WHERE status = 2 ";
 	$rs_bill = mysqli_query($con,$sql_bill);
 	$row_bill = mysqli_fetch_array($rs_bill);

 	$sql_user = "SELECT count(no)  FROM user";
 	$rs_user = mysqli_query($con,$sql_user);
 	$row_user = mysqli_fetch_array($rs_user);

 	$sql_pro = "SELECT count(pro_no)  FROM product";
 	$rs_pro = mysqli_query($con,$sql_pro);
 	$row_pro = mysqli_fetch_array($rs_pro);

 ?>

<br> 
<br> 
<br> 


</style>
<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<a href="order.php" style="text-decoration:none">
						<div class="panel panel-teal panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
								<div class="large" style="color:red;"><?php echo $row_order['count(bill_no)']; ?></div>
								<div class="text-muted fontlaos"><h4>ລາຍການສັ່ງຊື້</h4></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<a href="bill.php" style="text-decoration:none">
						<div class="panel panel-blue panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-clone color-orange"></em>
								<div class="large"><?php echo $row_bill['count(bill_no)']; ?></div>
								<div class="text-muted fontlaos"><h4>ປະຫວັດການສັ່ງຊື້</h4></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<a href="user.php" style="text-decoration:none">
						<div class="panel panel-orange panel-widget border-right">
							<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
								<div class="large"><?php echo $row_user['count(no)']; ?></div>
								<div class="text-muted fontlaos"><h4>ຜູ້ໃຊ້ງານ</h4></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<a href="product.php" style="text-decoration:none">
						<div class="panel panel-red panel-widget ">
							<div class="row no-padding"><em class="fas fa-xl fa-tshirt"></em>
								<div class="large"><?php echo $row_pro['count(pro_no)']; ?></div>
								<div class="text-muted fontlaos"><h4>ສິນຄ້າໃນຮ້ານ</h4></div>
							</div>
						</div>
					</a>
				</div>
			</div><!--/.row-->
		</div>
<?php require'footer1.php' ?>
<script type="text/javascript">
    $("#home").addClass("active");
  </script>

 