<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Job extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  function _remap($param) {
      $this->index($param);
  }

	public function index($job_id)
	{
    $this->load->helper('url');
    $this->load->library('session');

    $uid = $this->session->userdata('rec_id');
    if($this->Delete_job_model->verify_job($uid, $job_id)) {
      $this->Delete_job_model->delete_job($job_id);
      redirect("/view_posted_jobs");
    } else {
      $this->output->set_status_heater("404");
    }
	}
}
