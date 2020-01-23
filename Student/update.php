<?php
session_start();
$sid=$_SESSION['sid'];
$con=mysqli_connect("localhost","root","","student");
//check connection
if(mysqli_connect_errno())
{
             echo"Failed to connect to MySQL:".mysqli_connect_error();
}
$name=$_GET['sname'];
$fees=$_GET['sfees'];
$sql="update student set name='$name',fees='$fees'where Student_ID='$sid' ";

if(mysqli_query($con,$sql)==false)
{
die('Error:' .mysqli_error($con));
}
echo"<center>Successfully Updated";
echo"<br><br><a href='uhome.php'>MyHome</a>";
mysqli_close($con);
?>

