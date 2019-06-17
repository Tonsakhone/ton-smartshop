<?php 
    
    require'header1.php';
    require'DB.php';
 ?>
 <br>
 <div class="container">
                <div class="row" style="background-color: white; ">
                                       
                                    
                                        <div class="col-md-10">
                                             <div class="info">
                                                <div class="row">
                                                    <div class="col-md-4 product-name">
                                                        <div class="product-name">
                                                            
                                                            <div class="product-info">
                                                                <label for="quantity"><h3  class="fontlaos"><b>ຮູບພາບ <b></h3></label><br><br>

                                                                
                                                             <link type="text/css" media="screen" rel="stylesheet" href="css/crop.css">

                                                                <form id="formbanner" action="" method="post" enctype="multipart/form-data" name="add">
                                                                <input type="hidden" name="photo" value="" id="fileinp">
                                                                     <img class="cropimage inputpic" id="myImg" src="#" alt="" required / style="background-color: gainsboro;">
                                                                <input type="hidden" name="" id="pname">
                                                                <img class="loadingimage" style="display: none;" src="loading.gif" width="64" height="20"/>
                                                                <br>
                                                                <input type="file" name="banner" class="upImage" id="img" >
                                                                <br>
                                                                <?php require'crop_footer.php'; ?></span>

     
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 product-name">
                                                        <div class="product-name">
                                                            
                                                            <div class="product-info">
                                                                <label for="quantity"><h3  class="fontlaos"><b>ສິນຄ້າ <b></h3></label>

                                                                <div><h4 class="fontlaos" ><b>ຊື່ສິນຄ້າ :</b> <span class="value"><input class="box inputad blue-input" type="text" name="name" id="name" placeholder=" Name ....."></span></h4></div>

                                                                <div><h4 class="fontlaos" ><b>ລາຄາ : </b> <span class="value"><input class="box inputad blue-input" type="number" name="price" id="price" class="" placeholder=" Price......"></span></h4></div>

                                                                <div><h4 class="fontlaos"><b>ສ່ວນຫຼຸດ %: </b> <span class="value"><br><input class="box inputad blue-input" type="number" name="dis" id="dis" placeholder=" Discount......"></span></h4></div>

                                                                <div><h4 class="fontlaos"><b>ເພດ :  </b><span class="value"><br>
                                                                    <select name="" id="gen" class="inputad">
                                                                      <option value="2">ຊາຍ</option>
                                                                      <option value="1">ຍິງ</option>
                                                                    </select></span></h4></div>
                                                             

                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 quantity">
                                                        <label for="quantity"><h3  class="fontlaos"><b>ຈຳນວນ <b></h3></label>
                                                        
                                                        <div><h4 class="fontl"> <span class="value">S : &nbsp; <input type="number" name="s" class="box inputad blue-input" id="s" value=""> </span></h4></div>

                                                        <div><h4 class="fontl"> <span class="value">M :  &nbsp;<input type="number" name="m" class="box inputad blue-input" id="m" value=""> </span></h4></div>

                                                         <div><h4 class="fontl"> <span class="value" >L : &nbsp; <input class="box inputad blue-input" type="number" name="l" id="l" value=""> </span></h4></div>

                                                        <div><h4 class="fontl"> <span class="value" >XL :  &nbsp;<input class="box inputad blue-input" type="number" name="xl" id="xl" value=""> </span></h4></div>

                                                        <div><h4 class="fontl"> <span class="value">XXL : &nbsp; <input class="box inputad blue-input" type="number" name="xxl" id="xxl" value=""> </span></h4></div>

                                                        <div><h4 class="fontl"> <span class="value">Free size: &nbsp; <input class="box inputad blue-input" type="number" name="free" id="free" value=""> </span></h4></div>
                                                                   
                                                        
                                                    </div>
                                                    <div class="col-md-2 quantity">
                                                        <label for="quantity"><h3  class="fontlaos"><b>ການຈັດການ<b> </h3></label>
                                                            <div><br><h4 class="fontlaos"> <span class="value"><input type="submit" class="btn btn btn-primary" name="submit" id="save_banner" value="ເພີ່ມສິນຄ້າ"></h4></div>
                                                        
                                                     
                                                            
                                                        
                                                        <div id="show">
                                                            
                                                        </div>
                                                        <div id="test"></div>
                                                        <div id="ton"></div>


                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<?php require'footer1.php' ?>
<script type="text/javascript">
    $("#pro").addClass("active");
</script>