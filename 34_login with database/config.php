<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'shairiatpur_blood_group';
$config = mysqli_connect($host,$user,$password,$db_name);

if ($config==false) {
	echo "Error establishing connection to database";
}