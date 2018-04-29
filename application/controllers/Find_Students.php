<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_Students extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->library('form_validation');
    $header_data['u_type'] = $this->session->userdata('u_type');

    if ($header_data['u_type'] != "recruiter") {
      $this->output->set_header_status("404");
      exit;
    }


    $this->form_validation->set_rules("student-skills", "Skills", "required");

    if($this->form_validation->run() == FALSE) {
      $this->load->view('header_login', $header_data);
      $this->load->view('find_students');
      $this->load->view('footer');
    } else {
      $skills= $this->input->post("student-skills");
      $data['resultArray'] = $this->Find_students_model->get_students_by_skill($skills);
      $data['maxScore']= sizeof(explode(",", $skills));

      $this->load->view('header_login', $header_data);
      $this->load->view('find_students', $data);
      $this->load->view('footer');
    }




	}
}
