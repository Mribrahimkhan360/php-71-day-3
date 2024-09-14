<?php
require_once 'connected.php';

$getId=$_REQUEST['id'];

$qureySelect = "DELETE FROM admin_users WHERE id=$getId";
$runDelete = mysqli_query($con,$qureySelect);


if ($runDelete==true) {
	header("location:index.php?rundel=delete");
}