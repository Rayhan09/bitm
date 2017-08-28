<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();
$objlogin->checkLogin();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION['login_confirm']['username'];?> | Dashboard</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="header">
        <div class="container">
            <span>
                <a href="dashboard.php">BITM Course Manager</a>
            </span>
            <span style="float: right;">Logged in As <a href="profile.php"><b><?php echo $_SESSION['login_confirm']['username']; ?></b></a> 
                <a href="settings.php">Account Settings</a>
                <a href="logout.php">Logout</a></span>
        </div>
    </div>
    <div class="container">
        <div class="side-left">
            <nav>
                <ul>
                    <a href="dashboard.php" class="nav-a-selected"><li>Dashboard</li></a>
                    <a href="user_manager.php"><li>User Menu</li></a>
                    <a href="#"><li>Team</li></a>
                    <a href="#"><li>Course</li></a>
                    <a href="#"><li>Software Management</li></a>
                    <a href="#"><li>Assign Course</li></a>
                </ul>
            </nav>
        </div>
        <div class="side-right">
            <h3>Welcome <?php echo $_SESSION['login_confirm']['username']; ?></h3>
        <p>You are logged in.</p>
        
        </div>
    </div>
</body>
</html>
