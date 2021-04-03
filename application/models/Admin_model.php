<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_user_num()
	{
		return $this->db->get('tb_user')->num_rows();
	}

	public function get_kamar_num()
	{
		return $this->db->get('tb_kamar')->num_rows();
	}

	public function get_jenis_num()
	{
		return $this->db->get('tb_jenis_kamar')->num_rows();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */