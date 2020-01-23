<html>
<body>
   <?php
    
//10 20 30 10 20 30 10 ......

        $n = $_GET["a"];
        for($a=1,$t=10;$a<=$n;$a++)
        {
           echo $t." ";
           $t = $t+10;
           if($t==40)
               $t=10;           
      
        }
   ?>
</body>
</h