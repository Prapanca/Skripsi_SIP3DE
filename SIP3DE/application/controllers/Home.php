<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		if(!$this->session->userdata('username')) redirect("/Login");
		$this->load->database();
		$this->load->model("aktor_model");
	}

	public function keluar(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("id_aktor");
		redirect("/Login");
	}

	public function home(){
		$data["rows"] = $this->aktor_model->getData();
		$this->load->view('pages/home', $data);
	}

}
