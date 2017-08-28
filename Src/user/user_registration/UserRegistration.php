<?php

namespace BitmCourseApp\user\user_registration;

use PDO;

include_once (dirname(__FILE__) . '/../../DBConnection/DBConnection.php');

class UserRegistration extends \DBConnection {

    public $id, $uid, $data, $fullname, $uname, $upass, $upass_confrm, $email, $error,
            $image, $is_active, $is_admin, $created, $deleted, $modified, $conn;

    public function prepare($data = '') {
        if (!empty($data['id'])) {
            $this->id = $data['id'];
        }
        if (!empty($data['full_name'])) {
            $this->fullname = $data['full_name'];
        }
        if (!empty($data['username'])) {
            $this->uname = $data['username'];
        }
        if (!empty($data['password'])) {
            $this->upass = $data['password'];
        }
        if (!empty($data['password-retype'])) {
            $this->upass_confrm = $data['password-retype'];
        }
        if (!empty($data['image'])) {
            $this->image = $data['image'];
        }
        if (!empty($data['email'])) {
            $this->email = $data['email'];
        }
        if (!empty($data['user_type'])) {
            $this->is_admin = $data['user_type'];
        }  else {
            $this->is_admin = 0;
        }
        if (!empty($data['uid'])) {
            $this->uid = $data['uid'];
        }
    }

    public function sessionMessage($val_sess = '') {
        if (!empty($_SESSION["$val_sess"]) && isset($_SESSION["$val_sess"])) {
            echo $_SESSION["$val_sess"];
            unset($_SESSION["$val_sess"]);
        }
    }

