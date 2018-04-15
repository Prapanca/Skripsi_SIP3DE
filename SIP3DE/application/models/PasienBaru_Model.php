<?php
class PasienBaru_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library("session");
	}

	public function tambahPasienBaru(){
		$form = array(
			'provinsi' 	=> $this->input->post("prop"),		'kota_kab' => $this->input->post("kota"),
			'kecamatan' => $this->input->post("kec"),		'desa_kel' => $this->input->post("kel"),
			'alamat' 	=> $this->input->post("alamat"),	'rt_rw' => $this->input->post("rt_rw"),
			'kode_pos' 	=> $this->input->post(""),		'nama' => $this->input->post(""),
			'tempat_lahir' 	=> $this->input->post(""),		'tgl_lahir' => $this->input->post(""),
			'no_id' 	=> $this->input->post(""),		'email' => $this->input->post(""),
			'no_hp' 	=> $this->input->post(""),
			'jenkel' 	=> $this->input->post(""),		'pekerjaan' => $this->input->post(""),
			'pendidikan' 	=> $this->input->post(""),		'nama_kk' => $this->input->post(""),
			'gol_darah' 	=> $this->input->post(""),		'status_nikah' => $this->input->post(""),
			'agama' 	=> $this->input->post(""),		'warga_negara' => $this->input->post(""),
			'tgl_sakit' 	=> $this->input->post(""),		'' => $this->input->post(""),
			'' 	=> $this->input->post(""),		'' => $this->input->post(""),
			'' 	=> $this->input->post(""),		'' => $this->input->post(""),
			'' 	=> $this->input->post(""),		'' => $this->input->post(""),
			'no_rm' 	=> $this->input->post("no_rm")
		);
		$this->db->insert("pasien, periksa", $form);
	}

	public function getNilai(){
		$query = $this->db->query("SELECT pasien.no_rm FROM pasien 
									ORDER BY pasien.no_rm DESC 
									LIMIT 1");

		return($query->num_rows() > 0) ? $query->result(): NULL;
	}
}
?>