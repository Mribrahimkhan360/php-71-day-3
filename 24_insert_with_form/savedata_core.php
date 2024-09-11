<?php
require_once("connect.php");


//$form_val=(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"]));



if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email"]) && isset($_REQUEST["email"]) && isset($_REQUEST["password"])){
	$fname=$_REQUEST["fname"];
	$lname=$_REQUEST["lname"];
	$email=$_REQUEST["email"];
	$password=$_REQUEST["password"];
	
	$insertQurey="INSERT INTO my_user (fname,l_name,email_addr,password)VALUES('$fname','$lname','$email','$password')";
	
	$runQurey=mysqli_query($connect,$insertQurey);
	if($runQurey){
		echo "Insert successfully!";
	}else{
		echo "Inser is unsuccessfully";
	}
}
	
