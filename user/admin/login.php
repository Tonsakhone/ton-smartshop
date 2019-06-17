
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


<!--css-->

<body>
	
	<form action="login_pro.php" method="post">
	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Login To Smart Shop</h3>
							<div class="key">
								<i class="fas fa-user-tie"></i>
								<input type="text" value="" name="user" onfocus="this.value = '';"  required="" placeholder="User">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="" name="pw"  onfocus="this.value = '';" required="" placeholder="Password">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
					</div>
				</div>
			</div>
				<!--login-->
		</div>
		<!--content-->
	</form>	
</body>
</html>