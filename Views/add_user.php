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

        <script type="text/javascript" src="assets/js/core/app.js"></script>
        <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
        <!-- /theme JS files -->

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
                                    <li class="active"><a href="user_manager.php"><i class="icon-user"></i> <span>User Menu</span></a></li>
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
                                <li class="active">User Menu</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /page header -->
                    <!-- Content area -->
                    <div class="content">
                        <!-- Dashboard content -->
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Latest posts -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Add New User</h6>
                                        <div class="heading-elements">
                                        </div>

                                    </div>

                                    <div class="panel-body">

                                        <a href="user_view.php?viewBy=active"><button type="button" class="btn btn-primary">View User</button></a>
                                    </div>
                                    <?php if (!empty($_SESSION['message'])) { ?>
                                        <div class="alert alert-success alert-styled-left" style="margin: 0 10px 10px 10px;">
                                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                            <?php $objlogin->sessionMessage('message');?>
                                        </div>
                                    <?php } ?>
                                    <form method="post" action="register_action.php" enctype="multipart/form-data">
                                        <div class="panel registration-form">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <img src="elements/user_images/nobody.jpg" width="150" style="float: right;"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Select User Photo</label>
                                                    <div>
                                                        <input type="file" name="image" class="form-control">
                                                        <label class="validation-error-label"><?php $objlogin->sessionMessage('err_files_ext'); ?><?php $objlogin->sessionMessage('err_files_size'); ?><?php $objlogin->sessionMessage('req_image'); ?></label>
                                                    </div>
                                                </div>

                                                <div class="form-group has-feedback">
                                                    <input type="text" class="form-control" name="username" placeholder="Choose username" value="<?php $objlogin->sessionMessage('valu_username'); ?>">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-plus text-muted"></i>
                                                    </div>
                                                    <label class="validation-error-label"><?php
                                                        $objlogin->sessionMessage('val_username_unike');
                                                        $objlogin->sessionMessage('val_username_lenth');
                                                        $objlogin->sessionMessage('val_username_req');
                                                        ?></label>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" name="full_name" class="form-control" value="<?php $objlogin->sessionMessage('valu_fullname'); ?>" placeholder="Full name">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-check text-muted"></i>
                                                            </div>
                                                            <label class="validation-error-label"><?php $objlogin->sessionMessage('val_fullname_lenth');
                                                        $objlogin->sessionMessage('val_fullname_req'); ?></label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" name="email" class="form-control" value="<?php $objlogin->sessionMessage('valu_email'); ?>" placeholder="Your email">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                            <label class="validation-error-label"><?php $objlogin->sessionMessage('val_email_valid');
                                                        $objlogin->sessionMessage('val_email_req');
                                                        $objlogin->sessionMessage('val_email_unike'); ?></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="password" name="password" class="form-control" placeholder="Create password">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                            <label class="validation-error-label"><?php
                                                        $objlogin->sessionMessage('val_pass_lenth');
                                                        $objlogin->sessionMessage('val_pass_req');
                                                        $objlogin->sessionMessage('val_pass_case');
                                                        ?></label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="password" name="password-retype" class="form-control" placeholder="Repeat password">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                            <label class="validation-error-label"><?php $objlogin->sessionMessage('val_pass_match');
                                                        $objlogin->sessionMessage('val_pass_retype');
                                                        ?></label>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6"></div>

                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <label style="margin-right: 20px;"><b>Select User Type : </b></label>
                                                            <label><input type="radio" name="user_type" value=""  /> User </label> &nbsp;&nbsp;
                                                            <label><input type="radio" name="user_type" value="1" checked/>  Admin </label>
                                                            <label class="validation-error-label"><?php $objlogin->sessionMessage('val_pass_match');
                                                        $objlogin->sessionMessage('val_pass_retype');
                                                        ?></label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /latest posts -->
                            </div>
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