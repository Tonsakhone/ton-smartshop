<?php require'DB.php'; ?>
<?php 
	$id=$_POST['id'];
	$sql="SELECT * FROM user WHERE no = $id";
	$rs=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($rs);
 ?>
 <table class="table table-bordered">
 	<tr>
 		<input type="hidden" name="" class="no" value="<?php echo "$id" ?>">
          <td ><label><h4 class="fontlaos"><b>ຊື່ຜູ້ໃຊ້  </b></h4></label></td>
          <td ><label><h4>  <input id="name" type="text" class ="name inpute" value="<?php echo $row['name']; ?>"></label></h4></td>
    </tr>
    <tr>
          <td ><label><h4 class="fontlaos"><b>ນາມສະກຸ່ນ </b></h4></label></td>
          <td ><label><h4>  <input id="lname" type="text" class="lname inpute"  value="<?php echo $row['last_name']; ?>"></label></h4></td>
    </tr>
    <tr>
          <td ><label><h4 class="fontlaos"><b>ລະຫັດຜ່ານ </b></h4></label></td>
          <td ><label><h4>  <input id="pw" type="text" class="password inpute" value="<?php echo $row['password']; ?>"></label></h4></td>
    </tr>
    <tr>
          <td ><label><h4 class="fontlaos"><b>ເບີໂທ  </b></h4></label></td>
          <td ><label><h4>  <input id="tel" type="number" class="tel inpute" value="<?php echo $row['tel']; ?>"></label></h4></td>
    </tr>
    <tr>
          <td ><label><h4 class="fontlaos"><b>ອີເມລ  </b></h4></label></td>
          <td ><label><h4>  <input id="email" type="email" class="email inpute" value="<?php echo $row['email']; ?>"></label></h4></td>
    </tr>
 </table>