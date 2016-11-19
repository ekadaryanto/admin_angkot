<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$data['sql'] = $this->m_daftarAngkot->view();
		$this->load->view('angkot/admin',$data);
	}

	public function insert(){
		$this->load->view('angkot/insert');
	}

	public function prosesinsert(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('upload')){ //name="upload"
			echo $this->upload->display_errors();
		}
		else {
			//if upload success
			$gbr = $this->upload->data();
			$object = array(
					'id_angkot' => $this->input->post('id_angkot'),
					'nama_angkot'=> $this->input->post('nama_angkot'),
					'asal' => $this->input->post('asal'),
					'tujuan' => $this->input->post('tujuan'),
					'gambar' => $gbr['file_name'],
					'link' => $this->input->post('link')
				);
			$this->m_daftarAngkot->insert($object);
			redirect('admin','refresh');
		}
	}

	public function edit($id){
		$data['sql'] = $this->m_daftarAngkot->edit($id);
		$this->load->view('angkot/edit',$data);
	}

	public function processEdit(){
		$nmfile = "IMG_PL".time();
		$config['upload_path'] = './assets/gambar/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048'; //in kb
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';
		$config['file_name'] = $nmfile;
 
		$this->upload->initialize($config);
 
		//if upload failed
		if (!$this->upload->do_upload('upload')){ //name="foto"
			$id = $this->input->post('id_angkot');
			$object = array(
					//'id_angkot' => $this->input->post('id_angkot'),
					'nama_angkot'=> $this->input->post('nama_angkot'),
					'asal' => $this->input->post('asal'),
					'tujuan' => $this->input->post('tujuan'),
					'link' => $this->input->post('link')
				);

			$this->m_daftarAngkot->changeData($id,$object);
			redirect('admin','refresh');
		}
		else {
			//if upload success
			$id = $this->input->post('id_angkot');
			$gbr = $this->upload->data();
			$object = array(
					//'id_angkot' => $this->input->post('id_angkot'),
					'nama_angkot'=> $this->input->post('nama_angkot'),
					'asal' => $this->input->post('asal'),
					'tujuan' => $this->input->post('tujuan'),
					'gambar' => $gbr['file_name'],
					'link' => $this->input->post('link')
				);

			$this->m_daftarAngkot->changeData($id,$object);
			redirect('admin','refresh');
	}
}	

	public function delete($id){
		$this->m_daftarAngkot->delete($id);
		redirect('admin','refresh');
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */