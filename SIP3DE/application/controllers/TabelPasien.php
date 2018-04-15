<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TabelPasien extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->model("aktor_model");
		$this->load->library("session");
		if(!$this->session->userdata("username")) redirect("/Login");
	}

	public function keluar(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("id_aktor");
		redirect("/Login");
	}

	public function SeluruhPasien(){
		$data["rows"] = $this->aktor_model->getData();
		$this->load->view("pages/tables/seluruh-pasien", $data);
	}

}

?>