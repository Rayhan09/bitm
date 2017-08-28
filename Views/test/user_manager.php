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
                    <a href="dashboard.php"><li>Dashboard</li></a>
                    <a href="user_manager.php" class="nav-a-selected"><li>User Menu</li></a>
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
        <a href="users.php">View Users</a></p>
        <h4>Add new user</h4>
        <?php $objlogin->sessionMessage('message'); ?>
        <form method="post" action="register_action.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>User Image :</label></td>
                    <td>
                        <img src="elements/user_images/nobody.jpg" width="150"/><br/>
                        <input type="file" name="image"/>
                    </td>
                    <td class="red">
                        <?php $objlogin->sessionMessage('err_files_ext'); ?><br/>
                        <?php $objlogin->sessionMessage('err_files_size'); ?><br/>
                        <?php $objlogin->sessionMessage('req_image'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Full Name : </label></td>
                    <td><input type="text" name="full_name" value="<?php $objlogin->sessionMessage('valu_fullname'); ?>"/></td>
                    <td><?php $objlogin->sessionMessage('val_fullname_lenth');
                        $objlogin->sessionMessage('val_fullname_req'); ?></td>
                </tr>
                <tr>
                    <td><label>Username : </label></td>
                    <td><input type="text" name="username" value="<?php $objlogin->sessionMessage('valu_username'); ?>"/></td>
                    <td><?php $objlogin->sessionMessage('val_username_unike');
                        $objlogin->sessionMessage('val_username_lenth');
                        $objlogin->sessionMessage('val_username_req'); ?></td>
                </tr>
                <tr>
                    <td><label>Password :</label></td>
                    <td><input type="password" name="password"/></td>
                    <td><?php $objlogin->sessionMessage('val_pass_lenth');
                        $objlogin->sessionMessage('val_pass_req');
                        $objlogin->sessionMessage('val_pass_case'); ?></td>
                </tr>
                <tr>
                    <td><label>Retype Password :</label></td>
                    <td><input type="password" name="password-retype"/></td>
                    <td><?php $objlogin->sessionMessage('val_pass_match');
                        $objlogin->sessionMessage('val_pass_retype'); ?></td>
                </tr>
                <tr>
                    <td><label>Email :</label></td>
                    <td><input type="text" name="email" value="<?php $objlogin->sessionMessage('valu_email'); ?>"/></td>
                    <td><?php $objlogin->sessionMessage('val_email_valid');
                        $objlogin->sessionMessage('val_email_req');
                        $objlogin->sessionMessage('val_email_unike'); ?></td>
                </tr>
                <tr>
                    <td><label>User Type :</label></td>
                    <td>
                        <input type="radio" name="user_type" value="" checked /> <label>Editor</label>
                        <input type="radio" name="user_type" value="1"/> <label>Admin</label>
                    </td>
                    <td><?php $objlogin->sessionMessage('val_email_valid');
                        $objlogin->sessionMessage('val_email_req');
                        $objlogin->sessionMessage('val_email_unike'); ?></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Confirm"/> <input type="reset"/></td>
                    <td></td>
                </tr>
            </table>
        </form>
        </div>
        
    </div>
</body>
</html>
