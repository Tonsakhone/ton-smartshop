<?php require'session.php';
require'DB.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Smart shop</title>
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="dist/sweetalert2.min.css">	

	<script src="https://kit.fontawesome.com/b220043b3b.js"></script>
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles1.css" rel="stylesheet">

	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	 <script src="js/jquery.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.cropbox.js"></script>
	<script src="js/js.cookie.js" type="text/javascript">  </script>
	 

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" ><span>SMARTSHOP </span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<a href="admin_form.php" class="admin">
			<div class="profile-sidebar admin" id="admin">
				<div class="profile-userpic">
					<?php 
						$sql_p="SELECT * FROM admin";
						$rs_p = mysqli_query($con,$sql_p);
						$row_p = mysqli_fetch_array($rs_p);
					 ?>
					<img src="ad_img/<?php echo $row_p['photo']; ?>" class="img-responsive" alt="">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name "><b><?php echo $row_p['name']; ?></b></div>
					
						<div class="profile-usertitle-status fontlaos"><span class="indicator "></span>ແກ້ໄຂໂປຣໄຟ</div>
					
				</div>
				<div class="clear"></div>
			</div>
		</a>
		
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control fontlaos" placeholder="Search" id="search" style="color:red;" >
			</div>
		</form>
		<ul class="nav menu">
			<li class="" id="home"><a href="index.php"><em class="fas fa-home h_icon" >&nbsp;</em><b class="fontlaos h" >ໜ້າຫຼັກ</b></a></li>

			<li class="" id="pro"><a href="product.php"><em class="fa fa-calendar h_icon">&nbsp;</em><b class="fontlaos h" >ສິນຄ້າໃນຮ້ານ</b></a></li>

			<li class="" id="user"><a href="user.php"><em class="fas fa-users h_icon">&nbsp;</em><b class="fontlaos h" >ຜູ້ໃຊ້ງານ</b></a></li>

			<li class="" id="order"><a href="order.php"><em class="fa fa-shopping-cart h_icon">&nbsp;</em><b class="fontlaos h">ລາຍການສັ່ງຈອງ</b></a></li>

			<li class="" id="bill"><a href="bill.php"><em class="fa fa-clone h_icon">&nbsp;</em><b class="fontlaos h" >ປະຫວັດການສັ່ງຊື້</b></a></li>

			<li class="parent" id="parent"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em><b class="fontlaos h "> ອື່ນໆ </b><span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a id="about" class="fontlaos h " href="about_us.php">
						<span class="fa fa-arrow-right">&nbsp;</span> ກ່ຽວກັບ
					</a></li>
					<li><a id="sale" class="fontlaos h" href="sales_report.php">
						<span class="fa fa-arrow-right">&nbsp;</span>ສະຫຼຸບລາຍຮັບ
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right h">&nbsp;</span> .......
					</a></li>
				</ul>
			</li>
			<li><a href="logout.php"><em class="fa fa-power-off" style="color: red;">&nbsp;</em><b class="fontlaos">ອກກຈາກລະບົບ</b></a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">