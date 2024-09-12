<?php
require_once('connect.php');

$getID = $_REQUEST["id"];


$deleteQurey="DELETE FROM my_user WHERE id=$getID";

$runDeleteQurey=mysqli_query($connect,$deleteQurey);

if($runDeleteQurey==true){
	header("location:index.php?deleted");
}
?>