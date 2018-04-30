<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup extends CI_Controller {
	public function __construct(){
	parent::__construct();
	}

	public function index() {
	$this->load->helper('form');
	$this->load->helper('url');
	$this->load->library('session');
	$this->load->library('form_validation');

	if($this->form_validation->run() == FALSE){
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	}

	public function submit() {
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('user_insert');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('dfirst', 'dfirst', 'required');
		$this->form_validation->set_rules('dlast', 'dlast', 'required');
		$this->form_validation->set_rules('demail', 'demail', 'required|valid_email');
		$this->form_validation->set_rules('duid', 'duid', 'required');
		$this->form_validation->set_rules('dpwd', 'dpwd', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('signup');
			$this->load->view('footer');
		} else {
		$data = array(
			'first' => $this->input->post('dfirst'),
			'last' => $this->input->post('dlast'),
			'email' => $this->input->post('demail'),
			'uid' => $this->input->post('duid'),
			'pwd' => $this->input->post('dpwd'),
			'utype' => $this->input->post('utype')

		);
		$this->user_insert->dinsert($data);
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
}
}
