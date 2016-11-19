<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$query = $this->db->query("SELECT user.nama, pertanyaan.isi_pertanyaan FROM user, pertanyaan")->result();

		foreach ($query as $key) {
			echo $key->nama.": ";
			echo $key->isi_pertanyaan."<br>";
		}

		$sql = $this->db->query("SELECT admin.nama, jawaban.isi_jawaban FROM admin, jawaban")->result();

		foreach ($sql as $jwb) {
			echo $jwb->nama." :".$jwb->isi_jawaban."<br>";
		}
	}

}

/* End of file Pertanyaan.php */
/* Location: ./application/controllers/Pertanyaan.php */