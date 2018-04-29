<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_Job extends CI_Controller {

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

    $this->form_validation->set_rules("job_id", "Job Id", "required");

    if($this->form_validation->run() == false) {
      $job = $this->view_job_model->get_job($job_id);
      if(sizeof($job) == 0) {
        $this->output->set_status_header("404");
        exit;
      }

      $data['row']=$job;
      $data['u_type']=$this->session->userdata('u_type');
      $data['hasApplied']=false;
      $data['job_id']=$job_id;
      if($data['u_type']=="student") {
        $uid=$this->session->userdata('user_id');
        $data['hasApplied']=$this->view_job_model->get_has_applied($uid, $job_id);
      }

      $header_data['u_type'] = $this->session->userdata('u_type');

      $this->load->view('header_login', $header_data);
      $this->load->view('view_job', $data);
      $this->load->view('footer');
    } else {
      $uid=$this->session->userdata('user_id');
      $job_student_array = array("user_id" => $uid, "job_id" => $job_id);
      $this->view_job_model->apply($job_student_array);

      redirect("/applications");
    }




	}
}
