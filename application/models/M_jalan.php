<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jalan extends CI_Model {

	public function getIdAngkot($id){
		$this->db->where('id_angkot', $id);
		return $this->db->get('jalan')->result();
	}

	public function view(){
		return $this->db->get('jalan')->result();
	}

	public function insert($object){
		$this->db->insert('jalan', $object);		
	}

	public function edit($id){
		$this->db->where('id_jalan', $id);
		return $this->db->get('jalan')->result();
	}

	public function changeData($id,$object){
		$this->db->where('id_jalan', $id);
		$this->db->update('jalan', $object);
	}

	public function delete($id){
		$this->db->where('id_jalan', $id);
		$this->db->delete('jalan');
	}	

}

/* End of file M_jalan.php */
/* Location: ./application/models/M_jalan.php */