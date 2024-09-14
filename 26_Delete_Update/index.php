<?php 
require_once('connected.php');
$qureydb = "SELECT * FROM admin_users"; 
$qureyStay=mysqli_query($con,$qureydb);
$count=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<b>
	<?php 
	if (isset($_REQUEST['action'])) {
		if ($_REQUEST['action']==true) {
			echo "Registration successful! Welcome to our platform.";
		}
		else{
			echo "Something is worng!";
		}
	}

	if(isset($_REQUEST['rundel'])){
			if($_REQUEST['rundel']=='delete'){
				echo "Delete data successfully!";
			}
				
			}
	if(isset($_REQUEST['edited'])){
			if($_REQUEST['edited']=='update'){
				echo "Update data successfully!";
			}
				
			}

	?>
</b>
<form action="savedata_core.php" method="POST">
	<input type="text" name="fname">
	<input type="text" name="lname">
	<input type="email" name="email">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="submitButton" value="register">
</form>

	<table style="" border=""> 
		<tr>
			<th>#</th>
			<th>Fast name</th>
			<th>Last name</th>
			<th>Email name</th>
			<th>User name</th>
			<th>passsword</th>
			<th>Action</th>
		</tr>
		<?php while ($arrData=mysqli_fetch_array($qureyStay)) {?>
		<tr>
			<td><?php echo $count++; ?></td>
			<td><?php echo $arrData['fname']; ?></td>
			<td><?php echo $arrData['lname']; ?></td>
			<td><?php echo $arrData['email']; ?></td>
			<td><?php echo $arrData['username']; ?></td>
			<td><?php echo $arrData['password']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $arrData['id'];?>">edit</a>
				<a href="delete.php?id=<?php echo $arrData['id'];?>">delete</a>
			</td>
		</tr>
			<?php }?>	
	</table>
</body>
</html>