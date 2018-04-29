s<?php
  class search_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_jobs_array($title, $location) {
      if(isset($title) == FALSE) $title = "";
      $loc = explode(",", $location);
      $title=trim($title);
      $titleArray=explode(" ",$title);
      $title=join("%",$titleArray);
      $loc[0]=trim($loc[0]);
      $loc[1]=trim($loc[1]);
      if(trim($title)=="") {
        $sql = "SELECT * FROM jobs WHERE city='$loc[0]' AND state='$loc[1]'";
      } else {
        $sql = "SELECT * FROM jobs WHERE job_title LIKE '%$title%' AND city='$loc[0]' AND state='$loc[1]'";
      }
      $query=$this->db->query($sql);
      return $query->result_array();
    }

    public function get_jobs_applied($uid) {
      $query=$this->db->query("SELECT job_id FROM job_student WHERE user_id=".$uid.";");
      $jobIds = array();
      foreach($query->result_array() as $jobRow) {
        array_push($jobIds, $jobRow['job_id']);
      }
      return $jobIds;
    }
}



 ?>
