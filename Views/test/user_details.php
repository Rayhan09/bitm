<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();
$objlogin->checkLogin();
$objlogin->prepare($_GET);
$user_data = $objlogin->viewUser();
if ($_SESSION['login_confirm']['is_admin']==1) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION['login_confirm']['username'];?> | Manage User</title>
<style>
    th {background: #dcdcdc;
        padding: 2px 10px;
    }
    td {background: #e9e9e9;
        padding: 2px 10px;
    }
</style>
</head>
<body>
    <span>
        <a href="dashboard.php">Dashboard</a> 
        <a href="profile.php">Profile</a>
        <a href="edit.php">Edit Profile</a>
        <?php if ($_SESSION['login_confirm']['is_admin']==1) { ?><a href="user_manage.php">Manage User</a><?php } ?>
    </span>
    <span style="float: right;">Logged in As <a href="profile.php"><b><?php echo $_SESSION['login_confirm']['username'];?></b></a>
        <a href="settings.php">Account Settings</a>
        <a href="logout.php">Logout</a></span>
    <hr/>
    <a href="user_manage.php">View ALL</a> <a href="user_manage.php?view_by=deleted">View Deleted</a>
    <table align="center">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Activation</th>
            <th>User Type</th>
            <th>Sign Up Date</th>
            <th>Modification Up Date</th>
            <th colspan="3">Action</th>
        </tr>
        <tr>
            <td><?php echo $user_data['username'];?></td>
            <td><?php echo $user_data['email'];?></td>
        </tr>
    </table>
</body>
</html>
<?php } else {
     header('location:dashboard.php');
} ?>
