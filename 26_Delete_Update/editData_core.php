<?php 
require_once('connected.php');
if (isset($_REQUEST['editButton'])) {
	$fname    = $_REQUEST['fname'];
	$lname    = $_REQUEST['lname'];
	$email    = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$id 	  = $_REQUEST['id'];

	$updateQurey = "UPDATE admin_users SET fname='$fname',lname='$lname',email='$email',username='$username',password='$password' WHERE id=$id";
	$runQurey = mysqli_query($con,$updateQurey);

	if ($runQurey==true) {
		header('location:index.php?edited=update');
	}
}