<?php

class Wilayah extends CI_Model
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getProvinsi(){
		$query = $this->db->query("SELECT * FROM inf_lokasi where lokasi_kabupatenkota=0 and lokasi_kecamatan=0 and lokasi_kelurahan=0 order by lokasi_nama");

		return ($query->num_rows() > 0) ? $query->result(): NULL;
	}

	public function getKota($kota){
		$query = $this->db->query("SELECT * FROM inf_lokasi where lokasi_propinsi=$kota and lokasi_kecamatan=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota!=0 order by lokasi_nama");

		return ($query->num_rows() > 0) ? $query->result(): NULL;
	}

	public function getKecamatan($kec){
		$query = $this->db->query("SELECT * FROM inf_lokasi where lokasi_propinsi=".$kec[1]." and lokasi_kecamatan!=0 and lokasi_kelurahan=0 and lokasi_kabupatenkota=".$kec[0]." order by lokasi_nama");

		return ($query->num_rows() > 0) ? $query->result(): NULL;
	}

	public function getKelurahan($kel){
		$query = $this->db->query("SELECT * FROM inf_lokasi where lokasi_propinsi=".$kel[2]." and lokasi_kecamatan=".$kel[0]." and lokasi_kelurahan!=0 and lokasi_kabupatenkota=".$kel[1]." order by lokasi_nama");

		return ($query->num_rows() > 0) ? $query->result(): NULL;
	}
}

?>