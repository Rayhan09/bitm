<?php
include '../vendor/autoload.php';

use BitmCourseApp\user\user_login\UserLogin;

$objlogin = new UserLogin();
$objlogin->checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BITM Course Manager</title>

        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" >
        <link  rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

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
        <!-- /theme JS files -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

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
                                    <li><a href="assign_course.php"><i class="icon-list-unordered"></i> <span>Assign Course</span></a></li>
                                    <li class="active"><a href="about_project.php"><i class="icon-primitive-square"></i> <span>About Project</span></a></li>
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
                                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - About Project</h4>
                            </div>
                        </div>

                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                                <li class="active">About Project</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">
                        <!-- Dashboard content -->
                            <div class="panel panel-body">                           
                            <h3>What Used For This Project</h3>
                                <ul class="list-group list-group-item">
                                    <li class="list-group-item"><b>Programming Language:</b> PHP, HTML, CSS</li>
                                    <li class="list-group-item"><b>Framework:</b> Bootstrap</li>
                                    <li class="list-group-item"><b>Database:</b> MySQL</li>
                                    <li class="list-group-item"><b>Database Connection:</b> PDO</li>
                                    <li class="list-group-item"><b>Other Solution:</b> Composer</li>
                                    <li class="list-group-item"><b>Theme:</b> Limitless</li>
                            </ul>
                            </div>

                            <div class="panel panel-body">                           
                                <h2 class="sub-header">Group 3 Members</h2>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>                                                
                                                <th>SEIP ID</th>
                                                <th>NAME</th> 
                                                <th>EMAIL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>126369</td>
                                                <td>Tonmoy Das</td>
                                                <td>tonmoy1a@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>124026</td>
                                                <td>Nawsad Kamrul</td>
                                                <td>nowsad@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>131107</td>
                                                <td>Sadia Noshin Shuchi</td>
                                                <td>sadianoshin10@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>131304</td>
                                                <td>Md. Rayhan Khan</td>
                                                <td>rayhansh1@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>126563</td>
                                                <td>Shuprio Sarker</td>
                                                <td>shuprio.jps@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>127173</td>
                                                <td>Mohammad Iqbal Hossain</td>  
                                                <td>hossainiqbal53@gmail.com</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- /dashboard content -->


                        <!-- Footer -->
                        <div class="footer text-muted">
                            
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
