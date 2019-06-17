<?php 
require'header1.php';
require'DB.php';
?>

 <link href="css/form_register.css" rel="stylesheet">
<br><br>
<div class="container form ">

<?php 
  $sql="SELECT * FROM admin";
  $rs=mysqli_query($con,$sql);
  $row = mysqli_fetch_array($rs);
 ?>
<link type="text/css" media="screen" rel="stylesheet" href="/profile/jquery.cropbox.css">
<form action="admin_edit.php" method="post" enctype="multipart/form-data">
        <center>
          <img src="ad_img/<?php echo $row['photo']; ?>" class="img-circle" alt="Cinque Terre" width="400" height="320" id="myImg">
        </center>
        <center><input type="file" name="up" value="" class="upImage"></center>
    <hr>

    <label for="" class="fontlaos"><h4><b>ຊື່ຜູ້ໃຊ້</b></h4></label>
        <input type="text" placeholder="Enter Name" name="user_name" id="name" value="<?php echo $row['name']; ?>" required>

    <label for="" class="fontlaos"><h4><b>ລະຫັດຜ່ານ</b></h4></label>
       <input type="text" placeholder="Enter password" name="pw" id="pw" value="<?php echo $row['password']; ?>" required>
        <input type="hidden" name="no" id="no" value="<?php echo $row['no']; ?>">
    <input type="submit" class="registerbtn save" name="ton"  value="Save" >
</form>
</div>


<script src="profilejquery.js"></script>
<script type="text/javascript" src="profile/jquery.mousewheel.js"></script>
<script type="text/javascript" src="profilejquery.cropbox.js"></script>
<script type="text/javascript">


$(function () {
    $(".upImage").change(function () {
        var ext = $(this).val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
           alert('Please select a valid image [ jpg | jpeg | gif | png ]');
            $(this).val('');
       
        }else{   
       
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        }
    });
    
    function imageIsLoaded(e) {
        $('#myImg').attr('src', e.target.result);// where photo show
        $( '.cropimage' ).cropbox( {width: 300, height: 400, showControls: 'auto' } ).on('cropbox', function( event, results, img ) {
        });
    }
    
});
</script>


<script>
  $(document).ready(function () {
    $('.save').click(function () {
      var name = document.getElementById("name").value;
      var pw = document.getElementById("pw").value;
    if (name == '') {
      alert('Please put user name');
    }
    if (pw == ''){
      alert('Please put password');
    }

    });
  });
</script>

<?php require'viewModal.php'; ?>
<script type="text/javascript">
  $("#admin").addClass("adclick");
</script>