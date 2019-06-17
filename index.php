 
<?php 
	
	require'header.php';
	
 ?>
 

<!-- //banner -->
 <div class="banner-grid"> 
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="user/images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="user/images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="user/images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="user/images/baa1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="user/images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="user/images/baa3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="user/images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="user/images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="user/images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="user/images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>

<!-- product-nav -->
<div class="product-easy">
	<div class="container">
		
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
		<div class="sap_tabs">

	<!-- search -->
		<?php if ($_GET) { 
			$name=filter_input(INPUT_GET,'search',FILTER_DEFAULT);
			$sql_search="SELECT * FROM product WHERE pro_discount = 0 and pro_name LIKE '$name%'";
			$rs_s = mysqli_query($con,$sql_search);
			while ($row_s=mysqli_fetch_array($rs_s)) {
		?>

						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="user/admin/IMG/<?php echo $row_s['pro_img1']; ?>" alt="" class="pro-image-front">
									<img src="user/admin/IMG/<?php echo $row_s['pro_img1']; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart add basket fontlaos">ກົດເບິ່ງ</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4 class="laofont"><a href="#" class="basket"><?php echo $row_s['pro_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($row_s['pro_price']); ?> kip</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2 basket fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>									
								</div>
							</div>
						</div>

				<?php } ?>
			<script type="text/javascript">
				$("#s").val("<?php echo $name; ?>");
			</script>

		<!-- /search -->
		<?php }else{ ?>

			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="fontlaos">ສິນຄ້າທີ່ມີສ່ວນຫຼຸດ</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span class="fontlaos">ສຳລັບທ່ານຊາຍ</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span class="fontlaos">ສຳລັນທ່ານຍິງ</span></li> 
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<?php 
								$sql="SELECT * FROM product WHERE pro_discount > 0  ORDER BY pro_no DESC";
								$rs = mysqli_query($con,$sql);
								while($row = mysqli_fetch_array($rs)){
								$dis = $row['pro_price'] * $row['pro_discount'];
								$dis_c=$dis/100;
								$sale= $row['pro_price'] - $dis_c;
								
							 ?>
						<div class="col-md-3 product-men">
							<img class="product-new-top" src="user/admin/imgdiscount/<?php echo $row['pro_discount']; ?>.png" style="background: none; width: 60%; height: 20%; margin-right:-10px; margin-top:-20px; ">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-front">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart basket fontlaos">ກົດເບິ່ງ</a>
											</div>
										</div>
								</div>
								<div class="item-info-product ">
									<h4 class="laofont"><a href="#" class="basket"><?php echo $row['pro_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($sale); ?> kip</span>
										<del><?php echo number_format($row['pro_price']);?> kip</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2 basket fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>									
								</div>
							</div>
						</div>
				<?php } ?>
						<div class="clearfix"></div>
				</div>



			
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<?php 
							$sql="SELECT * FROM product WHERE pro_discount = 0 AND pro_sex = 2 ORDER BY pro_no DESC";
							$rs = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($rs)){
							 ?>				
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-front">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart add basket fontlaos">ກົດເບີ່ງ</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4 class="laofont"><a href="#" class="basket"><?php echo $row['pro_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($row['pro_price']); ?> kip</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2 basket fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>									
								</div>
							</div>
						</div>
						<?php } ?>
						<div class="clearfix"></div>						
					</div>


					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
					<?php 
						$sql="SELECT * FROM product WHERE pro_discount = 0 AND pro_sex = 1 ORDER BY pro_no DESC";
						$rs = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($rs)){
					?>		
					
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-front">
									<img src="user/admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="#" class="link-product-add-cart basket fontlaos" >ກົດເບີ່ງ</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4 class="laofont"><a href="#"class="basket"><?php echo $row['pro_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo number_format($row['pro_price']); ?> kip</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2 basket fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>									
								</div>
							</div>
						</div>
					<?php } ?>
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		<?php } ?>

		</div>
	</div>
</div>
<!-- //product-nav -->
<?php 
	require'footer.php';

 ?>
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

	
<script type="text/javascript">
	$("#home").addClass("menu__item menu__item--current");
</script>		