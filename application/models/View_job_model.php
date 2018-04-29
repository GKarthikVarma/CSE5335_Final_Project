<?php
  class view_job_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_job($jobId) {
      $query=$this->db->query("SELECT * FROM jobs WHERE job_id=".$jobId.";");
      return $query->row_array();
    }

    public function get_has_applied($uid, $job_id) {
      $query=$this->db->query("SELECT * FROM job_student WHERE job_id=".$job_id." AND user_id=".$uid.";");
      return ($query->num_rows() == 1);
    }

    public function apply($job_student_array) {
      $this->db->insert("job_student", $job_student_array);
    }

}



 ?>
