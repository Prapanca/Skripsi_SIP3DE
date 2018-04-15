<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahAnggota extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->library("session");
		if(!$this->session->userdata("username")) redirect("/Lofin");
		$this->load->model("aktor_model");
		$this->load->model("wilayah");
		$this->load->model("anggota");
	}

	public function keluar(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("id_aktor");
		redirect("/Login");
	}

	public function tambahAnggota(){
		$data["row"] = $this->wilayah->getProvinsi();
		$data["rows"] = $this->aktor_model->getData();
		$this->load->view("pages/tambah-anggota", $data);
	}

	public function submitAnggota(){
		if(!is_null($this->anggota->submitAnggota($this->input->post('username')))) {
			$query = $this->db->query("SELECT * FROM aktor");
			$query = $query->row_array();
			$this->load->view('pages/tambah-anggota', array('error2' => ''.$this->input->post('username').' terdaftar, silahkan edit', 
				'username' => $query['username'],
				)
			);
		return;
		}
		$this->anggota->submitAnggota();
		redirect("/Home/home");
	}

	public function getKota($kota = null){
		if(is_null($kota)){
			echo"<option selected value=''>--Pilih Kota / Kabupaten--</option>";
		}
		$data = $this->wilayah->getKota($kota);
		echo"<option selected value=''>--Pilih Kota / Kabupaten--</option>";
		foreach ($data as $value){
			echo "<option value='".$value->lokasi_kabupatenkota."|".$kota."'>".$value->lokasi_nama."</option>";
		}
	}

	public function getKecamatan($kec = null){
		if(is_null($kec)){
			echo"<option selected value=''>--Pilih Kecamatan--</option>";
		}
		$kec = explode("|", $kec);
		if(count($kec) != 2)
		$kec = explode("%7C", $kec[0]);
		$data = $this->wilayah->getKecamatan($kec);
		echo"<option selected value=''>--Pilih Kecamatan-</option>";
		foreach ($data as $value){
			echo "<option value='".$value->lokasi_kecamatan."|".$value->lokasi_kabupatenkota."|".$value->lokasi_propinsi."''>".$value->lokasi_nama."</option>";
		}
	}

	public function getKelurahan($kel = null){
		if(is_null($kel)){
			echo"<option selected value=''>--Pilih Desa / Kelurahan--</option>";
		}
		$kel = explode("|", $kel);
		if(count($kel) != 3)
		$kel = explode("%7C", $kel[0]);
		$data = $this->wilayah->getKelurahan($kel);
		echo"<option selected value=''>--Pilih Desa / Kelurahan--</option>";
		foreach ($data as $value){
			echo "<option value='".$value->lokasi_kode."'>".$value->lokasi_nama."</option>";
		}
	}
}
?>