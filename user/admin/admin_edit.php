<?php 
include 'DB.php';

if(isset($_POST['ton'])){
 $rand = rand();
$user_name = mysqli_real_escape_string($con,$_POST['user_name']);
$pw = mysqli_real_escape_string($con,$_POST['pw']);
$no = mysqli_real_escape_string($con,$_POST['no']);

$file_name=$rand.$_FILES['up']['name'];//hub zue houb ma

$flie_type= $_FILES['up']['type'];// hub sa nid huob ma;

$file_lo= $_FILES['up']['tmp_name'];// hub ti you houb ma

$file_size= $_FILES['up']['size'];// hub kha nad ma

$f_store = "ad_img/".$file_name;//la bou folder keb

if (move_uploaded_file( $file_lo,$f_store )){
    $sql="UPDATE admin SET name ='$user_name', password = $pw, photo = '$file_name' WHERE no = $no";
}else{
    $sql="UPDATE admin SET name ='$user_name', password = $pw WHERE no = $no";
}
  mysqli_query($con,$sql);
  header("Location:index.php");
}
 ?>