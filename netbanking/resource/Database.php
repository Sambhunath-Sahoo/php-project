<!-- Connecting with the database -->
<?php
    
    $server="localhost";
    $user="root";
    $password="";
    $db="netbanking";
    
    
    $sql = mysqli_connect($server,$user,$password,$db);

    if(!$sql)
    {
        die("connection failed!!!".mysqli_connect_error()); 
    }
     echo "<p style='color: green; border: 2px solid black;'>connected successfully.</p>";
?>