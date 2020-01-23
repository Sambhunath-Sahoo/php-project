<html>
<body>
   <?php
    
//1 3 7 15 ......

        $n = $_GET["a"];
        $b=1;
           
         while($b<=$n)
                    {
                        echo $t." ";  
                        $t = $t*2+1;                      
                        $b++;
                    }

   ?>
</body>
</html>