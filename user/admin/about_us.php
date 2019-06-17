<?php 
	require'DB.php';
	require'header1.php';
 ?>

	<link href="css/mail_us.css" rel="stylesheet">


			<br>
				
							<center><h2 class="tittle fontlaos"><b>ກ່ຽວກັບ</b></h2></center>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 mail-grid">
										<i class="fas fa-map-marked-alt" aria-hidden="true"></i>
										<h5 class="fontlaos">ທີ່ຕັ້ງ</h5>
										<p class="fontlaos">ບ້ານ ຫຼັກຫົກ, ເມື່ອງ ປາກຊັນ, ແຂວງ ບໍລິຄຳໄຊ</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="fas fa-phone" aria-hidden="true"></i>
										<h5 class="fontlaos">ການຕິດຕໍ່</h5>
										<p class="fontlaos">ເບີໂທ:  030 908 6991</p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5 class="fontlaos">ເມວ</h5>
										<p class="fontlaos">ອີເມວ: <a href="mailto:example@mail.com">Nome@Gmail.com</a></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="map-w3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.9925987769225!2d103.6990663144169!3d18.393187987483234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDIzJzM1LjUiTiAxMDPCsDQyJzA0LjUiRQ!5e0!3m2!1slo!2sla!4v1553862953213!5m2!1slo!2sla" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="mail-bottom">
									<h4>Get In Touch With Us</h4>
									<form action="#" method="post">
										<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
										<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
										<textarea  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="submit" value="Submit" >
										<input type="reset" value="Clear" >

									</form>
								</div>
							</div>
							<br><br>
						<script type="text/javascript">
							$("#parent").addClass("active");
							$("#about").addClass("active");
						</script>
				
			
<?php require'footer.php';?>