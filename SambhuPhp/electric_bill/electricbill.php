<html>
    
    <body>
   <?php
   	$fn = $_GET["a"];
	$sn = $_GET["b"];
   	$m = $fn;
	$f = $sn;
   	if($m>0 && $f<=100)
	$bill=($f-$m)*4;
	if($m>100 && $m<=250)
        $bill=100*4 + (($f-$m)-100)*150;
	if($f>250)
	$bill=100*4 + 150*5 + ($f-$m)*250;

	echo "the bill is:" .$bill;
    
	if($bill>600)
		$b = $bill + 20+ $bill*.05 +$bill*.02;

	else
		$b = $bill + 20+ $bill*.05;
	
echo "the bill is:" .$b;

   ?>
       
        
    </body>
</html>
