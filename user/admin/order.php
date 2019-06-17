<?php 
  
  require'header1.php';
  require'DB.php';
 ?>


<br>

    <div id="page-wrapper">
        <div class="graphs">
           <div class="xs tabls">
            <div class="bs-example4" data-example-id="contextual-table">
                
                <h type="" class=" btn-primary btn-lg btn-block insert" data-toggle="modal" ><center><h2 class=" fontlaos"><b>ການສັ່ງຊື້</b></h2></center></button>
                
            </div>
          </div>
        </div>
      </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th><h3 class="fontlaos"><b>ລະຫັດຜ່ານ</b></h3></th>
        <th><h3 class="fontlaos"><b>ຜູ້ໃຊ້</b></h3></th>
        <th><h3 class="fontlaos"><b>ວັນທີ່</b></h3></th>
        <th><h3 class="fontlaos"><b>ລົບ</b></h3></th>
        <th><h3 class="fontlaos"><b>ສະຖານະ</b></h3></th>
      </tr>
    </thead>

    
    <?php 

    if ($_GET) {
      $no=filter_input(INPUT_GET,'bill_no',FILTER_DEFAULT);
      $sql="SELECT * FROM bill WHERE status = 1 AND bill_no LIKE '$no%'";
    }else{
      $sql="SELECT * FROM bill WHERE status = 1 ORDER BY bill_no DESC ";
    }
    	


    	$rs=mysqli_query($con,$sql);
    	while ($row = mysqli_fetch_array($rs)) {

    		$user_name = $row['user_name'];
    		$user_pw = $row['user_pw'];

    		$sql_u ="SELECT * FROM user WHERE name = '$user_name' AND password = $user_pw ";
    		$rs_u=mysqli_query($con,$sql_u);
    		$row_u = mysqli_fetch_array($rs_u);
    		$user_no = $row_u['no'];
    		
    		     ?>

   	 <tbody class="order">
      <tr>
        <td><a href="order_view.php?bill_no=<?php echo $row['bill_no']; ?>"><?php echo $row['bill_no']; ?></a></td>
        <td><button type="button" class="btn btn-link view_user" id="<?php echo $user_no; ?>"><b><?php echo $row['user_name']; ?></b></button></td>
        <td><?php echo $row['date'] ;?></td>
        <td><button class="btn btn-danger delete fontlaos"  id="<?php echo $row['bill_no']; ?>"><b><i class="fas fa-trash"></i> ລົບ</b></button></td>
        <td><button class="btn btn-success Confirm fontlaos"  id="<?php echo $row['bill_no']; ?>"><b><i class="fas fa-truck"></i> ສົ່ງສິນຄ້າແລ້ວ</b></button></td>
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
    $('.Confirm').click(function () {
      var id=$(this).attr("id");
      $.ajax({
             type: "POST",
             url: "order_Confirm.php",
             data: {id:id},
             success: function(result) {
             Swal.fire({
                  type:'success',
                  title:'<span class="fontlaos">ຢືນຢັນສຳເລັດ</span>',
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
        $(".order").hide();
        $(".order").each(function(){
          var text = $(this).text().toLowerCase();
          if (text.indexOf(val) != -1) {
            $(this).show();
          }
        })
      });
    });
  </script>
  <script type="text/javascript">
    $("#order").addClass("active");
  </script>

  <script>
  $(document).ready(function () {
    $('.delete').click(function () {
      var no = $(this).attr("id");

        Swal.fire({
            title: '<span class="fontlaos">ທ່ານຕ້ອງການລົບການສັ່ງຊື້ນີ້ ຫຼື ບໍ່</span> ?',
            html: '<span class="fontlaos">ທ່ານຕ້ອງລ໊ອກອິນກ່ອນ ຈຶ່ງສາມາດເຂົ້າເບິ່ງໄດ້<br> ທ່ານຕ້ອງການລ໊ອກອິນ ຫຼື ບໍ່ ?</span>',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
              $.ajax({
                    type: "POST",
                    url: "delete_order.php",
                    data: {id:no},
                        success: function(result) {
                            alert(result);
                            location.reload();
                        }
              });
          }
        });
    });
  });
</script>

<?php 
require'footer1.php';
 ?>