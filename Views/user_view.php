<?php
include '../vendor/autoload.php';

use BitmCourseApp\user\user_login\UserLogin;

$objlogin = new UserLogin();
$objlogin->checkLogin();
$objlogin->prepare($_GET);
$all_user_data = $objlogin->userData();
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
                                    <li  class="active"><a href="user_manager.php"><i class="icon-user"></i> <span>User Menu</span></a></li>
                                    <li><a href="#"><i class="icon-people"></i> <span>Trainer</span></a></li>
                                    <li><a href="#"><i class="icon-book"></i> <span>Course</span></a></li>
                                    <li><a href="#"><i class="icon-laptop"></i> <span>Software Management</span></a></li>
                                    <li><a href="assign_course.php"><i class="icon-list-unordered"></i> <span>Assign Course</span></a></li>
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
                                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - User Menu</h4>
                            </div>
                        </div>

                        <div class="breadcrumb-line">
                            <ul class="breadcrumb">
                                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                                <li class="active">View User</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">
                        <!-- Dashboard content -->
                        
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">View User</h5>
                                </div>
                                <div class="panel-body">
                                        <a href="add_user.php"><button type="button" class="btn btn-primary">Add New User</button></a>&nbsp;&nbsp;&nbsp;
                                        <a href="user_view.php?viewBy=active"><button type="button" class="btn btn-primary">View User</button></a>&nbsp;&nbsp;&nbsp;
                                        <a href="user_view.php?viewBy=deleted"><button type="button" class="btn btn-primary">Deleted</button></a>
                                </div>
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                    <?php 
                                    if (isset($_GET['viewBy']) && $_GET['viewBy']=='active') { 
                                        echo 'All User';
                                    }  else {
                                        echo 'Deleted User';
                                    }
                                    ?>
                                    </h5>
                                </div>
                                <?php if (isset($all_user_data) && !empty($all_user_data)) { ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>User Photo</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Email</th>
                                                <th>User Type</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($all_user_data as $user_data) { ?>
                                            <tr>
                                                <td><img src="elements/user_images/<?php echo $user_data['image'];?>" width="150"></td>
                                                <td><?php echo $user_data['full_name'];?></td>
                                                <td><?php echo $user_data['username'];?></td>
                                                <td><button onclick="this.innerHTML='<?php echo $user_data['password'];?>'">Show Password</button></td>
                                                <td><?php echo $user_data['email'];?></td>
                                                <td><?php if ($user_data['is_admin'] ==1) { echo 'Admin';} else {echo 'User';}?></td>
                                                <td>
                                                    <ul class="icons-list">
                                                        <?php 
                                                        if (isset($_GET['viewBy']) && $_GET['viewBy']=='active') { ?>
                                                        <li><a href="user_view_single.php?id=<?php echo $user_data['id'];?>"><i class="icon-folder-open"></i></a></li>
                                                        <li><a href="user_edit.php?id=<?php echo $user_data['id'];?>"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="delete_user.php?viewBy=<?php echo $_GET['viewBy'];?>&id=<?php echo $user_data['id'];?>" onclick="return confirm('Delete Confirmation');" ><i class="icon-trash" title="Remove"></i></a></li>
                                                        <?php }
                                                        else { ?>
                                                        <li><a href="user_view_single.php?id=<?php echo $user_data['id'];?>"><i class="icon-folder-open"></i></a></li>
                                                        <li><a href="delete_user.php?action=restore&viewBy=active&id=<?php echo $user_data['id'];?>"><i class="icon-reset" title="Remove"></i></a></li>
                                                        <?php    } ?>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                    <h5 class="panel-title">No Data Available</h5>
                          <?php  } ?>
                            </div>
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
