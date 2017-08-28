<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();

$objlogin->prepare($_POST);
$objlogin->loginConfirm();

?>
