<?php 
$host = "localhost";
$db_user = "root";
$db_password ="";
$db_name="ecom";

$connect=mysqli_connect($host,$db_user,$db_password,$db_name);

if($connect==false){
	echo "Error database connection establish!";
}


$updateQurey="DELETE FROM admin_users WHERE id=1";
$runUpQurey = mysqli_query($connect,$updateQurey);


if($runUpQurey==true){
	echo "Data Upadted";
}else{
	echo "Data is not be update";
}?>