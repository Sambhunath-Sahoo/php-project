<html>
<body>
<center>
<h1>
	<?php

	session_start();
	
	for($i=0;$i<COUNT($_SESSION["S1"]);$i++)
                     echo $_SESSION["s1"][$i]."<br>";





	?>

</h1>
</center>
</body>
</html>
