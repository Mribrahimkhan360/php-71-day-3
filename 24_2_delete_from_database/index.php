<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
require_once('connect.php');
?>
	<form action="savedata_core.php" method="POST">
		<input type="text" name="fname" placeholder="first name" />
		<input type="text" name="lname" placeholder="last name" />
		<input type="email" name="email" placeholder="email" />
		<input type="password" name="password" placeholder="password" />
		<input type="submit" name="submitbutton" value="Save Data" />
	</form>
	
	
	<table border="1px">
	<?php
		if(isset($_REQUEST['deleted'])){
			echo "<center><b>Delete successfully!<b/></center>";
		}
	?>
	
	<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>User Password</th>
			<th>Action</th>
		</tr>
		<?php 
			$showDataQurey="SELECT * FROM my_user";
			$runDataQurey=mysqli_query($connect,$showDataQurey);
			
			if($runDataQurey==true){
				while($myData=mysqli_fetch_array($runDataQurey)){?>
				<tr>
					<td><?php echo $myData['fname']?></td>
					<td><?php echo $myData['l_name']?></td>
					<td><?php echo $myData['email_addr']?></td>
					<td><?php echo $myData['password']?></td>
					<td>
						<a href="">edit</a>
						<a href="deleteData_core.php?id=<?php echo $myData['id'];?>">delete</a>
						<a href="">upadte</a>
					</td>
				</tr>
				<?php } } ?>
	</table>	
</body>
</html>