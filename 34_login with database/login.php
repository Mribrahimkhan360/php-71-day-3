<?php
if (isset($_COOKIE['currentUser'])) {
	header('location:profile.php');
}
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login And Registation</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div id="wrapper">
<?php require_once ('header.php');?>

<div id="content">
	<h2 class="login_title">LOGIN FORM</h2>
	<div class="login_box">
		<center style="text-align: center;">
			<?php
				if (isset($_REQUEST['error'])) {
					echo "Worng inforamtion!";
				}
			?>
		</center>
		<form action="login_core.php" method="POST">
		<center>
		<input type="text" class="login_input" name="username" placeholder="username"><br><br>
		<input type="password" placeholder="password" name="password" class="login_input"><br><br>

		<input type="submit" class="btn" id="loginBtn" name="loginBtn" value="Login">
		</center>
	</form>

	</div>
</div>
<?php require_once ('footer.php');?>
</div>
</body>
</html>