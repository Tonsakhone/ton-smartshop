<?php require'header.php'; ?>

<div class="page-head">
	<div class="container">
		<h3 class="fontlaos">ສິນຄ້າທີ່ມີສ່ວນຫຼຸດ</h3>
	</div>
</div>
<br>

					<?php 
						if ($_GET) {
							$name=filter_input(INPUT_GET,'search',FILTER_DEFAULT);
							$sql="SELECT * FROM product WHERE pro_discount >0 AND pro_name LIKE '$name%' ORDER BY pro_no DESC";?>
								<script type="text/javascript">
									$("#s").val("<?php echo $name; ?>");
								</script>
							<?php }else{
							$sql="SELECT * FROM product WHERE pro_discount > 0  ORDER BY pro_no DESC";
							}
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
										<del><?php echo number_format($row['pro_price']); ?> kip</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2 basket fontlaos">ເພິ່ມໄປທີ່ກະຕ່າ</a>									
								</div>
							</div>
						</div>
				<?php } ?>
						<div class="clearfix"></div>
		<br>
	<?php require'footer.php'; ?>

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
	$("#dis").addClass("menu__item menu__item--current");
	$('#form').attr('action', 'promotion.php');
</script>