<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->library('session');
    $this->load->library('form_validation');
    $header_data['u_type'] = $this->session->userdata('u_type');


    $this->form_validation->set_rules("location", "Location", "required");

    if($this->form_validation->run() == FALSE) {
      $this->load->view('header_login', $header_data);
      $this->load->view('search');
      $this->load->view('footer');
    } else {
      $title = $this->input->post("job_title");
      $location = $this->input->post("location");
      $data['jobsArray'] = $this->search_model->get_jobs_array($title, $location);
      $data['u_id'] = $this->session->userdata('user_id');
      $data['u_type'] = $this->session->userdata('u_type');
      if($data['u_type'] == "student") {
        $data['jobIdsApplied'] = $this->search_model->get_jobs_applied($data['u_id']);
      } else {
        $data['jobIdsApplied'] = array();
      }
      $this->load->view('header_login', $header_data);
      $this->load->view('search', $data);
      $this->load->view('footer');
    }




	}
}
