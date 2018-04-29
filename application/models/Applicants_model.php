<?php
  class applicants_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function verify_job($uid, $jobId) {
      $query=$this->db->query("SELECT * FROM jobs WHERE job_id=".$jobId." AND rec_id=".$uid.";");
      return ($query->num_rows() == 1);
    }

    public function get_applicants($job_id) {
      $query=$this->db->query("SELECT * FROM students WHERE user_id IN (SELECT user_id FROM job_student WHERE job_id=".$job_id.");");
      return $query->result_array();
    }
}



 ?>
