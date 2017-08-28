<?php
include '../vendor/autoload.php';

use BitmCourseApp\user\user_login\UserLogin;
use BitmCourseApp\assign_course\AssignCourse;

$objlogin = new UserLogin();
$objass = new AssignCourse();

$objlogin->checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BITM Course Manager</title>

        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->

        <!-- Core JS files -->
        <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
        <!-- /core JS files -->

        <!-- Theme JS files -->
        <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_layouts.js"></script>

        <script type="text/javascript" src="assets/js/core/app.js"></script>
        <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
        <link rel="stylesheet" type="text/css" href="datepicker/tcal.css" />
        <script type="text/javascript" src="datepicker/tcal.js"></script>
        
        
        <!-- /theme JS files -->
        <style>

        </style>

    </head>

    <body>

        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
                </ul>



                <ul class="nav navbar-nav navbar-right">


                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="elements/user_images/<?php echo $_SESSION['login_confirm']['image']; ?>" width="28" height="28" alt="">
                            <span><?php echo $_SESSION['login_confirm']['username']; ?></span>
                            <i class="caret"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                            <li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->


        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                <div class="sidebar sidebar-main">
                    <div class="sidebar-content">

                        <!-- User menu -->
                        <div class="sidebar-user">
                            <div class="category-content">
                                <div class="media">
                                    <a href="#" class="media-left"><img src="elements/user_images/<?php echo $_SESSION['login_confirm']['image']; ?>" class="img-circle img-sm" alt=""></a>
                                    <div class="media-body">
                                        <span class="media-heading text-semibold"><?php echo $_SESSION['login_confirm']['full_name']; ?></span>
                                        <div class="text-size-mini text-muted">

                                        </div>
                                    </div>

                                    <div class="media-right media-middle">
                                        <ul class="icons-list">
                                            <li>
                                                <a href="#"><i class="icon-cog3"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /user menu -->


                        <!-- Main navigation -->
                        <div class="sidebar-category sidebar-category-visible">
                            <div class="category-content no-padding">
                                <ul class="navigation navigation-main navigation-accordion">

                                    <!-- Main -->
                                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                    <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                    <li><a href="user_manager.php"><i class="icon-user"></i> <span>User Menu</span></a></li>
                                    <li><a href="#"><i class="icon-people"></i> <span>Trainer</span></a></li>
                                    <li><a href="#"><i class="icon-book"></i> <span>Course</span></a></li>
                                    <li><a href="#"><i class="icon-laptop"></i> <span>Software Management</span></a></li>
                                    <li class="active"><a href="assign_course.php"><i class="icon-list-unordered"></i> <span>Assign Course</span></a></li>
                                    <li><a href="about_project.php"><i class="icon-primitive-square"></i> <span>About Project</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /main navigation -->
                    </div>
                </div>
                <!-- /main sidebar -->


                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Page header -->
                    <div class="page-header">
                        <div class="page-header-content">
                            <div class="page-title">
                                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Assign Course</h4>
                            </div>
                        </div>

                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                                <li class="active">Assign Course</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">
                        <!-- Dashboard content -->
                        <form action="assign_course_action.php" method="post">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Assign New Course</h5>
                                    <div style="margin-top: 10px;">
                                        <a href="assign_new_course.php"><button type="button" class="btn btn-primary">Assign New Course</button></a>&nbsp;&nbsp;&nbsp;
                                        <a href="search_assigned_course.php"><button type="button" class="btn btn-primary">Search Course</button></a>&nbsp;&nbsp;&nbsp;
                                        <a href="view_assigned_course.php?viewBy=running"><button type="button" class="btn btn-primary">All Running Course</button></a>&nbsp;&nbsp;&nbsp;
                                        <a href="view_assigned_course.php?viewBy=OldCourse"><button type="button" class="btn btn-primary">Old Course</button></a>

                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php if (!empty($_SESSION['message'])) { ?>
                                        <div class="alert alert-success alert-styled-left" style="margin: 0 10px 10px 10px;">
                                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                            <?php $objlogin->sessionMessage('message');?>
                                        </div>
                                        <?php } ?>
                                            <fieldset class="text-semibold">
                                                <legend>Course Info</legend>

                                                <div class="form-group">
                                                    <label>Course Title:</label>
                                                    <select name="course_title" data-placeholder="Select Course Title" class="select">
                                                        <option value=""></option>
                                                        <?php
                                                        $course_title = $objass->courseTitle();
                                                        foreach ($course_title as $all_course) { ?>
                                                        <option value="<?php echo $all_course['id'];?>"><?php echo $all_course['title'];?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Course_Tilte'); ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <label>Batch No:</label>
                                                    <input type="text" name="batch_no" class="form-control" placeholder="Add Batch No. (Hint. PHP-26)">
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Batch_No'); ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lead Trainer:</label>
                                                    <select name="lead_trainer" data-placeholder="Select Lead Trainer" class="select">
                                                        <option value=""></option>
                                                        <?php 
                                                        $All_lead_trainer = $objass->leadTrainer();
                                                        foreach ($All_lead_trainer as $lead_trainer) { ?>
                                                        <option><?php echo $lead_trainer['full_name'];?></option> 
                                                        <?php } ?>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Lead_Trainer'); ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <label>Assistant Trainer:</label>
                                                    <select name="assistant_trainer" data-placeholder="Select Assistant Trainer" class="select">
                                                        <option value=""></option> 
                                                        <?php 
                                                        $All_assit_trainer = $objass->assitTrainer();
                                                        foreach ($All_assit_trainer as $assit_trainer) { ?>
                                                        <option><?php echo $assit_trainer['full_name'];?></option> 
                                                        <?php } ?>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Assis_Trainer'); ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Assistant:</label>
                                                    <select name="lab_assistant" data-placeholder="Select Lab Assistant" class="select">
                                                        <option value=""></option> 
                                                        <?php 
                                                        $All_lab_assit = $objass->labAssit();
                                                        foreach ($All_lab_assit as $lab_assit) { ?>
                                                        <option><?php echo $lab_assit['full_name'];?></option> 
                                                        <?php } ?>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Lab_Assis'); ?></label>
                                                </div>

                                                <div class="form-group">
                                                    <label>Lab Id:</label>
                                                    <select name="Lab_Id" data-placeholder="Select Lab Title" class="select">
                                                        <option value=""></option> 
                                                        <?php 
                                                        $All_lab_id = $objass->labInfo();
                                                        foreach ($All_lab_id as $lab_id) { ?>
                                                        <option><?php echo $lab_id['lab_no'];?></option> 
                                                        <?php } ?>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Lab_Id'); ?></label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <div class="col-md-6">
                                            <fieldset>
                                                <legend class="text-semibold">Date and Time</legend>
                                                <div class="form-group">
                                                    <label>Start Date:</label>
                                                    <input type="text" name="start_date" class="form-control tcal" placeholder="Select Start Date">
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Start_Date'); ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ending Date:</label>
                                                    <input type="text" name="end_date" class="form-control tcal" placeholder="Select Ending Date">
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('End_Date'); ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Start Time:</label>
                                                    <input type="text" name="start_time" class="form-control" placeholder="Select Start Time">
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Start_Time'); ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ending Time:</label>
                                                    <input type="text" name="end_time" class="form-control" placeholder="Select Ending Time">
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('End_Time'); ?></label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Day:</label>
                                                    <select name="day_session" data-placeholder="Select Day" class="select">
                                                        <option value=""></option> 
                                                        <option value="sess-1">Saturday ,Monday ,Wednesday</option> 
                                                        <option value="sess-2">Sunday, Tuesday, Thursday</option>
                                                        <option value="sess-3">Friday</option>
                                                    </select>
                                                    <label class="validation-error-label"><?php $objlogin->sessionMessage('Day'); ?></label>
                                                </div>
                                                   
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /dashboard content -->


                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2016. <a href="#">BASIS Institute of Technology & Management</a> Website<a href="http://www.bitm.org.bd/" target="_blank">BITM.COM</a>
                        </div>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>
        <!-- /page container -->

    </body>
</html>
