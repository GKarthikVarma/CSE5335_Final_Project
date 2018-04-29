<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_Profile extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  function _remap($param) {
      $this->index($param);
  }

	public function index($user_id)
	{
    $this->load->helper('url');
    $this->load->library('session');

    $row=$this->View_profile_model->get_user($user_id);
    $header_data['u_type'] = $this->session->userdata('u_type');

    $data['first_name']=$row['user_first'];
    $data['last_name']=$row['user_last'];
    $data['degree']=$row['user_degree'];
    $data['degree_in']=$row['user_degree_in'];
    $data['grad_sem']=$row['user_graduation_semester'];
    $data['grad_year']=$row['user_graduation_year'];
    $data['skills']=$row['user_skills'];
    $data['relocation'] = $row['user_relocation'];
    $data['email'] = $row['user_email'];
    $data['photo'] = $row['user_photo'];
    $data['resume'] = $row['user_resume'];

    $this->load->view('header_login', $header_data);
    $this->load->view('view_profile', $data);
    $this->load->view('footer');

	}
}
