<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();
if (!empty($_SESSION['login_confirm'])) {
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>BITM Course Management</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="header">
        <div class="container">
            <span>
                <a href="dashboard.php">BITM Course Manager</a>
            </span>
        </div>
    </div>
    <div class="container">
        <div class="login-container">
        <h3>Admin Login</h3>
        <?php
        $objlogin->sessionMessage('confirm');
        ?>
        <form method="post" action="login_action.php">
            <input type="text" name="username" placeholder="Username"/><br/><br/>
            <input type="password" name="password" placeholder="Password"/><br/>
            <input type="submit" value="Login"/>
        </form>
        </div>
    </div>
</body>
</html>
