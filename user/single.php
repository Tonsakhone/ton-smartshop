<?php require'header.php'; ?>

<?php 
	if ($_GET) {

	$id=filter_input(INPUT_GET,'id',FILTER_DEFAULT);
	$sql="SELECT * FROM product WHERE pro_no = $id";
	$rs=mysqli_query($con,$sql);
	$row= mysqli_fetch_array($rs);

		$dis = $row['pro_price'] * $row['pro_discount'];
		$dis_c=$dis/100;
		$sale= $row['pro_price'] - $dis_c;

	$sql_size="SELECT * FROM qtt INNER JOIN size ON qtt.size_no=size.size_no where pro_no=$id and qtt >=1";
	
	$rs_size=mysqli_query($con,$sql_size);
	}
 ?>
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3 class="fontlaos"> ສັ່ງຊື້ສິນຄ້າ</h3>
	</div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<center>
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						
							<div class="thumb-image"> <img src="admin/IMG/<?php echo $row['pro_img1']; ?>" data-imagezoom="true" class="img-responsive"> </div>
							
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
			</center>
		</div>


		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated pad" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
					<h3 class="laofont"><?php echo $row['pro_name']; ?></h3><!-- product name -->
					<p><span class="item_price"> <?php echo number_format($sale); ?> kip</span></p>
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" >
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4" checked="">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" >
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
<br>
					<div class="color-quality">
						<div class="color-quality-right">
							<h5 class="fontlaos">ຂະໜາດ :</h5>
							<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<?php while ($row_size= mysqli_fetch_array($rs_size)) { ?>
								<option  value="<?php echo $row_size['size_no']; ?>" ><?php echo $row_size['name_size']; ?></option>	
								<?php } ?>						
							</select>
						</div>
					</div>
<br>

					<div class="color-quality">
						<div class="color-quality-right">
							<h5 class="fontlaos">ຈຳນວນສິນຄ້າ :</h5>
							 <input type="number" name="" class="qtt " min="1" value="1" id="qtt" required="">
						</div>
					</div>
<br>
					<div class="occasion-cart">
						<a class=" hvr-outline-out submit fontlaos">ເພີ່ມໄປທີ່ກະຕ່າ</a>
					</div>
					
			</div>
		<div class="clearfix"> </div>
	</div>
</div>

<input type="hidden" name="" id="name" value="<?php echo $row['pro_name']; ?>">
<input type="hidden" name="" id="price" value="<?php echo $sale; ?>">
<input type="hidden" name="" id="img" value="<?php echo $row['pro_img1']; ?>" >
<input type="hidden" name="" id="pro_no" value="<?php echo $id; ?>" >

<?php require'footer.php'; ?>
</body>
</html>

<script type="text/javascript">
   $(document).ready(function () {
    $('.submit').click(function () {
    	var S_S = document.getElementById("qtt").value;
    	if (S_S =='') {
    		Swal.fire({
    			type:'error',
    			title:'<span class="fontlaos">ບໍ່ສາມາດເພິ່ມໄປກະຕ່າໄດ້</span>',
    			html:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນສິນຄ້າທີ່ຕ້ອງການ</span>'
    		})
    	}else{
    		var data = "name=" +$("#name").val() + "&price=" + $("#price").val() + "&img=" + $("#img").val()+ "&size=" + $("#country1").val() + "&qtt=" + $("#qtt").val() + "&pro_no=" + $("#pro_no").val();
				      $.ajax({
					             type: "POST",
					           	 url: "single_proccess.php",
					             data: data,
					             success: function(result) {
							             	
							             			Swal.fire({
										    			type:'success',
										    			title:'<span class="fontlaos">ເພີ່ມສິນຄ້າເຈົ້າກະຕ່າສຳເລັດ</span>',
										    			showConfirmButton: false,
										    			timer:1900
									    			
									    			});  
								             			window.setTimeout(function(){ 
														   location.href="basket.php";
														} ,1900);
							             		

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