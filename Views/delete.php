<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
use BitmCourseApp\assign_course\AssignCourse;
$objlogin = new UserLogin();
$objass = new AssignCourse();

$objlogin->checkLogin();
$objass->prepare($_GET);
$objass->deleteAssigned();
?>