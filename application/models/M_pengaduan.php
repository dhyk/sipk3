<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function lihat_data_user($id){
		
		$this->db->select('*');
		$this->db->from('tb_user_pengadu');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function lihat_data_pengaduan($id){
		
		$this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function simpan_pengaduan($data){
		$this->db->insert('pengaduan', $data);
	}

	function hapus_pengaduan($data){
		$this->db->where('id_pengaduan',$data);
		$this->db->delete('pengaduan');
	}

	

	
}