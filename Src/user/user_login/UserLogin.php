<?php

namespace BitmCourseApp\user\user_login;
use PDO;
include_once (dirname(__FILE__) .'/../../DBConnection/DBConnection.php');

class UserLogin extends \DBConnection {

    public $id, $uid, $uname, $upass, $data, $viewBy, $action, $error, $conn;

    public function prepare($data = '') {
        if (!empty($data['id'])) {
            $this->id = $data['id'];
        }
        if (!empty($data['username'])) {
            $this->uname = $data['username'];
        }
        if (!empty($data['password'])) {
            $this->upass = $data['password'];
        }
        if (!empty($data['uid'])) {
            $this->uid = $data['uid'];
        }
        if (!empty($data['viewBy'])) {
            $this->viewBy = $data['viewBy'];
        }
        if (!empty($data['action'])) {
            $this->action = $data['action'];
        }
    }
    
    public function sessionMessage($val_sess = '') {
        if (!empty($_SESSION["$val_sess"]) && isset($_SESSION["$val_sess"])) {
            echo $_SESSION["$val_sess"];
            unset($_SESSION["$val_sess"]);
        }
    }

    public function loginConfirm() {
        $query = $this->conn->query("SELECT * FROM users WHERE username='$this->uname' AND password='$this->upass' ");
        $row = $query->fetch();
        if (!empty($row['username'])) {
            if ($row['is_delete'] == 0) {
                $_SESSION['login_confirm'] = $row;
                header('location:dashboard.php');
            } else {
                $_SESSION['confirm'] = 'Your Accound Suspended.';
                header('location:index.php');
            }
        } else {
            $_SESSION['confirm'] = 'Username and Password does not Match.';
            header('location:index.php');
        }
    }

    public function checkLogin() {
        if (empty($_SESSION['login_confirm'])) {
            header('location:index.php');
        }
    }

    public function userData() {
        try {
            if ($this->viewBy == 'active') {
                $vq = "SELECT * FROM `users` WHERE is_delete=0 ";
            } else {
                $vq = "SELECT * FROM `users` WHERE is_delete=1 ";
            }

            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data[] = $row;
            }
            return $this->data;
        } catch (Exception $ex) {
            
        }
    }
    
    public function viewUser() {
        $query = $this->conn->query("SELECT * FROM users WHERE id='$this->id' ");
        $row = $query->fetch();
        return $row;
    }
    
    public function deleteUser() {
        try {
            if ($this->action == 'restore') {
            $query = "UPDATE `users` SET `is_delete` = '0', `deleted` = :date WHERE `users`.`id` = $this->id;";
            } else {
            $query = "UPDATE `users` SET `is_delete` = '1', `deleted` = :date WHERE `users`.`id` = $this->id;";
            }
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                    ':date'=> date("Y-m-d h:i:s")
                    ));
            header("location:user_view.php?viewBy=$this->viewBy");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}

?>