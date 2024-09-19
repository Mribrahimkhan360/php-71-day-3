<?php
// databse password

$db_username = 'admin'; 
$db_username = 'admin'; 

// user info 
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username==$db_username && $password == $db_username) {
	setcookie("currentUser",$username,time()+(86400*7));
	header("location:profile.php");
}
else{
	header("location:index.php?error");
}
?>