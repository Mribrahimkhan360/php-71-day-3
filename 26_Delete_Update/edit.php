<?php

require_once ('connected.php');
if (isset($_REQUEST['id'])) {
	$getId=$_REQUEST['id'];

$selectInfo = "SELECT * FROM admin_users WHERE id=$getId";
$runInfo = mysqli_query($con,$selectInfo);
while ($getData=mysqli_fetch_array($runInfo)) {
	?>
<form action="editData_core.php" method="POST">
	<label>First name</label>
	<input type="text" name="fname" value="<?php echo $getData['fname']?>">
	<label>Last name</label>
	<input type="text" name="lname" value="<?php echo $getData['lname']?>">
	<label>Email</label>
	<input type="email" name="email" value="<?php echo $getData['email']?>">
	<label>username</label>
	<input type="text" name="username" value="<?php echo $getData['username']?>">
	
	<input type="hidden" name="id" value="<?php echo $getId;?>">
	<label>password</label>
	<input type="text" name="password" value="<?php echo $getData['password']?>">
	
	<input type="submit" name="editButton" value="update data">
</form>

	<?php }} ?>

