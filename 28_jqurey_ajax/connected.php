<?php
$host 		= 'localhost';
$user 		= 'root';
$password	= '';
$dbName		= "shairiatpur_blood_group";

$con=mysqli_connect($host,$user,$password,$dbName);

if ($con==false) {
	echo "Error database connection";
}

