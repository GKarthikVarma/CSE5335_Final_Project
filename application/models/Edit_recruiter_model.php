<?php
  class edit_recruiter_model extends CI_Model {
    public function __construct() {
      $this->load->database();
    }

    public function update_recruiter($uid, $profileArray) {
      $this->db->set($profileArray);
      $this->db->where("rec_id", $uid);
      $this->db->update("recruiter");
    }
}



 ?>
