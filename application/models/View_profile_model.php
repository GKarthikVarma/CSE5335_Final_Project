<?php
  class View_profile_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function get_user($uid) {
      $query=$this->db->query("SELECT * FROM students WHERE user_id=".$uid.";");
      return $query->row_array();
    }

}



 ?>
