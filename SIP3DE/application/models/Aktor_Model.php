<?php

class Aktor_Model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library("session");
	}

	public function DataAktor($username,$password){
		$password = md5($password);
		$temp = $this->db->query('select * from aktor where username="'.$username.'" and password="'.$password.'"')->row_array();
			if(count($temp)>0){
				$this->session->set_userdata('username',$temp['username']);
				$this->session->set_userdata('id_aktor',$temp['id_aktor']);
				$this->session->set_userdata('level',$temp['level']);
				return true;
			}
			else false;
	}

	public function getData(){
		$query = $this->db->query("SELECT * FROM aktor, level
									WHERE aktor.id_aktor = '".$this->session->userdata("id_aktor")."'
									AND aktor.level = level.id_level");

		return($query->num_rows() > 0) ? $query->result(): NULL;
	}

}

?>