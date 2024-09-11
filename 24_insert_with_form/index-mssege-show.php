<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
if(isset($_REQUEST['action'])){
	if($_REQUEST["action"]=="true"){
		echo "<font color='green'>Registration successfully!</font>";
	}
	
}

?>
	<form action="savedata_core.php" method="POST">
		<input type="text" name="fname" placeholder="first name" />
		<input type="text" name="lname" placeholder="last name" />
		<input type="email" name="email" placeholder="email" />
		<input type="password" name="password" placeholder="password" />
		<input type="submit" name="submitbutton" value="Save Data" />
	</form>
</body>
</html>