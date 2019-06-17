<div class="modal fade" id="viewModalpic" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header  modal_corlor">
        <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
       <center> <h2 class="modal-title fontlaos">ເລືອກກຮູບພາບ</h2></center>
      </div>
      <div class="modal-body" id="detail">

<center>
<link type="text/css" media="screen" rel="stylesheet" href="css/crop.css">
<form id="formbanner" action="" method="post" enctype="multipart/form-data" name="add">

            <div class="div">
                <input type="hidden" name="photo" value="" id="fileinp">
            </div>

                <img class="cropimage" id="myImg" src="#" alt="" />
                <input type="hidden" name="" id="pname">

            <div class="form-group" >
                
                                <img class="loadingimage" style="display: none;" src="loading.gif" width="64" height="20"/>
            </div>

         <input type="file" name="banner" class="upImage" >
 

</center>
  


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
                            url: 'edit_pic.php',
                            data: fd,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function(data){ 
                             alert(data);
                             location.reload();

                            }
             });
            
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
      </div>
      <div class="modal-footer">
        <input  type="submit" name="button" class="btn btn-default btn btn btn-primary fontlaos" value="ບັນທຶກ">
        <button type="button" name="button" class="btn btn-default fontlaos" data-dismiss="modal">ປິດ</button>
      </div>
    </div>

</form>
  </div>

</div>

