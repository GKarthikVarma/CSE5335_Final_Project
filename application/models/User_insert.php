<?php

class User_insert extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	function dinsert($query){
		$uid = $query['uid'];

		if($query['utype'] == 0){
			$data = array(
				'user_first' => $query['first'],
				'user_last' => $query['last'],
				'user_email' => $query['email'],
				'user_uid' => $query['uid'],
				'user_pwd' => password_hash($query['pwd'], PASSWORD_DEFAULT)
			);
			$sql = $this->db->query("SELECT * FROM students WHERE user_uid='$uid' OR user_email='$uid';");
			if($sql->num_rows() < 1){
			$this->db->insert('students', $data);}
		} else {
			$data = array(
				'rec_first' => $query['first'],
				'rec_last' => $query['last'],
				'rec_email' => $query['email'],
				'rec_uname' => $query['uid'],
				'rec_pass' => password_hash($query['pwd'], PASSWORD_DEFAULT)

			);
			$sql = $this->db->query("SELECT * FROM recruiter WHERE rec_email='$uid' OR rec_uname='$uid';");
			if($sql->num_rows() < 1){
			$this->db->insert('recruiter', $data);}
		}
	}
}