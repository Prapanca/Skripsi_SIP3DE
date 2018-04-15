<?php
class Anggota extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library("session");
	}

	public function submitAnggota(){
		$form = array(
			'provinsi'	=> $this->input->post('prop'),
			'kota_kab'	=> $this->input->post('kota'),
			'kecamatan'	=> $this->input->post('kec'),
			'desa_kel'	=> $this->input->post('kel'),
			'nama'		=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
			'email'		=> $this->input->post('email'),
			'no_hp'		=> $this->input->post('no_hp'),
			'level'		=> $this->input->post('level'),
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
		);
		$this->db->insert("aktor", $form);
	}
}
?>