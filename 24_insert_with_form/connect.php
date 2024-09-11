<?php 
$host = "localhost";
$db_user = "admin";
$db_password ="admin";
$db_name="ecom_login_pass_admin";

$connect=mysqli_connect($host,$db_user,$db_password,$db_name);

if($connect==false){
	echo "<h1>Error database connection establish!</h1>";
}