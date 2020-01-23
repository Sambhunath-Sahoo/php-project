<html>
<body>
   <?php
    
//1 3 7 13 21 ......

        $n = $_GET["a"];
        $b=1;
        $t=1;
           
         while($b<=$n)
                    {
                        echo $t." ";  
                        $t = $t + 2*$b;                      
                        $b++;
                    }

   ?>
</body>
</html>