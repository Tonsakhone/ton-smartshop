    <link rel="stylesheet" type="text/css" href="css/style.css">
<?php
$outp="";
$id=$_POST['id'];
require'DB.php';
$sql="SELECT * FROM user WHERE no = $id";
$rs=mysqli_query($con,$sql);
$outp.="<div class='table reponsive'>
        <table class='table table-bordered'> ";
        while ($row=mysqli_fetch_array($rs)) {
          $outp.='<tr>
                    <td ><label><h4 class="fontlaos"><b>ຊື່ຜູ້ໃຊ້</b></h4></label></td>
                    <td ><label><h4 >  '.$row['name'].'</label></h4></td>
                  </tr>';
          $outp.='<tr>
                    <td ><label><h4 class="fontlaos"><b>ນາມສະກຸນ</b></h4></label></td>
                    <td ><label><h4>  '.$row['last_name'].'</label></h4></td>
                  </tr>';
          $outp.='<tr>
                    <td><label><h4 class="fontlaos"><b>ລະຫັດຜ່ານ</b></h3></label></td>
                    <td ><label><h4>  '.$row['password'].'</label></h4></td>
                  </tr>';
          $outp.='<tr>
                    <td><label><h4 class="fontlaos"><b>ເບີໂທ</b></h3></label></td>
                    <td ><label><h4>  '.$row['tel'].'</label></h3></td>
                  </tr>';
          $outp.='<tr>
                    <td ><label><h4 class="fontlaos"><b>ອີເມລ</b></h4></label></td>
                    <td><label><h4>  '.$row['email'].'</label></h4></td>
                  </tr>';
        }
$outp.="</table></div>";
echo $outp;
 ?>
