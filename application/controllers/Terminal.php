<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terminal extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['sql'] = $this->m_terminal->view();
		$this->load->view('terminal/list',$data);
	}

	public function insert(){
		$this->load->view('terminal/insert');
	}

	public function prosesinsert(){
			$object = array(
					'id_terminal' => $this->input->post('id_terminal'),
					'nama_terminal' => $this->input->post('nama_terminal'),
					'jumlah_angkot'=> $this->input->post('jumlah_angkot')
				);
			$this->m_terminal->insert($object);
			redirect('terminal','refresh');
		}

	public function edit($id){
		$data['sql'] = $this->m_terminal->edit($id);
		$this->load->view('terminal/edit',$data);
	}

	public function processEdit(){
			$id = $this->input->post('id_terminal');
			$object = array(
					'nama_terminal' => $this->input->post('nama_terminal'),
					'jumlah_angkot'=> $this->input->post('jumlah_angkot')
				);

			$this->m_terminal->changeData($id,$object);
			redirect('terminal','refresh');
	}	

	public function delete($id){
		$this->m_terminal->delete($id);
		redirect('terminal','refresh');
	}

}

/* End of file Terminal.php */
/* Location: ./application/controllers/Terminal.php */