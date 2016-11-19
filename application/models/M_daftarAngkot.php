<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftarAngkot extends CI_Model {

	public function view(){
		return $this->db->get('daftar_angkot')->result();
	}

	public function insert($object){
		$this->db->insert('daftar_angkot', $object);		
	}

	public function edit($id){
		$this->db->where('id_angkot', $id);
		return $this->db->get('daftar_angkot')->result();
	}

	public function changeData($id,$object){
		$this->db->where('id_angkot', $id);
		$this->db->update('daftar_angkot', $object);
	}

	public function delete($id){
		$this->db->where('id_angkot', $id);
		$this->db->delete('daftar_angkot');
	}

}

/* End of file M_daftarAngkot.php */
/* Location: ./application/models/M_daftarAngkot.php */