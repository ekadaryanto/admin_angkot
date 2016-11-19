<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalan extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['sql'] = $this->m_jalan->view();
		$this->load->view('jalan/list',$data);
	}

	public function insert($id){
		$data['sql']=$this->m_jalan->getIdAngkot($id);
		$this->load->view('angkot/add',$data);
	}

	public function prosesinsert(){
			$object = array(
					'id_jalan' => $this->input->post('id_jalan'),
					'nama_jalan' => $this->input->post('nama_jalan'),
					'id_angkot'=> $this->input->post('id_angkot')
				);
			$this->m_jalan->insert($object);
			redirect('jalan','refresh');
		}

	public function edit($id){
		$data['sql'] = $this->m_jalan->edit($id);
		$this->load->view('jalan/edit',$data);
	}

	public function processEdit(){
			$id = $this->input->post('id_jalan');
			$object = array(
					'nama_jalan' => $this->input->post('nama_jalan'),
					'id_angkot'=> $this->input->post('id_angkot')
				);

			$this->m_jalan->changeData($id,$object);
			redirect('jalan','refresh');
	}	

	public function delete($id){
		$this->m_jalan->delete($id);
		redirect('jalan','refresh');
	}

}

/* End of file Jalan.php */
/* Location: ./application/controllers/Jalan.php */