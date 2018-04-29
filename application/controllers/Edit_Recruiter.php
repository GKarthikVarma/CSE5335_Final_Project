<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Recruiter extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->library('form_validation');

    $this->form_validation->set_rules("first_name", "First Name", "required");
    $this->form_validation->set_rules("last_name", "Last Name", "required");
    $this->form_validation->set_rules("email", "E-Mail", "required|valid_email");


    if($this->form_validation->run() == FALSE) {
      $data['first_name']=$this->session->userdata('rec_first');
      $data['last_name']=$this->session->userdata('rec_last');
      $data['degree']=$this->session->userdata('user_degree');
      $data['email'] = $this->session->userdata('rec_email');
      $header_data['u_type'] = $this->session->userdata('u_type');

      $this->load->view('header_login', $header_data);
      $this->load->view('edit_recruiter', $data);
      $this->load->view('footer');
    } else {
      $uid = $this->session->userdata('rec_id');

      $profileArray = array('rec_first' => $this->input->post("first_name"),
                    'rec_last' => $this->input->post("last_name"),
                    'rec_email' => $this->input->post("email"),
      );
      $this->edit_recruiter_model->update_recruiter($uid, $profileArray);
      $this->session->set_userdata($profileArray);
      redirect("/recruiter_profile");
    }


	}
}
