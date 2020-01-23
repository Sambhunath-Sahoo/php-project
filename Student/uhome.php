<html>
<body>
<?php
       session_start();
       $un = $_SESSION['un'];
       echo " Welcome " .$un;
       echo "<br><br><a href='edit.php'>Edit</a>";
       echo "<br><br><a href='logout.php'>Logout</a>";
?>
</body>
</html>
