<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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
    $this->load->helper('form');
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
      $loginSuccess=$this->index_model->login($uid, $password);
      if($loginSuccess) {
        $this->load->view('header_login');
        $this->load->view('profile');
        $this->load->view('footer');
      } else {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
      }

    }


	}
}
