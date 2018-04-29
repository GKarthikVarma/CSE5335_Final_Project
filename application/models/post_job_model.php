<?php
  class Post_job_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function insert_job($jobArray) {
      $this->db->insert("jobs", $jobArray);
    }
}



 ?>
