<html>
<body>
<center>
<h1><?php
	$expire=time()+60*60;
	setcookie("user","alex porter",$expire);

       ?>
	cookie created<br><br>
	<a href="c2.php">next</a>
	


</h1>
</center>
</body>
</html>
