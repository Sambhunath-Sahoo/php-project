<?php
$sid=$_GET['sid'];
$pwd=$_GET['pwd'];
$con=mysqli_connect("localhost","root","","student");
if(mysqli_connect_errno())
{
echo"Failed to connect to MYSQL:" .mysqli_connect_error($con);
}
$res = mysqli_query($con,"SELECT name FROM student where Student_ID='$sid' and Password='$pwd' ");
if ($row = mysqli_fetch_array($res))
{
    session_start();
    $_SESSION['sid']=$sid;
    $_SESSION['un']=$row['name']; 
    $_SESSION['sfees']=$row['sfees'];
    header('Location: http://localhost/18CSE060/Student/uhome.php');
}
else
   echo "invalid id/pwd";
?>