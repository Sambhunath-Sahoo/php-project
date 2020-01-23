<?php
       $con=mysqli_connect("localhost","root","","student");
       if(mysqli_connect_errno())
       {
         echo"Failed to connect to MySQL:".mysqli_connect_error();
       }
       $name=$_GET['sname'];
       $rollno=$_GET['srollno'];
       $add=$_GET['sadd'];
       $fees=$_GET['sfees'];
       $sql="INSERT INTO student(Name,Rollno,Address,Fees)
          VALUES('$name','$rollno','$add','$fees')";
       if(!mysqli_query($con,$sql))
       {
          die('Error:' . mysqli_error($con));
       }
       echo " 1 record added";
       mysqli_close($con);
?>
