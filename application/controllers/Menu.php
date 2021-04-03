<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['user'] = $this->UserData_model->get_data();
		$this->data['menu'] = $this->Menu_model->get_menu_role();
	}

	public function index()
	{
		$this->data['title'] = $this->Title_model->set_title('Menu Management');
		
		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('Menu/index');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');

		$this->Menu_model->insert_menu();
	}

	public function submenu()
	{
		$this->data['title'] = $this->Title_model->set_title('Sub Menu Management');
		$this->data['sub_menu'] = $this->Menu_model->get_submenu();
		
		$this->load->view('Templates/header', $this->data);
		$this->load->view('Templates/sidebar', $this->data);
		$this->load->view('Templates/topbar', $this->data);
		$this->load->view('Menu/submenu');
		$this->load->view('Templates/copyright');
		$this->load->view('Templates/footer');

		$this->Menu_model->insert_submenu();
	}

}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */