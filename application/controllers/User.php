<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kamar_model');
		$this->load->model('Data_model');
		$this->data['user'] = $this->UserData_model->get_data();
		$this->data['menu'] = $this->Menu_model->get_menu_role();
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->data['title'] = $this->Title_model->set_title('index');
		$this->data['jenis_kamar'] = $this->Kamar_model->get_jenis_kamar();
		$this->data['kamar'] = $this->Data_model->get_kamar($this->input->post('kategori'));

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('User/index', $this->data);
		$this->load->view('Templates/js/searching_ajax');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

	public function profile()
	{
		$this->data['title'] = $this->Title_model->set_title('My Profile');

		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('User/profile', $this->data);
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

	public function edit()
	{
		$this->data['title'] = $this->Title_model->set_title('Edit Profile');

		// form validation
		$this->form_validation->set_rules('name', 'email', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $this->data);
			$this->load->view('Templates/sidebar', $this->data);
			$this->load->view('Templates/topbar', $this->data);
			$this->load->view('User/edit', $this->data);
			$this->load->view('Templates/copyright');
			$this->load->view('Templates/js/upload_file');
			$this->load->view('Templates/footer');

		} else {
			// Upload image
			$this->User_model->upload_image();
					
			$this->User_model->update_user();
			$this->session->set_flashdata('success', 'Profile berhasil di ubah');
			redirect(BASE_URL('User/Profile'),'refresh');
		}
		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */