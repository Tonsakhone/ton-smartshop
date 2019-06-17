<?php 
 require'DB.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST["price"];
        $dis = $_POST['dis'];
        $s = $_POST['s'];
        $m = $_POST['m'];
        $l = $_POST['l'];
        $xl = $_POST['xl'];
        $xxl = $_POST['xxl'];
        $free = $_POST['free'];
        $gen = $_POST['gen_e'];


$sql="UPDATE product SET pro_price=$price,pro_sex=$gen,pro_discount=$dis, pro_name='$name'  WHERE pro_no = $id";
echo $sql;
                $sqls="UPDATE qtt SET qtt=$s WHERE pro_no=$id AND size_no=1";
                $sqlm="UPDATE qtt SET qtt=$m WHERE pro_no=$id AND size_no=2";
                $sqll="UPDATE qtt SET qtt=$l WHERE pro_no=$id AND size_no=3";
                $sqlxl="UPDATE qtt SET qtt=$xl WHERE pro_no=$id AND size_no=4";
                $sqlxxl="UPDATE qtt SET qtt=$xxl WHERE pro_no=$id AND size_no=5";
                $sqlfree="UPDATE qtt SET qtt=$free WHERE pro_no=$id AND size_no=6";

                    mysqli_query($con,$sql);
                    mysqli_query($con,$sqls);
                    mysqli_query($con,$sqlm);
                    mysqli_query($con,$sqll);
                    mysqli_query($con,$sqlxl);
                    mysqli_query($con,$sqlxxl);
                    mysqli_query($con,$sqlfree);

 ?>