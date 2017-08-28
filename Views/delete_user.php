<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();

$objlogin->checkLogin();
$objlogin->prepare($_GET);
$objlogin->deleteUser();
?>