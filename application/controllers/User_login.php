<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$this->load->view('login/login_user');
	}

	public function processLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$login = $this->m_login->loginUser($username,$password);

		if ($login->num_rows() == 1) {
			foreach ($login->result() as $sess) {
				$sess_data['logged_in'] = 'LogIn';
				$sess_data['id_login'] = $sess->id_user;
				$sess_data['username'] = $sess->nama;
			}

			$this->session->set_userdata($sess_data);
			echo "string";
			//redirect('','refresh');
		}
		else{
			redirect(site_url('login_user'),'refresh');
		}
	}

}

/* End of file User_login.php */
/* Location: ./application/controllers/User_login.php */