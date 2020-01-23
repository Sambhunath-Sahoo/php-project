<html><body bgcolor='aqua'>
<?php
$con=mysqli_connect("localhost","root","","student");
if(mysqli_connect_errno())
{
echo"Failed to connect to MYSQL:" .mysqli_connect_error($con);
}
$res = mysqli_query($con,"SELECT name,rollno,fees FROM student");
echo "<table border='1' align='center' bgcolor='pink' style='font-family:Gill Sans MT;'>
<tr>
<th>Name</th>
<th>Rollno</th>
<th>Fees</th>
</tr>";

while($row=mysqli_fetch_array($res))
{
 echo"<tr>";
 echo"<td>".$row['name']."</td>";
 echo"<td>".$row['rollno']."</td>";
 echo"<td>".$row['fees']."</td>";
 echo"</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</body>
</html>