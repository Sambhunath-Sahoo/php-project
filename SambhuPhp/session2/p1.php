<html>
<body>
<center>
<h1>
    <?php 

	session_start();
	if(is_array($_SESSION["s1"])==false)
	{
		$ar = array();
		$ar[0] = $_GET["t1"];
		$_SESSION["s1"]=$ar;
	}
	else
	{
		$C=COUNT($_SESSION["s1"]);
		$_SESSION["s1"][$C]=$_GET["t1"];

	}
	
	header("location: http://http://localhost/php/session2/p2.html");


    ?>
	

</h1>
</center>
</body>
</html>
