<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function update_user()
	{
		$email = htmlspecialchars($this->input->post('email', true));
		$name = htmlspecialchars($this->input->post('name', true));

		$this->db->where('email', $email);
		$this->db->update('tb_user', ['name' => $name]);
	}

	public function upload_image()
	{
		$new_file_name = $_FILES['image']['name'];
		$old_file_name = $this->data['user']['image'];

		if ($new_file_name) {

			$config['upload_path'] = './assets/img/profile';
			$config['allowed_types'] = 'jpeg|jpg|png';
			$config['max_size']     = '2024';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image')) {

                $error = $this->upload->display_errors();
                echo $error;
            
            } else {
            	$new_file_name = $this->upload->data('file_name');
                
                if ($old_file_name != 'default.png') {
                	unlink(FCPATH . 'assets/img/profile/' . $old_file_name);
                }
                
                return $this->db->set('image', $new_file_name);

            }

		}
	}



}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */