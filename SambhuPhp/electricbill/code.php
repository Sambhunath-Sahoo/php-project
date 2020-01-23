<html>
    <body>
        <?php

       $ir = $_GET['ir'];
       $fr = $_GET['fr'];

       $unit = $fr - $ir;

       if($unit<101)
       $bill = $unit*4;
       if($unit>100 && $unit<251)
       $bill = 100*4 + $unit*5;
       if($unit>250)
       $bill = 100*4 + 150*5 + $unit*6;


        if($unit>600)
            $b = $bill + 20 + $bill*.05 +$bill*.02;
        else
            $b = $bill + 20 + $bill*.05;

        echo "your electric bill is :" .$b;

        ?>
    </body>
</html>