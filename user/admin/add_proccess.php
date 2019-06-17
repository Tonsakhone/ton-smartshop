<?php 
 require'DB.php';
 
     
    if(isset($_FILES['image'])){
        $time = time();
        $rand = rand();
        $filename =  $time . '_' . $rand . '.png';
        $output_file = "IMG/".$filename;
        move_uploaded_file($_FILES["image"]["tmp_name"], $output_file);
        echo $filename;
    }else{

        $pname = $_POST['pname'];
        $name = $_POST['name'];
        $price = $_POST["price"];
        $dis = $_POST['dis'];
        $s = $_POST['s'];
        $m = $_POST['m'];
        $l = $_POST['l'];
        $xl = $_POST['xl'];
        $xxl = $_POST['xxl'];
        $free = $_POST['free'];
        $gen = $_POST['gen'];
       
        

                       
                    $sql="INSERT INTO product VALUES('','$name',$price,$gen,$dis,'$pname')";
                    mysqli_query($con,$sql);
                    $sql_id = "SELECT max(pro_no) FROM product";
                    $rs_id = mysqli_query($con,$sql_id);
                    $row_id = mysqli_fetch_array($rs_id);
                    $id = $row_id['max(pro_no)'];


                    $sqls="INSERT INTO qtt VALUES ('',$id,1,$s)";
                    $sqlm="INSERT INTO qtt VALUES ('',$id,2,$m)";
                    $sqll="INSERT INTO qtt VALUES ('',$id,3,$l)";
                    $sqlxl="INSERT INTO qtt VALUES ('',$id,4,$xl)"; 
                    $sqlxxl="INSERT INTO qtt VALUES ('',$id,5,$xxl)";
                    $sqlfree="INSERT INTO qtt VALUES ('',$id,6,$free)";
                       
                       mysqli_query($con,$sqls);
                       mysqli_query($con,$sqlm);
                       mysqli_query($con,$sqll);
                       mysqli_query($con,$sqlxl);
                       mysqli_query($con,$sqlxxl);
                       mysqli_query($con,$sqlfree);

                   
                    

    }

    
 ?>
