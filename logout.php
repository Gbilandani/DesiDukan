<?php
session_start();


session_destroy();
header('location:los_login.php');
?>