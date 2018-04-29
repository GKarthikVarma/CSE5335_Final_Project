<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Job extends CI_Controller {

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

    $this->form_validation->set_rules("title", "Job Title", "required");
    $this->form_validation->set_rules("company", "Company Name", "required");
    $this->form_validation->set_rules("description", "Job Description", "required");
    $this->form_validation->set_rules("city", "City", "required");
    $this->form_validation->set_rules("skills", "Job Skills", "required");


    $job = $this->edit_job_model->get_job($this->session->userdata('rec_id'), $job_id);
    if(sizeof($job) == 0) {
      $this->output->set_status_header("404");
      exit;
    }

    if($this->form_validation->run() == FALSE) {
      $header_data['u_type'] = $this->session->userdata('u_type');

      $this->load->view('header_login', $header_data);
      $this->load->view('edit_job', $job);
      $this->load->view('footer');
    } else {
      $jobArray = array(
                        "job_title"=>$this->input->post('title'),
                        "company_name"=>$this->input->post('company'),
                        "job_description"=>$this->input->post('description'),
                        "city"=>$this->input->post('city'),
                        "state"=>$this->input->post('state'),
                        "job_skills"=>$this->input->post('skills'),
                        "job_salary"=>$this->input->post('salary')
      );
      $this->edit_job_model->update_job($job_id, $jobArray);
      redirect("/view_posted_jobs");
    }


	}
}
