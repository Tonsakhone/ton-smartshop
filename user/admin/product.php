<?php
	
	 
	 require'header1.php';
	 require'DB.php'; 
	 

?>


<?php  

if ($_GET) {

	$name=filter_input(INPUT_GET,'search',FILTER_DEFAULT);
	$sql="SELECT * FROM product WHERE pro_name LIKE '$name%'";
	
}else{

	$sql="SELECT * FROM product ORDER BY pro_no DESC ";
}


$rs=mysqli_query($con,$sql);

?>
<br>
			<div id="page-wrapper">
				<div class="graphs">
					
					 <div class="xs tabls">
					 	<div class="bs-example4" data-example-id="contextual-table">
					 			<a href="add_products.php" style="text-decoration:none">
								<button type="button" class="btn btn-primary btn-lg btn-block insert" data-toggle="modal" data-target="#myModal"><h2 class=" fontlaos"><b>ເພີ່ມສິນຄ້າໃໝ່</b></h2></button>
								</a>
						</div>
					</div>
				</div>
			</div>
     <br>
			
			<div id="page-wrapper" class="search">
				<div class="graphs">
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
					 			<div class="table-responsive">

								<?php while ($row = mysqli_fetch_array($rs)) { 
										$pro_no=$row['pro_no'];
									?>
									<?php $sqls="SELECT SUM(qtt) AS total_qtt FROM qtt where pro_no=$pro_no";
									$row1 = mysqli_fetch_array(mysqli_query($con,$sqls));
									$sql_size="SELECT * FROM qtt INNER JOIN size ON qtt.size_no = size.size_no where pro_no=$pro_no";
									$rs_size=mysqli_query($con,$sql_size);	

									$dis=$row['pro_price'] * $row['pro_discount'];
									$dis_price=$dis/100;
									$real_price=$row['pro_price']-$dis_price;

								?>
								<div class="search">
									<div class="row">
					 					<div class="col-md-3">
					 						<button class="	update-pic" id="<?php echo $row['pro_no'];?>" for="<?php echo $row['pro_img1']; ?>">
						 						<img class=" img " src="IMG/<?php echo $row['pro_img1'];?>">
					 						</button>
					 						
					 					</div>

					 					<div class="col-md-6">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-5 product-name">
							 							<div class="product-name">
								 							<h3 class="fontlaos name_color 1" style="color: blue;"><?php echo $row['pro_name']; ?></h3>
								 							<div class="product-info">
								 								<div><h4 class="fontlaos" >ລາຄາ :<b style="color: #DF0101;"> <?php echo number_format($row['pro_price']); ?></b> <span class="value">kip</span></h4></div>
									 							<div><h4 class="fontlaos">ສ່ວນຫຼຸດ: <?php echo $row['pro_discount']; ?> <span class="value">%</span></h4></div>
									 							<div><h4 class="fontlaos">ເປັນເງິນ: <span class="value"><?php echo number_format("$dis_price"); ?> kip</span></h4></div><br>
									 							<div><h3 class="fontlaos"><b>ຂາຍ :</b> <span class="value">  <b style="color: #DF0101;"><?php echo number_format($real_price);?> kip</b></span></h3></div>
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-4 quantity">
							 							<label for="quantity"><h3  class="fontlaos">ຈຳນວນ : <?php echo  $row1['total_qtt'];?> </h3></label>
														<?php while ($row2 = mysqli_fetch_array($rs_size)) {  ?>
							 							<div><h4 class="fontlaos"><?php echo $row2['name_size'] ?> <span class="value"> : <?php echo $row2['qtt'];?></span></h4></div>
							 							
														<?php } ?>
							 						</div>
							 						<div class="col-md-2.5 quantity">
							 							<label for="quantity"><h3  class="fontlaos">ການຈັດການ </h3></label>
														
							 							<div><button type="button" class="btn btn-primary edit" id="<?php echo $pro_no; ?>"><p class="fontlaos botton_add"><i class="far fa-plus-square"></i> ເພີ່ມສິນຄ້າ</p></button></div><br><br>

														<div><button onclick="popup()" type="button" class="btn btn-danger del " id="<?php echo $pro_no ?>"><p class="fontlaos botton_del"><i class="fas fa-trash"></i> ລົບສິນຄ້າ</p></button></div>
														
							 						</div>
							 						
							 					</div>
							 				</div>
					 					</div>
									</div>
								<hr>
							</div>

							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require'edit_modal.php';  ?>
		<?php require'viewModalpic.php'; ?>
		
<script>
  $(document).ready(function () {
    $('.edit').click(function () {
      var pro_no = $(this).attr("id");
     
      $.ajax({
             type: "POST",
             url: "edit_pro.php",
             data: {id:pro_no},
             success: function(result) {
               $("#edit_pro").html(result);
               $('#edit_modal').modal('show');
             }
      });
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.del').click(function () {
      var pro_no = $(this).attr("id");

			Swal.fire({
				  title: '<span class="fontlaos">ທ່ານຕ້ອງການລົບສິນຄ້ານີ້ ຫຼື ບໍ່ </span> ?',
				  html: '<span class="fontlaos">ສິນຄ້າຈະຖືກລົບອອກຈາກໜ້າເວັບໄຊທັງໝົດ</span>',
				  type: 'question',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes'
			}).then((result) => {
				  if (result.value) {
				   	 $.ajax({
			             type: "POST",
			             url: "delete_pro.php",
			             data: {id:pro_no},
			             success: function(result) {
			             	Swal.fire({
								type:'success',
								title:'<span class="fontlaos">ລົບສິນຄ້າສຳເລັດ</span>',
								showConfirmButton: false,
								timer:1900
									    			
							});  
								  window.setTimeout(function(){ 
										location.reload();
									} ,1900);
			             
			             }
		     		 });
				  }
			});
     
    });
  });
</script>


<script type="text/javascript">
   $(document).ready(function () {
    $('.save').click(function () {

      	 var name = document.getElementById("name_e").value;
      	 var price = document.getElementById("price_e").value;
      	 var dis = document.getElementById("dis_e").value;
      	 var gen = document.getElementById("gen_e").value;
      	 var s = document.getElementById("s_e").value;
      	 var m = document.getElementById("m_e").value;
      	 var l = document.getElementById("l_e").value;
      	 var xl = document.getElementById("xl_e").value;
      	 var xxl = document.getElementById("xxl_e").value;
      	 var free = document.getElementById("free_e").value;
      	 if (name=='') {
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຊື່ສິນຄ້າ</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 }else if(price == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນລາຄາສິນຄ້າ</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(dis == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນສ່ວນຫຼຸດ</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(gen == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາເລືອກເພດ</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(s == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ S</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນສ່ວນຫຼຸດ</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 }else if(m == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ M</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(l == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ L</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(xl == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ XL</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(xxl == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ XXL</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
      	 	
      	 }else if(free == ''){
      	 	Swal.fire({
		       position: 'center-start',
		       type: 'warning',
		       title:'<span class="fontlaos">ກະລຸນາປ້ອນຈຳນວນ Free size</span>',
		       showConfirmButton: false,
		       timer: 2500
		     });
     
      	 }else{

      		var data = "name=" +$("#name_e").val() + "&price=" + $("#price_e").val() + "&dis=" +$("#dis_e").val() + "&gen_e=" + $("#gen_e").val() + "&s=" +$("#s_e").val() + "&m=" + $("#m_e").val() + "&l=" +$("#l_e").val() + "&xl=" +$("#xl_e").val() + "&xxl=" + $("#xxl_e").val() + "&free=" + $("#free_e").val()+ "&id=" + $("#id").val();

      	 	  $.ajax({
             type: "POST",
             url: "edit_proccess.php",
             data: data,
             	success: function(result) {
             		Swal.fire({
						type:'success',
						title:'<span class="fontlaos">ການແກ້ໄຂສຳເລັດ</span>',
						showConfirmButton: false,
						timer:1900
									    			
					});  
						window.setTimeout(function(){ 
							 location.reload();
						} ,1900);
             		
            }
            });
  
      	 }
    
    });
    
  });
</script>


<script type="text/javascript">
   $(document).ready(function () {
  $('.update-pic').click(function(e) { 
         e.stopPropagation();

         var pho_name = $(this).attr("for");
         //set src to ID myImg      
         $("#myImg").attr("src", "IMG/"+pho_name);
         $('#viewModalpic').modal('show');
      });
  });
</script>


<script>
  $(".update-pic").click(function(){
    var myId = $(this).attr("id");
    
    Cookies.set('myId', myId, {path:'/newshop/'});
    //Cookies.set('pic_name', pic_name, {path:'/newshop/'});
     
  })
</script>


<script type="text/javascript">
		$(document).ready(function(){
			$("#search").keyup(function(){
				var val = $(this).val().toLowerCase();
				$(".search").hide();
				$(".search").each(function(){
					var text = $(this).text().toLowerCase();
					if (text.indexOf(val) != -1) {
						$(this).show();
					}
				})
			});
		});
	</script>
<script type="text/javascript">
	$("#pro").addClass("active");
</script>

<?php require'footer1.php';  ?>

