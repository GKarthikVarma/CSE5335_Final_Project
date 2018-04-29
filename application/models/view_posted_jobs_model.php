<?php
  class View_posted_jobs_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_jobs_array_with_app_count($uid) {
      $query1=$this->db->query("SELECT * FROM jobs WHERE rec_id=".$uid.";");
      $jobsArray=array();
      foreach($query1->result_array() as $row) {
        $query2 = $this->db->query("SELECT * FROM job_student where job_id=".$row['job_id'].";");
        $row['applicantCount'] = $query2->num_rows();
        array_push($jobsArray, $row);
      }
      return $jobsArray;
    }
  }

?>
