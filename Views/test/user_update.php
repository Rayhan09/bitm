<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
use BitmCourseApp\user\user_registration\UserRegistration;
$objlogin = new UserLogin();
$objreg = new UserRegistration();
$objlogin->checkLogin();

$objreg->prepare($_POST);
//$objreg->confirm();
//$objreg->imageUpload();
$objreg->updateUser();
?>