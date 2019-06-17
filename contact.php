<?php require'header.php'; ?>
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3 class="fontlaos">ຕິດຕໍ່ພວກເຮົາ</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4 class="fontlaos">ທີ່ຕັ້ງ</h4>
						<p class="fontlaos">ບ້ານ ຫຼັກຫົກ <span>ເມືອງ ປາກຊັນ.</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4 class="fontlaos">ເບີໂທຕິດຕໍ່</h4>
						<p> 020 58 58 70 30<span>030 58 58 70 30</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4 class="fontlaos">ອີເມລ</h4>
						<p><a href="smartshop@gmail.com">Smartshop@gmail.com</a><span><a href="Nome@gmail.com">Nome@gmail.com</a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle fontlaos">ແຜ່ນທີ່</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.9925987769225!2d103.6990663144169!3d18.393187987483234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDIzJzM1LjUiTiAxMDPCsDQyJzA0LjUiRQ!5e0!3m2!1slo!2sla!4v1553862953213!5m2!1slo!2sla" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
<!-- //contact -->

<!-- //product-nav -->
<?php require'footer.php'; ?>

</body>
</html>

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
<script>
 $(document).ready(function () {
    $('.basket').click(function (e) {
      if (confirm("ທ່ານຕ້ອງລ໊ອກອິນກ່ອນ. ທ່ານຕ້ອງການລ໊ອກອິນ ຫຼື ບໍ່ ?")) {
  			 window.location.href = "user/login.php";
 		 } else {
   				e.preventDefault();
 		 }
     
    });
  });
</script>	
<script type="text/javascript">
	$("#contact").addClass("menu__item menu__item--current");
</script>

