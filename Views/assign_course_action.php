<?php
include '../vendor/autoload.php';
use BitmCourseApp\assign_course\AssignCourse;
$objass = new AssignCourse();

$objass->prepare($_POST);
$objass->assignCourseValidation();
$objass->store();
//echo '<pre>';
//print_r($_POST);
?>