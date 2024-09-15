<?php
require_once ('connected.php');

if (isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && isset($_REQUEST['email']) && isset($_REQUEST['email']) && isset($_REQUEST['password'])){
	//decleartion variabel
	$fname 		= $_REQUEST['fname'];
	$lname 		= $_REQUEST['lname'];
	$email 		= $_REQUEST['email'];
	$username 	= $_REQUEST['username'];
	$password	= $_REQUEST['password'];
    //image upload

    $nameFoorDB = uniqid().".jpg";
	$img    	= $_FILES['img']['name'];
    $avater_tempName = $_FILES['img']['tmp_name'];
    $location    = "img/";
    move_uploaded_file($avater_tempName,$location."$nameFoorDB");

	// database from insert data querey

	$insertQuerey = "INSERT INTO admin_users (fname,lname,email,username,password,img)VALUES('$fname','$lname','$email','$username','$password','$nameFoorDB')";
	$runQuerey = mysqli_query($con,$insertQuerey);

}

//$arrData=mysqli_fetch_array($runQuerey);

if ($runQuerey==true) {
	header("location:index.php?action=true");
}
