<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->library('session');


    $data['first_name']=$this->session->userdata('user_first');
    $data['last_name']=$this->session->userdata('user_last');
    $data['degree']=$this->session->userdata('user_degree');
    $data['degree_in']=$this->session->userdata('user_degree_in');
    $data['grad_sem']=$this->session->userdata('user_graduation_semester');
    $data['grad_year']=$this->session->userdata('user_graduation_year');
    $data['skills']=$this->session->userdata('user_skills');
    $data['relocation'] = $this->session->userdata('user_relocation');
    $data['email'] = $this->session->userdata('user_email');
    $data['photo'] = $this->session->userdata('user_photo');
    $data['resume'] = $this->session->userdata('user_resume');

    $header_data['u_type'] = $this->session->userdata('u_type');

    if($header_data['u_type'] != "student") {
      $this->output->set_status_header("404");
    } else {
      $this->load->view('header_login', $header_data);
      $this->load->view('profile', $data);
      $this->load->view('footer');
    }
	}
}
