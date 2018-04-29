<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Profile extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index()
	{
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->library('form_validation');

    $this->form_validation->set_rules("first_name", "First Name", "required");
    $this->form_validation->set_rules("last_name", "Last Name", "required");
    $this->form_validation->set_rules("email", "E-Mail", "required|valid_email");
    $this->form_validation->set_rules("major", "Major", "required");
    $this->form_validation->set_rules("grad_year", "Graduation Year", "required|numeric|exact_length[4]");
    $this->form_validation->set_rules("skills", "Skills", "required");


    if($this->form_validation->run() == FALSE) {
      $data['uid']=$this->session->userdata('user_id');
      $data['first_name']=$this->session->userdata('user_first');
      $data['last_name']=$this->session->userdata('user_last');
      $data['degree']=$this->session->userdata('user_degree');
      $data['degree_in']=$this->session->userdata('user_degree_in');
      $data['grad_sem']=$this->session->userdata('user_graduation_semester');
      $data['grad_year']=$this->session->userdata('user_graduation_year');
      $data['skills']=$this->session->userdata('user_skills');
      $data['relocation'] = $this->session->userdata('user_relocation');
      $data['email'] = $this->session->userdata('user_email');
      $data['photo'] = $this->session->userdata('user_photo');
      $data['resume'] = $this->session->userdata('user_resume');
      $header_data['u_type'] = $this->session->userdata('u_type');

      $this->load->view('header_login', $header_data);
      $this->load->view('edit_profile', $data);
      $this->load->view('footer');
    } else {
      $uid = $this->input->post('id');

      $reloc=0;
      if($this->input->post("relocation") == "on" ) {
          $reloc=1;
      }
      $profileArray = array('user_first' => $this->input->post("first_name"),
                    'user_last' => $this->input->post("last_name"),
                    'user_email' => $this->input->post("email"),
                    'user_degree' => $this->input->post("degree_type"),
                    'user_degree_in' => $this->input->post("major"),
                    'user_graduation_semester' => $this->input->post("grad_semester"),
                    'user_graduation_year' => $this->input->post("grad_year"),
                    'user_skills' => $this->input->post("skills"),
                    'user_relocation' => $reloc
      );
      $this->edit_profile_model->insert_profile($uid, $profileArray);
      $this->session->set_userdata($profileArray);
      redirect("/profile");
    }


	}
}
