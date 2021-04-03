<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model');
		$this->data['user'] = $this->UserData_model->get_data();
		$this->data['menu'] = $this->Menu_model->get_menu_role();
	}

	public function index()
	{
		$this->data['title'] = $this->Title_model->set_title('Data Kamar');
		$this->data['kamar'] = $this->Data_model->get_kamar();
		$this->data['jenis_kamar'] = $this->Data_model->get_jenis();
		
		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('data/index', $this->data);
		$this->load->view('Templates/js/upload_file');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');

		$this->Data_model->upload_image();
		$this->Data_model->insert_kamar();
	}

}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */