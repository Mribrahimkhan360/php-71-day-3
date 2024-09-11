<?php 
$host = "localhost";
$db_user = "root";
$db_password ="";
$db_name="ecom";

$connect=mysqli_connect($host,$db_user,$db_password,$db_name);

if($connect==false){
	echo "Error database connection establish!";
}
$inserQurey = "INSERT INTO admin_users 
(username,password)values('ibrahim3600','ibrahim3600')";

$runQurey = mysqli_query($connect,$inserQurey);

if($runQurey==true){
	echo "Data Insert";
}else{
	echo "Data is not insert";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>connection database</title>
</head>
<body>

</body>
</html>