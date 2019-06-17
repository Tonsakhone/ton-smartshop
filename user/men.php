<?php require'header.php'; ?>
<div class="page-head">
	<div class="container">
		<h3 class="fontlaos" id="history">ສິນຄ້າສຳລັບທ່ານຊາຍ</h3>
	</div>
</div>


<br>

						<?php
						if($_GET) {
							$name=filter_input(INPUT_GET,'search',FILTER_DEFAULT);
						 	$sql="SELECT * FROM product WHERE pro_discount = 0 AND pro_sex = 2 AND pro_name LIKE '$name%' ORDER BY pro_no DESC";?>

						 		<script type="text/javascript">
									$("#s").val("<?php echo $name; ?>");
								</script>

						<?php }else{
						 	$sql="SELECT * FROM product WHERE pro_discount = 0 AND pro_sex = 2 ORDER BY pro_no DESC";
						 }

							
							$rs = mysqli_query($con,$sql);
							while($row = mysqli_fetch_array($rs)){
							 ?>				
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-front">
									<img src="admin/IMG/<?php echo $row['pro_img1']; ?>" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?id=<?php echo $row['pro_no']; ?>" class="link-product-add-cart add fontlaos">ກົດເບິ່ງ</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4 class="laofont"><a href="single.php?id=<?php echo $row['pro_no']; ?>"><?php echo $row['pro_name']; ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo $row['pro_price']; ?> kip</span>
									</div>
									<a href="single.php?id=<?php echo $row['pro_no']; ?>" class="item_add single-item hvr-outline-out button2 fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>									
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
	$("#men").addClass("menu__item menu__item--current");
	$('#form').attr('action', 'men.php');
</script>