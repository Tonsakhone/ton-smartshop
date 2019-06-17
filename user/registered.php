  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
 <link href="css/form_register.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/b220043b3b.js"></script>

  <script src="admin/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="admin/dist/sweetalert2.min.css">
    <style type="text/css">
        .swal-wide{
           width:500px !important;
        
        }
        .fontlaos{
          font-family: Phetsarath OT;
        }
        .red{
          color: red;
        }
        .blue{
          color: blue;
        }
        .s{
          font-size: 170%;
        }
    </style>

<br>

<form action="" class="main-agileits" width="">
          <center><h2 style="color: green; font-family: Phetsarath OT;" class="fontlaos"><b>ສະໝັກສະມາຊິກ</b></h2></center>
    <p style="font-family: Phetsarath OT;">ກະລູນາປ້ອນຂໍ້ມູນເປັນພາສາອັງກິດ ແລະ ໃຫ້ຄົບທຸກຢ່າງທີ່ໄດ້ກຳນົດ.</p>
    <hr>

    <label for="" style="font-family: Phetsarath OT;"><b>ຊື່ຜູ້ໃຊ້</b></label>
    <input type="text" placeholder="Enter Name" id="name" required>

    <label for="" style="font-family: Phetsarath OT;"><b>ນາມສະກຸນ</b></label>
    <input type="text" placeholder="Enter Last name" id="lname" required>

    <label for="" style="font-family: Phetsarath OT;"><b>ລະຫັດຜ່ານ</b></label>
    <input type="text" placeholder="Password" id="pw" required>

    <label for="" style="font-family: Phetsarath OT;"><b>ອີເມລ</b></label>
    <input type="email" placeholder="Enter Email" id="email" required>

    <label for="" style="font-family: Phetsarath OT;"><b>ເບີໂທ</b></label>
    <input type="number" placeholder="Enter phone number " id="tel"  min="0" required>
    <hr>

    <input type="button" class="registerbtn add faos rbtn" id="lang" value="ສະໝັກສະມາຊິກ" style="font-size: 20px; font-family: Phetsarath OT; background-color:   orange" >
  
</form>

<br>
<br>
<script>
  $(document).ready(function () {
    $('.add').click(function (text) {
      var name = document.getElementById("name").value;
      var lname = document.getElementById("lname").value;
      var pw = document.getElementById("pw").value;
      var email = document.getElementById("email").value;
      var tel = document.getElementById("tel").value;
      
    if (name == '') {
     Swal.fire({
        position: 'center',
        type: 'warning',
        title: '<span style="font-family: Phetsarath OT;">ກະລູນາປ້ອນຊື່ຜູ້ໃຊ້</span>',
        showConfirmButton: false,
        timer: 2000
      });

    }else if(lname == ''){
      Swal.fire({
        position: 'center',
        type: 'warning',
        title: '<span style="font-family: Phetsarath OT;">ກະລູນາປ້ອນນາມສະກຸນ</span>',
        showConfirmButton: false,
        timer: 2000
      });
    }else if(pw ==''){
      Swal.fire({
        position: 'center',
        type: 'warning',
        title: '<span style="font-family: Phetsarath OT;">ກະລຸນາປ້ອນລະຫັດຜ່ານ</span>',
        showConfirmButton: false,
        timer: 2000
      });
    }else if(email ==''){
      Swal.fire({
        position: 'center',
        type: 'warning',
        title: '<span style="font-family: Phetsarath OT;">ກະລຸນາປ້ອນອີເມລ</span>',
        showConfirmButton: false,
        timer: 2000
      });
    }else if(tel == ''){
      Swal.fire({
        position: 'center',
        type: 'warning',
        title: '<span style="font-family: Phetsarath OT;">ກະລຸນາປ້ອນເບີໂທລະສັບ</span>',
        showConfirmButton: false,
        timer: 2000
      });
     
    }else{

            var name = document.getElementById("name").value.replace(/\s/g);
            var lanme = document.getElementById("lname").value.replace(/\s/g);
              //read input value, and remove "space" by replace \s 
                    
            var langdic = { "english" : /^[a-zA-Z]+$/ }  //Dictionary for Unicode range of the languages
                  //const keys = Object.keys(langdic); //read  keys
                  //const keys = Object.values(langdic); //read  values
                 const keys = Object.entries(langdic); // read  keys and values from the dictionary
                 Object.entries(langdic).forEach(([key, value]) => {  // loop to read all the dictionary items if not true
                        if (value.test(name) == true){   //Check Unicode to see which one is true

                            const keys = Object.entries(langdic); 
                            Object.entries(langdic).forEach(([key, value]) => { 

                                    if (value.test(lname) == true){   
                                      
                                         var data = "name=" + $("#name").val()  + "&lname=" + $("#lname").val()  + "&password=" + $("#pw").val()  + "&tel=" + $("#tel").val()  + "&email=" + $("#email").val();
                                                    $.ajax({
                                                        type: "POST",
                                                        url: "user_addpro.php",
                                                        data: data,
                                                          success: function(result) {
                                                              if (result == 1) {
                                                                  Swal.fire({
                                                                      type: 'error',
                                                                      title: '<span class="fontlaos">ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານນີ້ມິໃນລະບົບແລ້ວ<span>',
                                                                      html: '<span class="fontlaos">ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານໃໝ່ </span>'
                                                                    });
                                                                
                                                              }else{
                                                                Swal.fire({
                                                                      title: '<span class="fontlaos s" >ທ່ານເປັນສຳມະຊິກຂອງພວກເຮົາແລ້ວ</span>',
                                                                      html:'<h4 class="fontlaos"><i class="fas fa-user-tie"></i> ຊື່ຜູ້ໃຊ້ :​ <h3 class="blue">'+name+'</h3></h4><br><h4 class="fontlaos"><i class="fas fa-key"></i> ລະຫັດຜ່ານ : <h3 class="red">'+pw+'</h3></h4>',
                                                                      type: 'success',
                                                                      customClass: 'swal-wide',
                                                                      showCancelButton: false,
                                                                      confirmButtonColor: '#3085d6',
                                                                      confirmButtonText: 'Yes',
                                                                      allowOutsideClick: false
                                                              }).then((result) => {
                                                                if (result.value) {
                                                                      
                                                                window.location.href = 'login.php';   
                                                                }
                                                                
                                                              });

                                                        }
                                                        
                                                     }
                                                    });   
                                    }else{
                                      Swal.fire({
                                          position: 'center',
                                          type: 'warning',
                                          title: '<span class="fontlaos">ກະລູນາປ້ອນຊື່ຜູ້ໃຊ້ ແລະ ນາມສະກຸນ ເປັນພາສາອັງກິດ</span>',
                                          showConfirmButton: false,
                                          timer: 3500
                                        });
                                    }
                                  });

                        }else{

                            Swal.fire({
                              position: 'center',
                              type: 'warning',
                              title: '<span class="fontlaos">ກະລູນາປ້ອນຊື່ຜູ້ໃຊ້ ແລະ ນາມສະກຸນ ເປັນພາສາອັງກິດ</span>',
                              showConfirmButton: false,
                              timer: 3500
                            });
                        }
              });

              

    }

    });
  });
</script>

<script type="text/javascript">

  function lang(text) {
  
  }
</script>


<script>
  $(document).ready(function () {
    $('#lang').click(function (text) {
      

    });
  });
</script>       


