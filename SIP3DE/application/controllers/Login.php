<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model("aktor_model");
		$this->load->library("session");
	}

	public function index(){
		$this->load->view('pages/examples/login');
	}

	public function sinkron(){
		if($this->input->post("username") == null){
			redirect("/Login");
			return;
		}
		if($this->input->post("password") == null){
			redirect("/Login");
			return;
		}
		if ($this->aktor_model->DataAktor($this->input->post("username"),$this->input->post("password"))){
			redirect("/Home/home");
		}
		else{
			redirect("/Login");
		}
	}
	
	public function lupa(){
		$this->load->view('pages/examples/forgot-password');
	}
}
