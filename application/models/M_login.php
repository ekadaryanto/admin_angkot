<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username, $password){
		$data = array(
				'nama' => $username,
				'password' => $password
			);
		
		$this->db->where($data);
		return $this->db->get('admin');
	}

	public function loginUser($username, $password){
		$data = array(
				'nama' => $username,
				'password' => $password
			);
		
		$this->db->where($data);
		return $this->db->get('user');
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */