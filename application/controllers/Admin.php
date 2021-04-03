<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->data['user'] = $this->UserData_model->get_data();
		$this->data['menu'] = $this->Menu_model->get_menu_role();
	}

	public function index()
	{
		$this->data['title'] = $this->Title_model->set_title('Dashboard');
		$this->data['user_num'] = $this->Admin_model->get_user_num();
		$this->data['kamar_num'] = $this->Admin_model->get_kamar_num();
		$this->data['jenis_num'] = $this->Admin_model->get_jenis_num();
		
		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('admin/index');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */