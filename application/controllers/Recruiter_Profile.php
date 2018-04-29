<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruiter_Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->library('session');


    $data['first_name']=$this->session->userdata('rec_first');
    $data['last_name']=$this->session->userdata('rec_last');
    $data['email'] = $this->session->userdata('rec_email');

    $header_data['u_type'] = $this->session->userdata('u_type');

    if($header_data['u_type'] != "recruiter") {
      $this->output->set_status_header("404");
    } else {
      $this->load->view('header_login', $header_data);
      $this->load->view('recruiter_profile', $data);
      $this->load->view('footer');
    }

	}
}
