<?php 
require'DB.php'; 
$pro_id=$_POST['id'];

$sql4="SELECT * FROM product where pro_no = $pro_id";
$rs4=mysqli_query($con,$sql4);
$row4 = mysqli_fetch_array($rs4);

$sqls="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=1";
$sqlm="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=2";
$sqll="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=3";
$sqlxl="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=4";
$sqlxxl="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=5";
$sqlfree="SELECT * FROM qtt WHERE pro_no=$pro_id AND size_no=6";

$rss=mysqli_query($con,$sqls);
$rsm=mysqli_query($con,$sqlm);
$rsl=mysqli_query($con,$sqll);
$rsxl=mysqli_query($con,$sqlxl);
$rsxxl=mysqli_query($con,$sqlxxl);
$rsfree=mysqli_query($con,$sqlfree);

$rows = mysqli_fetch_array($rss);
$rowm = mysqli_fetch_array($rsm);
$rowl = mysqli_fetch_array($rsl);
$rowxl = mysqli_fetch_array($rsxl);
$rowxxl = mysqli_fetch_array($rsxxl);
$rowfree = mysqli_fetch_array($rsfree);

 ?>
 
 <link href="css/style.css" rel='stylesheet' type='text/css' />
								<div class="row">
					 					<div class="col-md-4">
					 						<br>
					 						<img class="imge" src="IMG/<?php echo $row4['pro_img1']; ?>">
					 					</div>
					 					<div class="col-md-8">
					 						<div class="info">
						 						<div class="row">
							 						<div class="col-md-7 product-name">
							 							<div class="product-name">
								 							<h3 class="fontlaos">ລາຍລະອຽດ</h3>
								 							<div class="product-info">
								 								<input id="id" type="hidden" name="" value="<?php echo $pro_id; ?>">
								 								<div class=""><h4 class="fontlaos"><b>ຊື່ສິນຄ້າ :</b> <span class="value">&nbsp;<input id="name_e" class="box inputad blue-input" type="text" value="<?php echo $row4['pro_name'];?>" required=""></span></h4></div>

									 							<div class=""><h4 class="fontlaos"><b>ລາຄາ : </b><span class="value">&nbsp;<input id="price_e" class="box inputad blue-input" type="number" value="<?php echo $row4['pro_price'];?>" required=""></span></h4></div>

									 							<div class=""><h4 class="fontlaos "><b>ສ່ວນລູດ :</b> <span class="value"><input id="dis_e" class="box inputad blue-input" type="number" value="<?php echo $row4['pro_discount'];?>" required=""></span></h4></div>

									 							<div class=""><h4 class="fontlaos "><b>ເພດ :</b> </h4><span class="value">
									 							 <select name="" id="gen_e" class="inputad">
                                                                      <option value="2" <?php if($row4['pro_sex'] == 2){
                                                                      		echo 'selected';
                                                                      		} ?>><p>ຍິງ</p>
                                                                  		</option>
                                                                      <option value="1" <?php if($row4['pro_sex'] == 1){
                                                                      		echo 'selected';
                                                                      		} ?>>
                                                                      ຊາຍ
                                                                  	</option>
                                                                   </select></span></div>
									 							
									 							
									 						</div>
									 					</div>
							 						</div>
							 						<div class="col-md-5 quantity">
							 							<h3 class="fontlaos">ຈຳນວນ: </h3>
															
							 									<div><h4 class="fontlaos">S<span class="value"> : &nbsp;<input id="s_e" class="input inputad blue-input" type="number" value="<?php echo $rows['qtt'];?>" required=""></span></h4></div>

							 									<div><h4 class="fontlaos">M<span class="value"> : &nbsp;<input id="m_e" class="input inputad blue-input" type="number" value="<?php echo $rowm['qtt'];?>" required=""></span></h4></div>

							 									<div><h4 class="fontlaos">L<span class="value"> : &nbsp;<input id="l_e" class="input inputad blue-input" type="number" value="<?php echo $rowl['qtt'];?>" required=""></span></h4></div>

							 									<div><h4 class="fontlaos">XL<span class="value"> : &nbsp;<input id="xl_e"class="input inputad blue-input" type="number" value="<?php echo $rowxl['qtt'];?>" required="" ></span></h4></div>

							 									<div><h4 class="fontlaos">XXL<span class="value"> : &nbsp;<input id="xxl_e" class="input inputad blue-input" type="number" value="<?php echo $rowxxl['qtt'];?>" required=""></span></h4></div>

							 									<div><h4 class="fontlaos">Free<span class="value"> : &nbsp;<input id="free_e" class="input inputad blue-input" type="number" value="<?php echo $rowfree['qtt'];?>" required="" ></span></h4></div>
							 							
														
														
							 						</div>
							 					</div>
							 				</div>
					 					</div>
