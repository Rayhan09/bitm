<?php

class DBConnection {
    public function __construct() {
        if (empty(session_id())) {
            session_start();
        }
        try {
	    $this->conn = new PDO('mysql:host=localhost;dbname=bitm_course', 'root', '');
	    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
    }
}
?>