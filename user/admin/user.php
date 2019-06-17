<?php 
require'header1.php';
require'DB.php';

 ?>

<?php 

if ($_GET) {
  $user_name=filter_input(INPUT_GET,'user_name',FILTER_DEFAULT);
  $sql="SELECT * FROM user WHERE name LIKE '$user_name%'";
}else{
  $sql="SELECT * FROM user";
}

$rs=mysqli_query($con,$sql);
?>



    
      <br>

      
 <div id="page-wrapper">
        <div class="graphs">
          
           <div class="xs tabls">
            <div class="bs-example4" data-example-id="contextual-table">
                <a href="user_addform.php" style="text-decoration:none">
                <button type="button" class="btn btn-primary btn-lg btn-block insert" ><h2 class=" fontlaos"><b>ເພີ່ມຜູ້ໃຊ້ງານ</b></h2></button>
                </a>
            </div>
          </div>

     </div>
</div>


      <div class="table-reponsive">
        <table class="table table-bodered">
          <tr>
            <th width="20%"><h3 class="fontlaos"><b>ຊື່ຜູ້ໃຊ້</b></h3></th>
            <th width="15%"><h3 class="fontlaos"><b>ລາຍລະອຽດ</b></h3></th>
             <th width="15%"><h3 class="fontlaos"><b>ແກ້ໄຂ</b></h3></th>
              <th width="15%"><h3 class="fontlaos"><b>ລົບ</b></h3></th>
          </tr>
          <?php while ($row = mysqli_fetch_array($rs)) { ?>
            <tr class="user">
              <td><h4><?php echo $row['name']; ?></h4></td>
              <td><button  name="view"  class="btn btn-success view_data fontlaos " id="<?php echo $row['no'];?>"><i class="fas fa-info-circle"></i> ລາຍລະອຽດ</button></td>
               <td><button  name="view"  class="btn btn-info edit_data fontlaos " id="<?php echo $row['no'];?>"><i class="fas fa-user-edit"></i> ແກ້ໄຂ</button></td>
                <td><button name="view"  class="btn btn-danger del_data fontlaos " id="<?php echo $row['no'];?>"><i class="fas fa-trash"></i> ລົບຜູ້ໃຊ້</button></td>
            </tr>
          <?php } ?>
        </table>

      </div>
    
<?php require'viewModal.php'; ?>
<?php require'user_edit_md.php'; ?>



<script>
  $(document).ready(function () {
    $('.savee').click(function () {

      var name = document.getElementById("name").value;
      var lname = document.getElementById("lname").value;
      var pw = document.getElementById("pw").value;
      var email = document.getElementById("email").value;
      var tel = document.getElementById("tel").value;
      

    if (name == '') {
      Swal.fire({
           position: 'center-start',
           type: 'warning',
           title:'<span class="fontlaos">ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້</span>',
           showConfirmButton: false,
           timer: 2500
         });
      
    }else if(lname == ''){
      Swal.fire({
           position: 'center-start',
           type: 'warning',
           title:'<span class="fontlaos">ກະລຸນາປ້ອນນາມສະກຸນຜູ້ໃຊ້</span>',
           showConfirmButton: false,
           timer: 2500
         });
      
    }else if(pw ==''){
      Swal.fire({
           position: 'center-start',
           type: 'warning',
           title:'<span class="fontlaos">ກະລຸນາລະຫັດຜ່ານ</span>',
           showConfirmButton: false,
           timer: 2500
         });
      
    }else if(email ==''){
      Swal.fire({
           position: 'center-start',
           type: 'warning',
           title:'<span class="fontlaos">ກະລຸນາປ້ອນອີເມລຜູ້ໃຊ້</span>',
           showConfirmButton: false,
           timer: 2500
         });
      
    }else if(tel == ''){
      Swal.fire({
           position: 'center-start',
           type: 'warning',
           title:'<span class="fontlaos">ກະລຸນາປ້ອນເບີໂທຕິດຕໍ່</span>',
           showConfirmButton: false,
           timer: 2500
         });
      
    }else{

       var data_e = "name=" + $(".name").val()  + "&lname=" + $(".lname").val()  + "&password=" + $(".password").val()  + "&tel=" + $(".tel").val()  + "&email=" + $(".email").val()  + "&face=" + $(".face").val() + "&no=" + $(".no").val();
            $.ajax({
              type: "POST",
              url: "user_edit_process.php",
              data: data_e,
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



<script>
  $(document).ready(function () {
    $('.edit_data').click(function () {
      var uid=$(this).attr("id");
      $.ajax({
             type: "POST",
             url: "user_edit.php",
             data: {id:uid},
             success: function(result) {
            
              $("#detailedit").html(result);
              $('#viewModaledit').modal('show');
             }
      });
    });
  });
</script>

<script>
  $(document).ready(function () {
    $('.view_data').click(function () {
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
    $('.del_data').click(function () {
      var uid=$(this).attr("id");

        Swal.fire({
          title: '<span class="fontlaos">ຕ້ອງການລົບຜູ້ໃຊ້ງານນີ້ ຫຼື ບໍ່</span> ?',
          html: '<span class="fontlaos">ຫຼັງຈາກລົບຜູ້ໃຊ້ງານແລ້ວຈະບໍ່ສາມາດກູ້ຄືນໄດ້</span>',
          type: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
             $.ajax({
                 type: "POST",
                 url: "user_delete.php",
                 data: {id:uid},
                 success: function(result) {
                   Swal.fire({
                        type:'success',
                        title:'<span class="fontlaos">ລົບຜູ້ງານສຳເລັດ</span>',
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
    $(document).ready(function(){
      $("#search").keyup(function(){
        var val = $(this).val().toLowerCase();
        $(".user").hide();
        $(".user").each(function(){
          var text = $(this).text().toLowerCase();
          if (text.indexOf(val) != -1) {
            $(this).show();
          }
        })
      });
    });
  </script>
  <script type="text/javascript">
    $("#user").addClass("active");
  </script>

 <?php require'footer1.php'; ?>