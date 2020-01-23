<html>
<body>
<center>
<h1><?php
               
function Factorial($number)
	{ 
    		if($number <= 1)
			{   
        			return 1;   
   	 		}   
    		else	
			{   
        			return $number * Factorial($number - 1);   
    			}   
	} 
  
$number = $f=$_GET['n'];
$fact = Factorial($number); 
echo "Factorial of the given number is :- " . $fact; 
               
             	

?></h1>
</center>
</body>
</html>
