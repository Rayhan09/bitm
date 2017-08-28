<?php

namespace BitmCourseApp\assign_course;

use PDO;

include_once (dirname(__FILE__) . '/../DBConnection/DBConnection.php');

class AssignCourse extends \DBConnection {

    public $id = '';
    public $coursetitle = '';
    public $batchno = '';
    public $leadtrai = '';
    public $assistrai = '';
    public $labassis = '';
    public $labid = '';
    public $startdate = '';
    public $enddate = '';
    public $starttime = '';
    public $endtime = '';
    public $day = '';
    public $data = '';
    public $data1 = '';
    public $data2 = '';
    public $data3 = '';
    public $data4 = '';
    public $data5 = '';
    public $viewby = '';
    public $action = '';
    public $error;

    public function prepare($data = '') {

        if (!empty($data['id'])) {
            $this->id = $data['id'];
        }

        if (!empty($data['course_title'])) {
            $this->coursetitle = $data['course_title'];
        }

        if (!empty($data['batch_no'])) {
            $this->batchno = $data['batch_no'];
        }

        if (!empty($data['lead_trainer'])) {
            $this->leadtrai = $data['lead_trainer'];
        }

        if (!empty($data['assistant_trainer'])) {
            $this->assistrai = $data['assistant_trainer'];
        }

        if (!empty($data['lab_assistant'])) {
            $this->labassis = $data['lab_assistant'];
        }

        if (!empty($data['Lab_Id'])) {
            $this->labid = $data['Lab_Id'];
        }

        if (!empty($data['start_date'])) {
            $this->startdate = $data['start_date'];
        }

        if (!empty($data['end_date'])) {
            $this->enddate = $data['end_date'];
        }

        if (!empty($data['start_time'])) {
            $this->starttime = $data['start_time'];
        }

        if (!empty($data['end_time'])) {
            $this->endtime = $data['end_time'];
        }

        if (!empty($data['day_session'])) {
            $this->day = $data['day_session'];
        }

        if (!empty($data['viewBy'])) {
            $this->viewby = $data['viewBy'];
        }
        
        if (!empty($data['action'])) {
            $this->action = $data['action'];
        }

        return $this;
    }

    public function assignCourseValidation() {
        $required = array(
            'Course_Tilte' => $this->coursetitle,
            'Batch_No' => $this->batchno,
            'Lead_Trainer' => $this->leadtrai,
            'Assis_Trainer' => $this->assistrai,
            'Lab_Assis' => $this->assistrai,
            'Lab_Id' => $this->labid,
            'Start_Date' => $this->startdate,
            'End_Date' => $this->enddate,
            'Start_Time' => $this->starttime,
            'End_Time' => $this->endtime,
            'Day' => $this->day
        );

        foreach ($required as $key => $field) {
            if (empty($field)) {
                $_SESSION["$key"] = 'Required';
                $this->error = TRUE;
            }
        }
    }

