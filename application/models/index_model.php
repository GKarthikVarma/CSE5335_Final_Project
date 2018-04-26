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
      			return false;
      		} else {
            $row=$query->row_array();
      			$hashedpwdcheck = password_verify($password, $row['rec_pass']);
      			if ($hashedpwdcheck == false){
              return false;
    				} elseif ($hashedpwdcheck == true) {
    					$_SESSION['uid'] = $row['rec_id'];
    					$_SESSION['u_first'] = $row['rec_first'];
    					$_SESSION['u_last'] = $row['rec_last'];
    					$_SESSION['u_email'] = $row['rec_email'];
    					$_SESSION['u_uid'] = $row['rec_uname'];
    					$_SESSION['u_type'] = "recruiter";
              return true;
            }
      	  }
    	} else {
        $row=$query->row_array();
    		$hashedpwdcheck = password_verify($password, $row['user_pwd']);
    		if ($hashedpwdcheck == false){
    			return false;
    		} elseif ($hashedpwdcheck == true) {
    			// Login
    			$_SESSION['u_id'] = $row['user_id'];
    			$_SESSION['u_first'] = $row['user_first'];
    			$_SESSION['u_last'] = $row['user_last'];
    			$_SESSION['u_email'] = $row['user_email'];
    			$_SESSION['u_uid'] = $row['user_uid'];
    			$_SESSION['u_degree'] = $row['user_degree'];
    			$_SESSION['u_degree_in'] = $row['user_degree_in'];
    			$_SESSION['u_graduation_semester'] = $row['user_graduation_semester'];
    			$_SESSION['u_graduation_year'] = $row['user_graduation_year'];
    			$_SESSION['u_skills'] = $row['user_skills'];
    			$_SESSION['u_relocation'] = $row['user_relocation'];
    			$_SESSION['u_type'] = "student";
    			$_SESSION['u_photo'] = $row['user_photo'];
    			$_SESSION['u_resume'] = $row['user_resume'];
    			return true;
    		}
    	}
      return false;
    }
}



 ?>
