<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengawas extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function lihat_tindakan(){
		
		$this->db->select('*');
		$this->db->from('tb_tindakan');
		$query = $this->db->get();

		return $query;
	}

	function simpan_tindakan($data){
		$this->db->insert('tb_tindakan', $data);
	}

	function lihat_pengawas($id){
		$this->db->select('*');
		$this->db->from('data_pengawas')	;
      $this->db->where('id_user',$id);
      $query = $this->db->get();

	   return $query;
	}

	function lihat_detail_pengaduan($id){
		$this->db->select('*');
		$this->db->from('pengaduan');
      $this->db->join('tb_user_pengadu','pengaduan.id_user=tb_user_pengadu.id_user');
    $this->db->where(['id_pengaduan'=>$id]);
      $query = $this->db->get();

	   return $query;
	}

	function lihat_data($sql){
		return $this->db->query($sql);
	}

	function hapus_tindakan($id){
		$this->db->where('id_tindakan', $id);
		$this->db->delete('tb_tindakan');
	}
	
}