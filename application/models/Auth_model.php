<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function insert_user()
	{
		$name = htmlspecialchars($this->input->post('name', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$password = htmlspecialchars($this->input->post('password', true));

		$data = [
			'name' => $name,
			'email' => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT),
			'image' => 'default.png',
			'role_id' => 2,
			'time_created' => time(),
			'is_active' => 1
		];

		$this->db->insert('tb_user', $data);
	}

	public function login()
	{
		$email = htmlspecialchars($this->input->post('email', true));
		$password = htmlspecialchars($this->input->post('password', true));

		$result = $this->db->get_where('tb_user', ['email' => $email])->num_rows();

		if ($result > 0) {
			
			$data['user'] = $this->db->get_where('tb_user', ['email' => $email])->row_array();
			$pass = $data['user']['password'];
			$role = $data['user']['role_id'];
			$status = $data['user']['is_active'];

			if (password_verify($password, $pass)) {

				if ($status == 1) {

					$data = array(
						'email' => $email,
						'role_id' => $role
					);
					
					$this->session->set_userdata($data);

					// Check Level User
					if ($role == 1) {
						redirect(BASE_URL('Admin/index'),'refresh');
					} elseif ($role == 2) {
						redirect(BASE_URL('User/index'),'refresh');
					}
					// Check level user

				} else {

					$this->session->set_flashdata('danger', 'Akun telah di banned!');
					redirect(BASE_URL('Auth/index'),'refresh');

				}

				

			} else {

				$this->session->set_flashdata('danger', 'Password salah');
				redirect(BASE_URL('Auth/index'),'refresh');

			}

		} else {

			$this->session->set_flashdata('danger', 'Email tidak terdaftar');
			redirect(BASE_URL('Auth/index'),'refresh');

		}
	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */