<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_Posted_Jobs extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->library('session');

    $header_data['u_type'] = $this->session->userdata('u_type');

    if($header_data['u_type'] != "recruiter") {
      $this->output->set_status_header("404");
    } else {
      $uid=$this->session->userdata("rec_id");
      $data['jobsArray'] = $this->view_posted_jobs_model->get_jobs_array_with_app_count($uid);

      $this->load->view('header_login', $header_data);
      $this->load->view('view_posted_jobs', $data);
      $this->load->view('footer');
    }


	}
}
