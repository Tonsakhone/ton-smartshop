 <script src="js/jquery.js"></script>
   <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
  <script type="text/javascript" src="js/jquery.cropbox.js"></script>
  <script type="text/javascript">






var myImage = '';   
$(function () {
   
    $(".upImage").change(function () {
       
        var ext = $(this).val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
           alert('Please select a valid image [ jpg | jpeg | gif | png ]');
            $(this).val('');
            myImage= '';
            clearImage();
       
        }else{   
       
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                    reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        }
    });
    
    function imageIsLoaded(e) {
        $('#myImg').attr('src', e.target.result);
       
        $( '.cropimage' ).cropbox( {width: 300, height: 400, showControls: 'auto' } ).on('cropbox', function( event, results, img ) {
            myImage = img.getDataURL();
        });
    }
    
  
    $('#formbanner').submit(function(e){
      e.preventDefault();

       var pro_name = document.getElementById("name").value;
       var price    = document.getElementById("price").value;
       var dis      = document.getElementById("dis").value;
       var s        = document.getElementById("s").value;
       var m        = document.getElementById("m").value;
       var l        = document.getElementById("l").value;
       var xl       = document.getElementById("xl").value;
       var xxl      = document.getElementById("xxl").value;
       var free     = document.getElementById("free").value;
       var that = this; //Clear input

     if (pro_name == '') {
        alert('ກະລຸນາໃສ່ຊື່ສິນຄ້າ.');
     }else if(price == ''){
        alert('ກະລຸນາໃສ່ລາຄາສິນຄ້າ.');
     }else if(dis == ''){
        alert('ກະລຸນາໃສ່ສ່ວນຫຼຸດ.');
     }else if(s == ''){
        alert('Please put S amount.');
     }else if(m == 'ກະລຸນາໃສຈຳນວນ size s'){
        alert('ກະລຸນາໃສຈຳນວນ size M');
     }else if(l == ''){
        alert('ກະລຸນາໃສຈຳນວນ size L');
     }else if(xl == ''){
        alert('ກະລຸນາໃສຈຳນວນ size XL')
     }else if(xxl == ''){
        alert('ກະລຸນາໃສຈຳນວນ size XXL')
     }else if(free == ''){
        alert('ກະລຸນາໃສຈຳນວນ size FREE')
     }else{

              var form = $('#formbanner')[0]; 
              var fd = new FormData(form);
              if(myImage != ''){
                  var block = myImage.split(";");
                  var contentType = block[0].split(":")[1];// In this case "image/gif"
                  var realData = block[1].split(",")[1];// In this case "R0lGODlhPQBEAPeoAJosM...."
                  var blob = b64toBlob(realData, contentType);
                  fd.append("image", blob);

              }
                             $.ajax({
                            url: 'add_proccess.php',
                            data: fd,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function(data){ 
                             $("#pname").val(data);

       var data = "price=" + $("#price").val() + "&pname=" + $("#pname").val()+ "&id=" + $("#id").val()+ "&name=" + $("#name").val()+ "&dis=" + $("#dis").val()+ "&s=" + $("#s").val()+ "&m=" + $("#m").val()+ "&l=" + $("#l").val()+ "&xl=" + $("#xl").val()+ "&xxl=" + $("#xxl").val()+ "&free=" + $("#free").val() + "&gen=" + $("#gen").val();


       
            $.ajax({
             type: "POST",
             url: "add_proccess.php",
             data: data,
             success: function(result) {
                    alert('ເພີ່ມລາຍການສິນຄ້າແລ້ວ');
                    that.reset();
                    $("#img").val("");
                 }
            });
                            }
          });

     } 
            
    });

});






function b64toBlob(b64Data, contentType, sliceSize) {
        contentType = contentType || '';
        sliceSize = sliceSize || 512;

        var byteCharacters = atob(b64Data);
        var byteArrays = [];

        for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
            var slice = byteCharacters.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

      var blob = new Blob(byteArrays, {type: contentType});
      return blob;
}


    </script>
             
