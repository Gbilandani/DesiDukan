<?php
session_start();
include_once('connection1.php');
$email=$_SESSION['email'];
$pid=$_GET['pid'];

$q="DELETE FROM cart where productid=$pid and email='$email'";
if(mysqli_query($conn, $q))
{
	header("location:cart.php");
}


?>