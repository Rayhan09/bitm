<?php
include '../vendor/autoload.php';
use BitmCourseApp\user\user_login\UserLogin;
$objlogin = new UserLogin();
$objlogin->checkLogin();
$user_data = $objlogin->userData();
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

<h4>View All Users</h4>
<form method="post" action="register_action.php" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Name</th>
            <th>User ID</th>
            <th>Email</th>
            <th>User Type</th>
            <th>Created</th>
            <th>Updated</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach ($user_data as $all_user) { ?>
        <tr>
            <td><?php echo $all_user['full_name'];?></td>
            <td><?php echo $all_user['username'];?></td>
            <td><?php echo $all_user['email'];?></td>
            <td><?php echo $all_user['is_admin'];?></td>
            <td><?php echo $all_user['created'];?></td>
            <td><?php echo $all_user['updated'];?></td>
            <td><a href="user_details.php?id=<?php echo $all_user['id'];?>">Details</a></td>
            <td><a href="edit_user.php?id=<?php echo $all_user['id'];?>">Edit</a></td>
            <td><a href="<?php echo $all_user['id'];?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</form>

</html>
