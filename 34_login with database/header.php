<?php
session_start();
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login And Registation</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="wrapper">
<div id="header">
	<h1>Welcome to my website!</h1>
	<div class="top">
		<a href="index.php">Home</a>
		<?php if (isset($_COOKIE['currentUser'])) {
			echo '<a href="profile.php">Profile</a>';
		}?>
		
		<?php if (!isset($_COOKIE['currentUser'])) {
			echo '<a href="login.php">Login</a>';
		}else{
			echo '<a href="logout_core.php">logout</a>';
		}?>
		
	</div>
</div>