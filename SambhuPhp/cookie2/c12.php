<html>
<body>
<center>
<h1><?php

	if(isset($_COOKIE["user"])) 
	{
    		echo "welcome " . $_COOKIE["user"] . "!<br>";
	}
	else {
    		
    		echo "welcome guist!<br>";
	     }


?></h1>
</center>
</body>
</html>
