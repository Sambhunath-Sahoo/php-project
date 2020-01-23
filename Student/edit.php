<html><body bgcolor='aqua' ><br><br>
<table align='center' border='2' width="300" bgcolor='pink' style='font-family:Gill Sans MT;'>
<form action='update.php'>
<?php
       session_start();
       $sid = $_SESSION['sid'];
       $con=mysqli_connect("localhost","root","","student");
       if (mysqli_connect_errno())
       {
       echo "Failed to connect to MYSQL: " .mysqli_connect_error();
       }
       $res = mysqli_query($con,"SELECT name,fees FROM student where Student_ID='$sid' ");
       $row = mysqli_fetch_array($res);


       echo "<tr>";
       echo "<th>Student's name:</th>";
       echo"<th><input type='text' value='".$row['name'] ."'name='sname'></th><br><br>";
       echo"</tr>";



       echo"<tr>";
       echo"<th>Fees:</th>";
       echo"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <th><input type='text' value='".$row['fees'] ."'name='sfees'></th><br><br>";
       echo"</tr>";

       echo "<tr>";
       echo "<th colspan='2'><input type='submit'>";
       echo"</tr>";

      echo"</table>";

      echo"</form>";
?>
</body>
</html>