    function confirm() {
        if (!empty($this->fullname)) {
            if (strlen($this->fullname) >= 5 && strlen($this->fullname) <= 30) {
                $_SESSION['valu_fullname'] = $this->fullname;
            } else {
                $_SESSION['val_fullname_lenth'] = 'Full Name Must Be Within 5 to 30 Character.<br/>';
                $this->error = true;
            }
        } else {
            $_SESSION['val_fullname_req'] = 'Full Name Required.<br/>';
            $this->error = true;
        }

        if (!empty($this->uname)) {
            if (strlen($this->uname) >= 5 && strlen($this->uname) <= 12) {
                $unikeid = $this->conn->query("SELECT * FROM `users` WHERE `username`= '" . $this->uname . "' ");
                $row = $unikeid->fetch();
                if (!empty($row['username'])) {
                    if ($this->id == $row['id']) {
                        
                    }  else {
                        $_SESSION['val_username_unike'] = $this->uname . ' Already Exist. Please Try Another One.<br/>';
                        $this->error = true;
                    }
                    
                } else {
                    $_SESSION['valu_username'] = $this->uname;
                }
            } else {
                $_SESSION['val_username_lenth'] = 'Username Must Be Within 6 to 12 Character.<br/>';
                $this->error = true;
            }
        } else {
            $_SESSION['val_username_req'] = 'Username Required.<br/>';
            $this->error = true;
        }

        if (!empty($this->upass)) {
            if (strlen($this->upass) >= 6 && strlen($this->upass) <= 12) {
                if (!preg_match("#[0-9]+#", $this->upass)) {
                    $_SESSION['val_pass_case'] = 'Password Must Contain At Least 1 Number!<br/>';
                    $this->error = true;
                } elseif (!preg_match("#[A-Z]+#", $this->upass)) {
                    $_SESSION['val_pass_case'] = "Password Must Contain At Least 1 Capital Letter!";
                    $this->error = true;
                } elseif (!preg_match("#[a-z]+#", $this->upass)) {
                    $_SESSION['val_pass_case'] = "Password Must Contain At Least 1 Lowercase Letter!";
                    $this->error = true;
                } else {
                    
                }
            } else {
                $_SESSION['val_pass_lenth'] = 'Password Must Be Within 6 to 12 Character.<br/>';
                $this->error = true;
            }
        } else {
            $_SESSION['val_pass_req'] = 'Enter Password.<br/>';
            $this->error = true;
        }

        if (!empty($this->upass_confrm)) {
            if ($this->upass !== $this->upass_confrm) {
                $_SESSION['val_pass_match'] = 'Password does not Matched.<br/>';
                $this->error = true;
            }
        } else {
            $_SESSION['val_pass_retype'] = 'Retype Password.<br/>';
            $this->error = true;
        }

        if (!empty($this->email)) {
            if ($this->email <= 30) {
                if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == TRUE) {
                    $unike_email = $this->conn->query("SELECT * FROM `users` WHERE `email`= '" . $this->email . "' ");
                    $row = $unike_email->fetch();
                    if (!empty($row['email'])) {
                        if ($this->id == $row['id']) {
                            echo 'ok.';                        
                        }  else {
                        $_SESSION['val_email_unike'] = $this->email . ' Already Used. Please Try Another Email.<br/>';
                        $this->error = true;
                        }
                    } else {
                        $_SESSION['valu_email'] = $this->email;
                    }
                } else {
                    $_SESSION['val_email_valid'] = 'Email Address is not valid.<br/>';
                    $this->error = true;
                }
            }  else {
                $_SESSION['val_email_valid'] = 'Email Address Must be Under 30 Carecter.<br/>';
                $this->error = true;
            }
        } else {
            $_SESSION['val_email_req'] = 'Email Address Required.<br/>';
            $this->error = true;
        }
    }
    
    public function imageUpload() {
        if (empty($this->image)) {
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
                $this->image = time() . '_' . $_FILES['image']['name'];
                $files_type = $_FILES['image']['type'];
                $files_tmp_name = $_FILES['image']['tmp_name'];
                $files_size = $_FILES['image']['size'];
                $files_extension = strtolower(end(explode('.', $this->image)));

                $req_extension = array('jpg', 'jpeg', 'png', 'gif');
                $error = '';
                if (in_array($files_extension, $req_extension) === FALSE) {
                    $_SESSION['err_files_ext'] = 'jpg, jpeg, png, gif required.';
                    $error = TRUE;
                }

                if ($files_size > 2097152) {
                    $_SESSION['err_files_size'] = 'File Size Must Be Under 2 MB.';
                    $error = TRUE;
                }

                if (empty($error)) {
                    move_uploaded_file($files_tmp_name, 'elements/user_images/' . $this->image);
                }
            } else {
                $_SESSION['req_image'] = 'Select Your Profile Image.';
                $this->error = TRUE;
            }
        } else {
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
                $this->image = time() . '_' . $_FILES['image']['name'];
                $files_type = $_FILES['image']['type'];
                $files_tmp_name = $_FILES['image']['tmp_name'];
                $files_size = $_FILES['image']['size'];
                $files_extension = strtolower(end(explode('.', $this->image)));

                $req_extension = array('jpg', 'jpeg', 'png', 'gif');
                $error = '';
                if (in_array($files_extension, $req_extension) === FALSE) {
                    $_SESSION['err_files_ext'] = 'jpg, jpeg, png, gif required.';
                    $error = TRUE;
                }

                if ($files_size > 2097152) {
                    $_SESSION['err_files_size'] = 'File Size Must Be Under 2 MB.';
                    $error = TRUE;
                }

                if (empty($error)) {
                    move_uploaded_file($files_tmp_name, 'elements/user_images/' . $this->image);
                } else {
                    $this->error = TRUE;
                }
            }
        }
    }

    public function addUser() {
        if ($this->error == FALSE) {
            try {
                $this->uid = uniqid();
                $query = "INSERT INTO `users` (`id`, `unique_id`, `full_name`, `username`, `email`, `password`, `image`, `is_active`, `is_admin`, `is_delete`, `created`, `updated`, `deleted`) VALUES (NULL, :uid , :fullname, :uname , :mail , :upass , :image, :iactive, :iadmin, :deleted, :created , :updated , :deleted )";
                $stmt = $this->conn->prepare($query);
                $stmt->execute(array(
                    ':id' => null,
                    ':uid' => $this->uid,
                    ':fullname' => $this->fullname,
                    ':uname' => $this->uname,
                    ':mail' => $this->email,
                    ':upass' => $this->upass,
                    ':image' => $this->image,
                    ':iactive' => '0', //$this->is_active, 
                    ':iadmin' => $this->is_admin,
                    ':deleted' => '0', //$this->deleted
                    ':created' => date("Y-m-d h:i:s"),
                    ':updated' => '',
                    ':deleted' => '',
                ));

                $_SESSION['message'] = "New User Added Successfully.";
                header('location:add_user.php');
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        } else {
            header('location:add_user.php');
        }
    }
    
    public function updateUser() {
        if ($this->error == FALSE) {
            try {
                $query = "UPDATE `users` SET `full_name` = :fullname , `username` = :username , `email` = :mail , `image` = :image , `is_active` = :iactive , `is_admin` = :iadmin , `updated` = :updated WHERE `users`.`id` = $this->id";
                $stmt = $this->conn->prepare($query);
                $stmt->execute(array(
                    ':fullname' => $this->fullname,
                    ':username' => $this->uname,
                    ':mail' => $this->email,
                    ':image' => $this->image,
                    ':iactive' => '0', //$this->is_active, 
                    ':iadmin' => $this->is_admin,//$this->is_admin,
                    ':updated' => date("Y-m-d h:i:s"),
                ));

                $_SESSION['message'] = "User Data Updated Successfully.";
                header("location:user_edit.php?id=$this->id");
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        } else {
            header("location:user_edit.php?id=$this->id");
        }
    }

}
