<?php
class Aktor extends CI_Controller{

	public function __construct(){
		parent::__construct(){
			$this->load->helper('url');
			$this->load->database();
		}
	}
	
}
?>