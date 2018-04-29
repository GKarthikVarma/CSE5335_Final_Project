<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicants extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  function _remap($param) {
      $this->index($param);
  }

	public function index($job_id)
	{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->library('form_validation');

    $verified = $this->applicants_model->verify_job($this->session->userdata('rec_id'), $job_id);
    if($verified) {
      $data['applicants']=$this->applicants_model->get_applicants($job_id);
      $header_data['u_type'] = $this->session->userdata('u_type');

      $this->load->view('header_login', $header_data);
      $this->load->view('applicants', $data);
      $this->load->view('footer');
    } else {
      $this->output->set_header("404");
    }

	}
}
