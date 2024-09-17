<?php setcookie("currentUser","",time()-(86400*10));
header("location:login.php");