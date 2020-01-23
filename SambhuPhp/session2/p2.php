<html>
<body>

	<?php
	session_start();
	$C=COUNT($_SESSION["s1"]);
	$_SESSION["s1"][$C]=$_GET["t1"];

	header("location:http://localhost/php/session2/p3.html");



	?>

</body>
</html>