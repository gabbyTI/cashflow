<?php include("inc/connect.php"); 
session_start();
session_destroy();
header("location: login.php");
echo"logout successful"
?>