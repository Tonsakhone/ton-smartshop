 
 <?php require'crop_head.php'; ?>
<link type="text/css" media="screen" rel="stylesheet" href="css/crop.css">

<form id="formbanner" action="" method="post" enctype="multipart/form-data">
    <div class="div">
    <input type="file" name="banner" class="upImage" >
    <input type="hidden" name="photo" value="" id="fileinp">
    </div>
    <br>
    <br>
    <img class="cropimage" id="myImg" src="#" alt="" />
    <br>
    <br>
    <div class="form-group" >
        <input type="submit" class="btn btn btn-primary" name="submit" id="save_banner" value="Submit">
            <img class="loadingimage" style="display: none;" src="loading.gif" width="64" height="20"/>
    </div>
    <br>
</form>

 <?php require'crop_footer.php'; ?>

 
 