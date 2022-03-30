<?php 
session_start();
$link = mysqli_connect("localhost", "mehdi", "12345", "okukluadminpanel");
$date = date('Y-m-d');

if(!isset($_SESSION['username']) or !isset($_SESSION['password']))
{echo'<meta http-equiv="refresh" content="0; URL=login.php">'; exit;}
?>