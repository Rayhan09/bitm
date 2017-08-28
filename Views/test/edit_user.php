<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();
$objlogin->checkLogin();
$objlogin->prepare($_GET);
$user_data = $objlogin->viewUser();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $_SESSION['login_confirm']['username'];?> | Dashboard</title>
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
<h3>Welcome <?php echo $_SESSION['login_confirm']['username'];?></h3>
<p>You are logged in.</p>

<h4>Edit User user</h4>
<?php $objlogin->sessionMessage('message');?>
<form method="post" action="user_update.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td><label>User Image :</label></td>
            <td>
                <img src="elements/user_images/<?php echo $user_data['image'];?>" width="150"/><br/>
                <input type="file" name="image"/>
            </td>
            <td class="red">
                <?php $objlogin->sessionMessage('err_files_ext');?><br/>
                <?php $objlogin->sessionMessage('err_files_size');?><br/>
                <?php $objlogin->sessionMessage('req_image');?>
            </td>
        </tr>
        <tr>
            <td><label>Full Name : </label></td>
            <td><input type="text" name="full_name" value="<?php
                    if (empty($user_data['full_name'])) {
                        $objlogin->sessionMessage('valu_fullname');
                    } else {
                        echo $user_data['full_name'];
                    }
                    ?>"/></td>
            <td><?php $objlogin->sessionMessage('val_fullname_lenth');$objlogin->sessionMessage('val_fullname_req');?></td>
        </tr>
        <tr>
            <td><label>Password :</label></td>
            <td><input type="password" name="password"/></td>
            <td><?php $objlogin->sessionMessage('val_pass_lenth');$objlogin->sessionMessage('val_pass_req');$objlogin->sessionMessage('val_pass_case');?></td>
        </tr>
        <tr>
            <td><label>Retype Password :</label></td>
            <td><input type="password" name="password-retype"/></td>
            <td><?php $objlogin->sessionMessage('val_pass_match');$objlogin->sessionMessage('val_pass_retype');?></td>
        </tr>
        <tr>
            <td><label>Email :</label></td>
            <td><input type="text" name="email" value="<?php $objlogin->sessionMessage('valu_email');?>"/></td>
            <td><?php $objlogin->sessionMessage('val_email_valid');$objlogin->sessionMessage('val_email_req');$objlogin->sessionMessage('val_email_unike');?></td>
        </tr>
        <tr>
            <td><label>User Type :</label></td>
            <td>
                <input type="radio" name="user_type" value="" checked /> <label>Editor</label>
                <input type="radio" name="user_type" value="1"/> <label>Admin</label>
            </td>
            <td><?php $objlogin->sessionMessage('val_email_valid');$objlogin->sessionMessage('val_email_req');$objlogin->sessionMessage('val_email_unike');?></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="image" value="<?php echo $user_data['image'];?>"/>
                <input type="hidden" name="id" value="<?php echo $user_data['id'];?>"/>
                <input type="submit" value="Confirm"/> 
                <input type="reset"/></td>
            <td></td>
        </tr>
    </table>
</form>

</html>
