<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

	public function get_kamar()
	{
		$this->db->select('tb_kamar.*');
		$this->db->select('tb_jenis_kamar.*');
		$this->db->from('tb_kamar');
		$this->db->join('tb_jenis_kamar', 'tb_kamar.jenis_id = tb_jenis_kamar.jenis_id');

		return $this->db->get()->result_array();
	}

	public function get_jenis()
	{
		return $this->db->get('tb_jenis_kamar')->result_array();
	}

	public function insert_kamar()
	{
		if (isset($_POST['btn-insert'])) {

			$data = [
				'nama_kamar' => htmlspecialchars($this->input->post('nama_kamar', true)),
				'jenis_id' => htmlspecialchars($this->input->post('jenis_id', true)),
				'harga' => htmlspecialchars($this->input->post('harga', true))
			];


			$this->db->insert('tb_kamar', $data);
			$this->session->set_flashdata('success', 'Kamar Berhasil Ditambahkan');
	        redirect(BASE_URL('Data/index'),'refresh');
		}
	}

	public function upload_image()
	{
		if (isset($_FILES['image']['name'])) 
		{

			$new_file_name = $_FILES['image']['name'];

			if ($new_file_name) {

				$config['upload_path'] = './assets/img/kamar';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']     = '2024';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('image')) {

	                $error = $this->upload->display_errors();
	                $this->session->set_flashdata('danger', $error);
	                redirect(BASE_URL('Data/index'),'refresh');
	            
	            } else {

	            	$new_file_name = $this->upload->data('file_name');
	                return $this->db->set('image', $new_file_name);            

	            }
	        }
		}
	}

}


/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */