<?php
  class Delete_job_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function verify_job($uid, $jobId) {
      $query=$this->db->query("SELECT * FROM jobs WHERE job_id=".$jobId." AND rec_id=".$uid.";");
      return ($query->num_rows() == 1);
    }

    public function delete_job($job_id) {
      $this->db->where("job_id", $job_id);
      $this->db->delete("jobs");

      $this->db->where("job_id", $job_id);
      $this->db->delete("job_student");
    }
}



 ?>
