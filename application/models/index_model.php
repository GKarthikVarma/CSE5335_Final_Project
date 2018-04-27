<?php
  class index_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function login($uid, $password) {
      $query=$this->db->query("SELECT * FROM students WHERE user_uid='$uid' OR user_email='$uid';");
      if($query->num_rows() < 1) {
      		$query = $this->db->query("SELECT * FROM recruiter WHERE rec_uname='$uid' OR rec_email='$uid';");
      		if ($query->num_rows() < 1) {
      			return array();
      		} else {
            $row=$query->row_array();
      			$hashedpwdcheck = password_verify($password, $row['rec_pass']);
      			if ($hashedpwdcheck == false){
              return array();
    				} elseif ($hashedpwdcheck == true) {
              $row['u_type']="recruiter";
              return $query->row_array();
            }
      	  }
    	} else {
        $row=$query->row_array();
    		$hashedpwdcheck = password_verify($password, $row['user_pwd']);
    		if ($hashedpwdcheck == false){
    			return array();
    		} elseif ($hashedpwdcheck == true) {
    			// Login
    			$row['u_type']="student";
    			return $row;
    		}
    	}
      return array();
    }
}



 ?>
