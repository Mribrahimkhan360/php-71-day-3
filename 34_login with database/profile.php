<?php require_once ('header.php');?>

<div id="content">
	<?php if (isset($_COOKIE["currentUser"])) {
		$currentUserTargt = $_COOKIE["currentUser"];
		$nameQurey = "SELECT * FROM admin_users WHERE email_addr='$currentUserTargt'";
		$runQurey = mysqli_query($config,$nameQurey);

		if ($runQurey==true) {
			while ($getRow = mysqli_fetch_array($runQurey)) {
				echo var_dump($getRow);
			}
		}
	} ?>
	<p>Web app developer</p>
</div>
<?php require_once ('footer.php');?>
</div>
</body>
</html>