<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function ambil_data($id){
		$this->db->select('*');
		$this->db->from('tb_pengajuan');
		$this->db->where('id_pengajuan',$id);
		$query = $this->db->get();

		return $query;
	}

	function ambil_status($id){
		$this->db->select('status');
		$this->db->from('tb_pengajuan');
		$this->db->where('id_pengajuan',$id);
		$query = $this->db->get();

		return $query;
	}

	function ambil_ttd($id){
		$this->db->select('foto_ttd');
		$this->db->from('tb_user');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function lihat_data_pengajuan(){
		
		$this->db->select('*');
		$this->db->from('tb_pengajuan');
		$query = $this->db->get();

		return $query;
	}

	function lihat_data($id){
		
		$query=$this->db->query($id);
		
		return $query;
	}

	function simpan_pengajuan($data){
		$this->db->insert('tb_pengajuan', $data);
	}

	function hapus_pengaduan($data){
		$this->db->where('id_pengaduan',$data);
		$this->db->delete('pengaduan');
	}

	function update_pengajuan($id,$data){
		$where = ['id_pengajuan'=>$id];
		$this->db->where($where);
		$this->db->update('tb_pengajuan', $data);
	 }
  

	
	
}