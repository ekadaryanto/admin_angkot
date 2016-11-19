<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terminal extends CI_Model {

	public function view(){
		return $this->db->get('terminal')->result();
	}

	public function insert($object){
		$this->db->insert('terminal', $object);		
	}

	public function edit($id){
		$this->db->where('id_terminal', $id);
		return $this->db->get('terminal')->result();
	}

	public function changeData($id,$object){
		$this->db->where('id_terminal', $id);
		$this->db->update('terminal', $object);
	}

	public function delete($id){
		$this->db->where('id_terminal', $id);
		$this->db->delete('terminal');
	}	

}

/* End of file M_terminal.php */
/* Location: ./application/models/M_terminal.php */