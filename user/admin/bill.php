<?php 
  
  require'header1.php';
  require'DB.php'; 
  
?>
<br>

    <div id="page-wrapper">
        <div class="graphs">
           <div class="xs tabls">
            <div class="bs-example4" data-example-id="contextual-table">
                
                <h type="" class=" btn-primary btn-lg btn-block insert" data-toggle="modal" ><center><h2 class=" fontlaos"><b>ປະຫວັດການສັ່ງຊື້ ແລະ ໃບບິນທັງໝົດ<b></h2></center></button>
                
            </div>
          </div>
        </div>
      </div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th><h3 class="fontlaos"><b>ລະຫັດໃບບິນ</b></h3></th>
        <th><h3 class="fontlaos"><b>ຜູ້ໃຊ້ງານ</b></h3></th>
        <th><h3 class="fontlaos"><b>ວັນທີ່</b></h3></th>
        <th></th>
      </tr>
   </thead>

    
    <?php 
    if ($_GET) {
       $no=filter_input(INPUT_GET,'bill_no',FILTER_DEFAULT);
       $sql="SELECT * FROM bill WHERE status = 2 AND bill_no LIKE '$no%'";
    }else{
      $sql="SELECT * FROM bill WHERE status = 2";
    }
      
      $rs=mysqli_query($con,$sql);
      while ($row = mysqli_fetch_array($rs)) {

        $user_name = $row['user_name'];
        $user_pw = $row['user_pw'];

        $sql_u ="SELECT * FROM user WHERE name = '$user_name' AND password = $user_pw";
        $rs_u=mysqli_query($con,$sql_u);
        $row_u = mysqli_fetch_array($rs_u);
        $user_no = $row_u['no'];
        
             ?>

     <tbody class="bill">
      <tr>
        <td><a href="bill_detail.php?bill_no=<?php echo $row['bill_no']; ?>"><i class="fas fa-file-invoice"></i> <?php echo $row['bill_no']; ?></a></td>
        <td><button type="button" class="btn btn-link view_user" id="<?php echo $user_no; ?>"><i class="far fa-user"></i> <b><?php echo $row['user_name']; ?></b></button></td>
        <td><?php echo $row['date'] ;?></td>
        <td><button class="btn btn-danger del fontlaos" id="<?php echo $row['bill_no']; ?>"><i class="fas fa-trash"></i> ລົບ</button></td>
      </tr>
    </tbody>
    
  
<?php } ?>

  </table>
<?php require'viewModal.php'; ?>


  <script>
  $(document).ready(function () {
    $('.view_user').click(function () {
      var uid=$(this).attr("id");
      $.ajax({
             type: "POST",
             url: "select_user.php",
             data: {id:uid},
             success: function(result) {
               $("#detail").html(result);
               $('#viewModal').modal('show');
             }

      });
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.del').click(function () {
      var bill_id=$(this).attr("id");
      $.ajax({
             type: "POST",
             url: "bill_del.php",
             data: {id:bill_id},
             success: function(result) {
                 Swal.fire({
                      type:'success',
                      title:'<span class="fontlaos">ການລົບສຳເລັດ</span>',
                      showConfirmButton: false,
                      timer:1900            
                  });  
                      window.setTimeout(function(){ 
                        location.reload();
                      } ,1900);
             }

      });
    });
  });
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $("#search").keyup(function(){
        var val = $(this).val().toLowerCase();
        $(".bill").hide();
        $(".bill").each(function(){
          var text = $(this).text().toLowerCase();
          if (text.indexOf(val) != -1) {
            $(this).show();
          }
        })
      });
    });
  </script>
<script type="text/javascript">
  $("#bill").addClass("active");
</script>
 <?php require'footer.php'; ?>
