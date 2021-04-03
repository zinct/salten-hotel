<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

	public function get_menu_role()
	{
		$role_id = $this->session->userdata('role_id');

		$this->db->select('tb_menu.*');
		$this->db->from('tb_access_menu');
		$this->db->join('tb_menu', 'tb_access_menu.menu_id = tb_menu.menu_id');
		$this->db->where('tb_access_menu.role_id', $role_id);
		return $this->db->get()->result_array();
	}

	public function get_submenu()
	{
		$this->db->select('tb_sub_menu.*');
		$this->db->select('tb_menu.menu_name');
		$this->db->from('tb_sub_menu');
		$this->db->join('tb_menu', 'tb_menu.menu_id = tb_sub_menu.menu_id');
		return $this->db->get()->result_array();
	}

	public function insert_menu()
	{
		if (isset($_POST['btn-insert'])) {

			$menu_name = $this->input->post('menu_name', TRUE);
			$data = ['menu_name' => htmlspecialchars($menu_name, true)];

			$this->db->insert('tb_menu', $data);
			redirect(BASE_URL('Menu/index'),'refresh');

		}
	}

	public function insert_submenu()
	{
		if (isset($_POST['btn-insert'])) {

			$data = [
			'name' => htmlspecialchars($this->input->post('title', true)),
			'menu_id' => htmlspecialchars($this->input->post('menu_id', true)),
			'icon' => htmlspecialchars($this->input->post('icon', true)),
			'url' => htmlspecialchars($this->input->post('url', true)),
			'is_active' => htmlspecialchars($this->input->post('is_active', true))
			];

			$this->db->insert('tb_sub_menu', $data);
			redirect(BASE_URL('Menu/submenu'),'refresh');

		}
	}

}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */