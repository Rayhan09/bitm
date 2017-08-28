<?php
session_start();
unset($_SESSION['login_confirm']);
$_SESSION['confirm']= "Logout Successfully.";
header('location:index.php');
?>
