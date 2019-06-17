
<?php 

    require'DB.php';
    if(isset($_FILES['image'])){
        $time = time();
        $rand = rand();
        $filename =  $time . '_' . $rand . '.png';
        $output_file = "IMG/".$filename;
        move_uploaded_file($_FILES["image"]["tmp_name"], $output_file);

            $no = $_COOKIE["myId"];
                $sql="UPDATE product SET pro_img1 ='$filename' WHERE pro_no = $no";
                mysqli_query($con,$sql);

                echo 'ສຳເລັດ';
        

    }
      
		

 ?>
 

