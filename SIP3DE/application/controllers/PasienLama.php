<?php

class PasienLama extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		if(!$this->session->userdata('username')) redirect("/Login");
		$this->load->model("aktor_model");
	}

	public function keluar(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("id_aktor");
		redirect("/Login");
	}

	public function PasienLama(){
		$data["rows"] = $this->aktor_model->getData();
		$this->load->view("pages/forms/pasien-lama", $data);
	}
}
?>