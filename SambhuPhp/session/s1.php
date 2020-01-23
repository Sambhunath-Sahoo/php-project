<html>
<body>
<center>
<h1>
<?php
     
session_start();
if(isset($_SESSION["view"]))
	$_SESSION["view"]=$_SESSION["view"]+1;
else
	$_SESSION["views"]=1;



echo "  views=".$_SESSION["VIEWS"];


?>
</h1>
</center>
</body>
</html>