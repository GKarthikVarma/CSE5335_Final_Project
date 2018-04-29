<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('uid', 'UserID', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run()==FALSE) {
      $this->load->view('header');
      $this->load->view('index');
      $this->load->view('footer');
    } else {
      $uid=$this->input->post('uid');
      $password=$this->input->post('password');
      $row=$this->index_model->login($uid, $password);
      if(sizeof($row) > 0) {
        $this->session->set_userdata($row);
        if($row['u_type']=="student") {
          redirect('/profile');
        } else {
          redirect('/recruiter_profile');
        }
      } else {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
      }

    }


	}
}
