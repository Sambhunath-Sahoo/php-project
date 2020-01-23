<html>

    <body>
       <?php 

        $fn = $_GET["a"];
	$sn = $_GET["b"];
	$tn = $_GET["c"];
      	$m = $fn;
        
        if($sn>$m)
		$m=$sn;
	if($tn>$m)
		$m=$tn;
	
	echo "the max is :" .$m;
	

		

       ?>
    </body>
</html>
