<?php require_once ('header.php');?>

<div id="content">
	<h2><?php if (isset($_COOKIE["currentUser"])) {
		echo $_COOKIE["currentUser"];
	} ?></h2>
	<p>Web app developer</p>
</div>
<?php require_once ('footer.php');?>
</div>
</body>
</html>