    public function store() {
        if ($this->error == FALSE) {
            try {
                $query = "INSERT INTO `course_trainer_lab_mapping` (`id`, `course_id`, `batch_no`, `lead_trainer`, `asst_trainer`, `lab_asst`, `lab_id`, `start_date`, `ending_date`, `start_time`, `ending_time`, `day`, `is_running`, `assigned_by`, `created`, `updated`, `deleted`) VALUES ('', :courseid , :batchno, :leadtrainer , :assttrainer , :labasst , :labid , :startdate , :endingdate , :starttime , :endtime , :day , :isrunning , :assignby , :created , '', '')";
                $stmt = $this->conn->prepare($query);
                $stmt->execute(array(
                    ':courseid' => $this->coursetitle,
                    ':batchno' => $this->batchno,
                    ':leadtrainer' => $this->leadtrai,
                    ':assttrainer' => $this->assistrai,
                    ':labasst' => $this->labassis,
                    ':labid' => $this->labid,
                    ':startdate' => $this->startdate,
                    ':endingdate' => $this->enddate,
                    ':starttime' => $this->starttime,
                    ':endtime' => $this->endtime,
                    ':day' => $this->day,
                    ':isrunning' => 1,
                    ':assignby' => $_SESSION['login_confirm']['username'],
                    ':created' => date("Y-m-d h:i:s"),
                ));

                $_SESSION['message'] = "New Course Assigned Successfully.";
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
        header('location:assign_new_course.php');
    }

    public function viewAssignedCourse() {
        try {
            if ($this->viewby == 'running') {
                $vq = "SELECT * FROM `course_trainer_lab_mapping` WHERE is_running=1 ";
            } else {
                $vq = "SELECT * FROM `course_trainer_lab_mapping` WHERE is_running=0 ";
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

    public function showAssignedCourse() {
        try {
            $query = $this->conn->query("SELECT * FROM course_trainer_lab_mapping WHERE id='$this->id' ");
            $row = $query->fetch();
            return $row;
        } catch (Exception $ex) {
            
        }
        return $row;
    }

    public function courseTitle() {
        try {
            $vq = "SELECT * FROM `courses` ";
            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data1[] = $row;
            }
            return $this->data1;
        } catch (Exception $ex) {
            
        }
    }

    public function leadTrainer() {
        try {
            $vq = "SELECT * FROM `trainers` WHERE `trainer_status` = 'lead_trainer' ";
            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data2[] = $row;
            }
            return $this->data2;
        } catch (Exception $ex) {
            
        }
    }

    public function assitTrainer() {
        try {
            $vq = "SELECT * FROM `trainers` WHERE `trainer_status` = 'assist_trainer' ";
            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data3[] = $row;
            }
            return $this->data3;
        } catch (Exception $ex) {
            
        }
    }

    public function labAssit() {
        try {
            $vq = "SELECT * FROM `trainers` WHERE `trainer_status` = 'lab_assist' ";
            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data4[] = $row;
            }
            return $this->data4;
        } catch (Exception $ex) {
            
        }
    }

    public function labInfo() {
        try {
            $vq = "SELECT * FROM `labinfo` ";
            $view_query = $this->conn->prepare($vq);
            $view_query->execute();
            while ($row = $view_query->fetch(PDO::FETCH_ASSOC)) {
                $this->data5[] = $row;
            }
            return $this->data5;
        } catch (Exception $ex) {
            
        }
    }
    
    public function search($search = "")
     {  //print_r($search);
        //die();
        if ($search['search_key'] == 'course' && !empty($search['var1'])) {
            $keywords = $search['var1'];
        //print_r($keywords);
        //die();
        $keywords = preg_split('/[\s]+/', $keywords);
          $totalKeywords = count($keywords);
          $query = "SELECT * FROM courses LEFT JOIN course_trainer_lab_mapping on courses.id = course_trainer_lab_mapping.course_id LEFT JOIN labinfo on courses.id = labinfo.course_id WHERE courses.title LIKE ?";

          for($i=1 ; $i < $totalKeywords; $i++){
            $query .= " AND title LIKE ? ";
          }

          $sql=$this->conn->prepare($query);
          foreach($keywords as $key => $keyword){
            $search = '%'.$keyword.'%';
            $sql->bindParam($key+1, $search);
          }
          $sql->execute ();
          if ($sql->rowCount() > 0) {
                while ($result=$sql->fetch(PDO::FETCH_ASSOC)) {
                //echo"<pre>".print_r($result,true)."</pre>";
                    $this->data[] = $result;
            }
            } else {
                $_SESSION['msg'] = 'There was nothing to show. Please search with right keyword.';
            }
            //return $this->data;
        } 
        elseif ($search['search_key'] == 'lab' && !empty($search['var1'])) {
            $keywords = $search['var1'];
        //print_r($keywords);
        //die();
        $keywords = preg_split('/[\s]+/', $keywords);
          $totalKeywords = count($keywords);
          $query = "SELECT * FROM labinfo LEFT JOIN course_trainer_lab_mapping on labinfo.id = course_trainer_lab_mapping.lab_id LEFT JOIN courses on course_trainer_lab_mapping.course_id = courses.id WHERE labinfo.lab_no LIKE ?";

          for($i=1 ; $i < $totalKeywords; $i++){
            $query .= " AND lab_no LIKE ? ";
          }

          $sql=$this->conn->prepare($query);
          foreach($keywords as $key => $keyword){
            $search = '%'.$keyword.'%';
            $sql->bindParam($key+1, $search);
          }
          $sql->execute ();
          if ($sql->rowCount() > 0) {
                while ($result=$sql->fetch(PDO::FETCH_ASSOC)) {
                //echo"<pre>".print_r($result,true)."</pre>";
                    $this->data[] = $result;
            }
            } else {
                $_SESSION['msg'] = 'There was nothing to show. Please search with right keyword.';
            }
        }
        else {
            echo "Please search with right keyword";
        }
        return $this->data;
        
    }

    public function deleteAssigned() {

        try {
            if ($this->action == 'restore') {
            $query = "UPDATE `course_trainer_lab_mapping` SET `is_running` = '1', `deleted` = :date WHERE `course_trainer_lab_mapping`.`id` = $this->id";
            } else {
            $query = "UPDATE `course_trainer_lab_mapping` SET `is_running` = '0', `deleted` = :date WHERE `course_trainer_lab_mapping`.`id` = $this->id";
            }
            $stmt = $this->conn->prepare($query);
            $stmt->execute(array(
                    ':date'=> date("Y-m-d h:i:s")
                    ));
            header("location:view_assigned_course.php?viewBy=$this->viewby");
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
