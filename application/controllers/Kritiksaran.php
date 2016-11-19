<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritiksaran extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('admin_login','refresh');
		}
	}
	public function index(){
		$data['posts'] = $this->db->get('post')->result();
		$data['comments'] = $this->db->get('comment')->result();
		$this->load->view('kritiksaran/view',$data);
	}

	public function Comment(){
		$this->load->view('kritiksaran/form_comment');
	}

	public function DoComment(){
		# code...
	}
}

/* End of file Kritiksaran.php */
/* Location: ./application/views/Kritiksaran.php */