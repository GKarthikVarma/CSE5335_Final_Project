<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applications extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->library('session');

    $header_data['u_type'] = $this->session->userdata('u_type');

    if($header_data['u_type'] != "student") {
      $this->output->set_status_header("404");
    } else {
      $uid=$this->session->userdata("user_id");
      $jobIds = $this->applications_model->get_job_ids($uid);
      $data['jobsArray'] = $this->applications_model->get_jobs_array($jobIds);

      $this->load->view('header_login', $header_data);
      $this->load->view('applications', $data);
      $this->load->view('footer');
    }


	}
}