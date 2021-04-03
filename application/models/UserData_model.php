<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserData_model extends CI_Model {

	public function get_data()
	{
		$email = $this->session->userdata('email');
		$this->db->select('tb_user.*,tb_role.role_name');
		$this->db->from('tb_user');
		$this->db->join('tb_role', 'tb_user.role_id = tb_role.role_id');
		$this->db->where('email', $email);
		return $this->db->get()->row_array();
	}

}

/* End of file UserData_model.php */
/* Location: ./application/models/UserData_model.php */