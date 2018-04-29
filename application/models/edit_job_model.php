<?php
  class edit_job_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_job($uid, $jobId) {
      $query=$this->db->query("SELECT * FROM jobs WHERE job_id=".$jobId." AND rec_id=".$uid.";");
      return $query->row_array();
    }

    public function update_job($job_id, $jobArray) {
      $this->db->set($jobArray);
      $this->db->where("job_id", $job_id);
      $this->db->update("jobs");
    }
}



 ?>
