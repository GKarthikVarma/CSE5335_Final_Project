<?php
  class applications_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_job_ids($uid) {
      $query=$this->db->query("SELECT * FROM job_student WHERE user_id=".$uid.";");
      return $query->result_array();
    }

    public function get_jobs_array($jobIdArray) {
      $queryArray=array();
      foreach($jobIdArray as $jobStudentId) {
        $jobId = $jobStudentId['job_id'];
        $query=$this->db->query("SELECT * FROM jobs WHERE job_id=".$jobId.";");
        foreach($query->result_array() as $row) {
          array_push($queryArray, $row);
        }
      }
      return $queryArray;
    }
  }

?>
