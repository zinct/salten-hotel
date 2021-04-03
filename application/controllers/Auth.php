<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		// Form rules
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header');
			$this->load->view('Auth/index');	
			$this->load->view('Templates/footer');
		} else {
			$this->Auth_model->login();
		}			
	}

	public function register()
	{
		// form rules
		$this->form_validation->set_rules('name', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|trim|trim|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'confirm password', 'trim|matches[password]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header');
			$this->load->view('Auth/register');	
			$this->load->view('Templates/footer');	
		} else {
			$this->Auth_model->insert_user();
			$this->session->set_flashdata('success', 'Akun sudah dibuat');
			redirect(BASE_URL('Auth/index'),'refresh');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->userdata('role_id');
		redirect(BASE_URL('User/index'),'refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */