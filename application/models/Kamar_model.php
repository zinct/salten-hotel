<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

	public function get_jenis_kamar()
	{
		return $this->db->get('tb_jenis_kamar')->result_array();
	}

}

/* End of file Kamar_model.php */
/* Location: ./application/models/Kamar_model.php */