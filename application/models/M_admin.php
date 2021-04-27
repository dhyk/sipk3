<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	
	function lihat_data_user($username){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username',$username);
		$query = $this->db->get();

		return $query;
	}

	function lihat_data_id($username){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_tb_user',$username);
		$query = $this->db->get();

		return $query;
	}

	function lihat_smk3($id){
		$this->db->select('*');
		$this->db->from('sertifikat_smk3');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}


	function savesmk3($berkas,$id){
		$this->db->where('id_user', $id);
		$this->db->delete('sertifikat_smk3');

		$data1 = array(
			'id_user' => $id,
			'file_sertifikat' => $berkas,

		);
		$this->db->insert('sertifikat_smk3', $data1);

	}

	function save_sertifikat_standard($nama,$tanggal,$masa,$berkas,$id){
		$this->db->where('id_user', $id);

		$data1 = array(
			'nama_sertifikat_standard' => $nama,
			'tanggal_terbit' => $tanggal,
			'masa_berlaku' => $masa,
			'file_sertifikat' => $berkas,
			'id_user' => $id

		);
		$this->db->insert('tb_sertfikat_standard', $data1);

	}

	function save_sertifikat_produk($nama,$tanggal,$masa,$id){
		$this->db->where('id_user', $id);

		$data1 = array(
			'nama_sertifikat_produk' => $nama,
			'tanggal_terbit' => $tanggal,
			'masa_berlaku' => $masa,
			'id_user' => $id

		);
		$this->db->insert('tb_sertifikat_produk', $data1);

	}

	function save_izin_berusaha($nama,$nomor,$tanggal,$masa,$id){
		$this->db->where('id_user', $id);

		$data1 = array(
			'nama_izin_usaha' => $nama,
			'nomor_izin' => $nomor,
			'tanggal_terbit' => $tanggal,
			'masa_berlaku' => $masa,
			'id_user' => $id

		);
		//var_dump($data1);
		$this->db->insert('tb_izin_usaha', $data1);

	}

	function save_ahlik3($nama,$nomor,$tanggal,$masa,$id){
		$this->db->where('id_user', $id);

		$data1 = array(
			'nama' => $nama,
			'nomor' => $nomor,
			'tangggal_terbit' => $tanggal,
			'masa_berlaku' => $masa,
			'id_user' => $id

		);
		//var_dump($data1);
		$this->db->insert('ahlik3umum', $data1);

	}

	function hapus_sertifikat_standard($id){
		$this->db->where('id_sertifikat_standard', $id);
		$this->db->delete('tb_sertfikat_standard');
	}
	
	function hapus_sertifikat_produk($id){
		$this->db->where('id_sertifikat_produk', $id);
		$this->db->delete('tb_sertifikat_produk');
	}

	function hapus_izin_berusaha($id){
		$this->db->where('id_izin_usaha', $id);
		$this->db->delete('tb_izin_usaha');
	}

	function hapus_ahlik3($id){
		$this->db->where('id_ahlik3umum', $id);
		$this->db->delete('ahlik3umum');
	}

	
//--------------------------------------------------------------------------------
function lihat_sertfikat_standard($id){
	$this->db->select('*');
	$this->db->from('tb_sertfikat_standard');
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
}

function lihat_sertfikat_produk($id){
	$this->db->select('*');
	$this->db->from('tb_sertifikat_produk');
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
}

function lihat_izin_usaha($id){
	$this->db->select('*');
	$this->db->from('tb_izin_usaha');
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
}

function lihat_ahlik3($id){
	$this->db->select('*');
	$this->db->from('ahlik3umum');
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
}
//----------------------------------------------------------------------------------

	function lihat_produk(){
		$this->db->select('*');
		$this->db->from('tb_produk');
		
		$query = $this->db->get();

		return $query;
	}
	function input_data($data1,$table){

		$this->db->insert($table,$data1);

	}
	public function saveproduk()
	{
		$data1 = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'detail' => $this->input->post('detail'),
			'link' => $this->input->post('link'),
			'foto' => $this->input->post('foto'),
		);
		$this->db->insert('tb_produk', $data1);
	}
	public function deleteproduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$this->db->delete('tb_produk');
	}

	function input_berita($data2,$table){

		$this->db->insert($table,$data2);

	}
	public function saveberita($judul,$keterangan,$foto)
	{
		$data2 = array(
			'judul' => $judul,
			'keterangan' => $keterangan,
			'foto' => $foto,
		);
		$this->db->insert('tb_berita', $data2);
	}
	public function deleteberita($idberita)
	{
		$this->db->where('id_berita', $idberita);
		$this->db->delete('tb_berita');
	}

	function lihat_penawaran(){
		$this->db->select('*');
		$this->db->from('tb_penawaran');
		
		$query = $this->db->get();

		return $query;
	}

	function lihat_penawaran_id($id){
		$this->db->select('*');
		$this->db->from('tb_penawaran');
		$this->db->where('id_penawaran', $id);
		$query = $this->db->get();

		return $query;
	}

	function terima_penawaran($id,$data){
		
		$where=array('id_penawaran' => $id);
		$table='tb_penawaran';
//var_dump($data);
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function simpan_pertanyaan($data2,$iduser){
		$this->db->where('id_user', $iduser);
		$this->db->delete('pertanyaan');
		$this->db->insert('pertanyaan',$data2);

	}

	function lihat_pertanyaan($id){
		$this->db->select('*');
		$this->db->from('pertanyaan');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function lihat_hasil_pertanyaan($id){
		$this->db->select('*');
		$this->db->from('pertanyaan');
		$this->db->where('id_pertanyaan',$id);
		$query = $this->db->get();

		return $query;
	}

	function simpan_p2covid($data){
		var_dump($data);
		$this->db->insert('p2_covid', $data);
		}

		function lihat_data_p2covid($id){
			$this->db->select('*');
			$this->db->from('p2_covid');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
	
			return $query;
		}
		
		function updateuser($data,$iduser){
			
			$where=array('id_tb_user' => $iduser);
			$this->db->where($where);
			$this->db->update('tb_user', $data);
			
		}

		function lihat_data_laporan_p2k3($id){
			$this->db->select('*');
			$this->db->from('tb_laporan_p2k3');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
	
			return $query;
		}
		function simpan_laporan_p2k3($data){
			$this->db->insert('tb_laporan_p2k3', $data);
		}

		function hapus_laporan_p2k3($data){
			$this->db->where('id_laporan', $data);
			$this->db->delete('tb_laporan_p2k3');
		}

		function simpan_laporan_kecelakaan($data){
			$this->db->insert('tb_kecelakaan', $data);
		}
		function lihat_data_kecelakaan($id){
			$this->db->select('*');
			$this->db->from('tb_kecelakaan');
			$this->db->where('id_user',$id);
			$query = $this->db->get();
	
			return $query;
		}
		function hapus_laporan_kecelakaan($data){
			$this->db->where('id_kecelakaan', $data);
			$this->db->delete('tb_kecelakaan');
		}

		function lihat_data($table){

			$query=$this->db->query($table);
	
		 
		  return $query;
	   }

	
}