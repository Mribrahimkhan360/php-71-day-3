<?php 
$host = "localhost";
$db_user = "root";
$db_password ="";
$db_name="ecom";

$connect=mysqli_connect($host,$db_user,$db_password,$db_name);

if($connect==false){
	echo "Error database connection establish!";

	$myqurey = "SELECT username,password FROM admin_users;";
	$run_query = mysqli_query($connect,$myqurey );
	
	$dataCount = mysqli_num_rows($run_query);
	
	while($mydata = mysqli_fetch_array($run_query)){
		print_r ($mydata);
	}
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