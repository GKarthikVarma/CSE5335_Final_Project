<?php
  class Edit_profile_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function insert_profile($uid, $profileArray) {
      $this->db->set($profileArray);
      $this->db->where("user_id", $uid);
      $this->db->update("students");
    }
}



 ?>
