<?php 
include ("../Model/Header.php"); 
?>

<?php
session_start();


if(!isset($_SESSION["uname"]))
{
    header("location:../Model/adminlogin.php");
}
?>

<html>
<body>
   <h1> Hello, <?php echo $_SESSION["uname"]; ?> <br> </h1>
   <h2> Click here for logout <a href="../Control/logout.php"> Logout </a> </h2> <br> <br> <br>
</body>
</html>

<?php
include ("../Model/Footer.php");
?>

