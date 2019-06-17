<?php
  
  require'header1.php';
  require'DB.php';
 ?>
 <link href="css/form_register.css" rel="stylesheet">
<br>
<div class="container form ">
<form action="" class="">
        <center><h2 style="color: green;" class="fontlaos"><b>ສະໝັກສະມາຊິກ</b></h2></center>
    <p class="fontlaos">ກະລູນາປ້ອນຂໍ້ມູນເປັນພາສາອັງກິດ ແລະ ໃຫ້ຄົບທຸກຢ່າງທີ່ໄດ້ກຳນົດ.</p>
    <hr>

    <label for="" class="fontlaos"><b>ຊື່ຜູ້ໃຊ້</b></label>
    <input type="text" placeholder="Enter Name" id="name" required >

    <label for="" class="fontlaos"><b>ນາມສະກຸນ</b></label>
    <input type="text" placeholder="Enter Last name" id="lname" required>

    <label for="" class="fontlaos"><b>ລະຫັດຜ່ານ</b></label>
    <input type="text" placeholder="Password" id="pw" required>

    <label for="" class="fontlaos"><b>ອີເມວ</b></label>
    <input type="email" placeholder="Enter Email" id="email" required>

    <label for="" class="fontlaos"><b>ເບີໂທ</b></label>
    <input type="number" placeholder="Enter phone number " id="tel"  min="0" required>
    <hr>

    <input type="button" class="registerbtn add  fontlaos "  value="ສະໝັກສະມາຊິກ" style="font-size: 20px;">
  
</form>
</div>
<br>
<br>
<script>
  $(document).ready(function () {
    $('.add').click(function () {
      var name = document.getElementById("name").value;
      var lname = document.getElementById("lname").value;
      var pw = document.getElementById("pw").value;
      var email = document.getElementById("email").value;
      var tel = document.getElementById("tel").value;
      
    if (name == '') {
      alert('ກະລຸນາປ້ອນຊື່ຜູ້ໃຊ້');

    }else if(lname == ''){
      alert('ກະລຸນາປ້ອນນາມສະກຸ່ນ');
    }else if(pw ==''){
      alert('ກະລຸນາປ້ອນລະຫັດ');
    }else if(email ==''){
      alert('ກະລຸນາປ້ອນອີເມລ');
    }else if(tel == ''){
      alert('ກະລຸນາປ້ອນເບີໂທ');
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
                                                  that = this;
                                                  $.ajax({
                                                   type: "POST",
                                                   url: "user_addpro.php",
                                                   data: data,
                                                   success: function(result) {
                                                      
                                                      alert(result);
                                                      window.location.href = 'user.php';
                                                   }
                                            });
                                    }else{
                                      alert('ກະລູນາປ້ອນຊື່ຜູ້ໃຊ້ ແລະ ນາມສະກຸນ ເປັນພາສາອັງກິດ');
                                    }
                            });
                        }else{


                          alert('ກະລູນາປ້ອນຊື່ຜູ້ໃຊ້ ແລະ ນາມສະກຸນ ເປັນພາສາອັງກິດ');
                        }
              });



    }

    });
  });
</script>

<script type="text/javascript">
    $("#user").addClass("active");
  </script>

<?php require'footer1.php' ?>