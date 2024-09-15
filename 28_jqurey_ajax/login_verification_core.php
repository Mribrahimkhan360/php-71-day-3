<?php
$dbuser = "admin";
$pass   = "admin";

$username_my = $_REQUEST['uName'];
$password_my = $_REQUEST['pWord'];

if ($dbuser == $username_my && $pass==$password_my) {
	echo "You are logged in!";
}
else{
	echo "worng username and password!!!";
}