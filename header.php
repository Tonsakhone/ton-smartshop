<?php require'DB.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>SmartShop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

		<script src="user/admin/dist/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="user/admin/dist/sweetalert2.min.css">

<!-- //for-mobile-apps -->
<link href="user/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="user/css/index.css" rel="stylesheet" type="text/css" media="all" />
 <script src="https://kit.fontawesome.com/b220043b3b.js"></script>
<!-- pignose css -->
<link href="user/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="user/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="user/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="user/js/sweetalert.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="user/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="user/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="user/js/jquery.easing.min.js"></script>
</head>
<body>
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="user/images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form action="index.php" method="get" id="form">
				
				<div class="section_room ">
						<input type="search" id="s" value=""  style="width:210%; border-right: none;  " placeholder="ຊື່ສິນຄ້າ............" name="search" class="fontlaos">
				</div>
				<div class="sear-sub ">
					<input type="submit" value=" " class="button_search" style="width: 100%;  ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="user/login.php" class="use1"  ><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active" id="home"><a class="menu__link" href="index.php"><h3 class="fontlaos"><b>ໜ້າຫຼັກ</b></h3> <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item" id="women"><a class="menu__link" href="women.php"><h3 class="fontlaos"><b>ສຳລັບທ່ານຍິງ</b></h3></a></li>
					<li class=" menu__item" id="men"><a class="menu__link" href="men.php"><h3 class="fontlaos"><b>ສຳລັບທ່ານຊາຍ</b></h3></a></li>
					<li class=" menu__item" id="dis"><a class="menu__link" href="promotion.php"><h3 class="fontlaos"><b>ສິນຄ້າທີ່ມີສ່ວນຫຼຸດ</b></h3></a></li>
					<li class=" menu__item" id="contact"><a class="menu__link" href="contact.php"><h3 class="fontlaos"><b>ຕິດຕໍ່ພວກເຮົາ</b></h3></a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="#" class="basket">
							<h3> <div class="total fontlaos">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="">0 kip</span><br> (<span id="" class="">0</span> ລາຍການ)</div>
								
							</h3>
						</a>
						
			</div>	
		</div>

		<div class="clearfix"></div>
	</div>
</div>

<!-- banner -->

