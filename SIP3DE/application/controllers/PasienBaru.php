<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PasienBaru extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper("url");
		$this->load->model("wilayah");
		$this->load->model("aktor_model");
		$this->load->model("pasienbaru_model");
		$this->load->library("session");
		if(!$this->session->userdata("username")) redirect("/Login");
	}

	public function keluar(){
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("id_aktor");
		redirect("/Login");
	}

	public function PasienBaru(){
		$data["row"] = $this->wilayah->getProvinsi();
		$data["rows"] = $this->aktor_model->getData();
		$data["no_rm"] = $this->pasienbaru_model->getNilai();
		$this->load->view("pages/forms/pasien-baru", $data);
	}

	public function percobaan(){
		$data["row"] = $this->wilayah->getProvinsi();
		$data["rows"] = $this->aktor_model->getData();
		$data["no_rm"] = $this->pasienbaru_model->getNilai();
		$this->load->view("percobaan", $data);	
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