<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Job extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
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

    $header_data['u_type'] = $this->session->userdata('u_type');

    if($header_data['u_type'] != "recruiter") {
      $this->output->set_status_header("404");
    } else if($this->form_validation->run() == FALSE) {
      $this->load->view('header_login', $header_data);
      $this->load->view('post_job');
      $this->load->view('footer');
    } else {
      $jobArray['rec_id']=$this->session->userdata('rec_id');
      $jobArray['job_title'] = $this->input->post('title');
      $jobArray['company_name'] = $this->input->post('company');
      $jobArray['job_description'] = $this->input->post('description');
      $jobArray['city'] = $this->input->post('city');
      $jobArray['state'] = $this->input->post('state');
      $jobArray['job_skills'] = $this->input->post('skills');
      $jobArray['job_salary'] = $this->input->post('salary');
      $this->Post_job_model->insert_job($jobArray);
      redirect("/view_posted_jobs");
    }
	}
}
