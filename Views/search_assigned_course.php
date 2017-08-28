<?php
include '../vendor/autoload.php';

use BitmCourseApp\user\user_login\UserLogin;
use BitmCourseApp\assign_course\AssignCourse;

$objlogin = new UserLogin();
$objass = new AssignCourse();
$objlogin->checkLogin();

if (isset($_GET['var1'])) {
    if (!empty($_GET['var1'])) {
        $Alldata = $objass->search($_GET);
    } else {
        $_SESSION['msg'] = 'Please write something for search.';
    }
}
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

                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">Search Assigned Course</h5>
                                <div style="margin-top: 10px;">
                                    <a href="assign_new_course.php"><button type="button" class="btn btn-primary">Assign New Course</button></a>&nbsp;&nbsp;&nbsp;
                                    <a href="search_assigned_course.php"><button type="button" class="btn btn-primary">Search Course</button></a>&nbsp;&nbsp;&nbsp;
                                    <a href="view_assigned_course.php?viewBy=running"><button type="button" class="btn btn-primary">All Running Course</button></a>&nbsp;&nbsp;&nbsp;
                                    <a href="view_assigned_course.php?viewBy=OldCourse"><button type="button" class="btn btn-primary">Old Course</button></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <form action="" method="get">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course Title:</label>
                                        <select name="search_key" data-placeholder="Search By" class="select">
                                            <option value="course">Course</option>
                                            <option value="lab">lab</option>
                                        </select>        
                                    </div>
                                    <div class="form-group has-feedback">
                                        <input class="form-control" placeholder="Search Keyword" type="text" name="var1">
			        	
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="icon-search4 text-size-base"></i>Search</button>
			        </div>
                                </form>
                            </div>
                            <div class="panel-body">
                                <?php if (isset($Alldata) && !empty($Alldata)) { ?>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Course Title</th>
                                                <th>Batch No</th>
                                                <th>Lead Trainer</th>
                                                <th>Assistant Trainer</th>
                                                <th>Lab Assistant</th>
                                                <th>Lab ID</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Day</th>
                                                <th>Assigned By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($Alldata as $assigned_all) { ?>
<!--                                                <tr>
                                                    <td><?php
                                                        $id = $assigned_all['course_id'];
                                                        foreach ($course_title as $onetitle) {
                                                            if ($id == $onetitle['id']) {
                                                                echo $onetitle['title'];
                                                            }
                                                        }
                                                        ?></td>-->
                                                    <td></td>
                                                    <td><?php echo $assigned_all['batch_no']; ?></td>
                                                    <td><?php echo $assigned_all['lead_trainer']; ?></td>
                                                    <td><?php echo $assigned_all['asst_trainer']; ?></td>
                                                    <td><?php echo $assigned_all['lab_asst']; ?></td>
                                                    <td><?php echo $assigned_all['lab_id']; ?></td>
                                                    <td><?php echo $assigned_all['start_date'].' - '.$assigned_all['ending_date']; ?></td>
                                                    <td><?php echo $assigned_all['start_time'] . ' - ' . $assigned_all['start_time']; ?></td>
                                                    <td><?php echo $assigned_all['day']; ?></td>
                                                    <td><?php echo $assigned_all['assigned_by']; ?></td>
                                                    
                                                </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                    <h5 class="panel-title">No Data Found</h5>
                          <?php  } ?>
                                
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
