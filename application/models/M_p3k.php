<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_p3k extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function simpan_p3k($data){
	$this->db->insert('p3k', $data);
	}

	 function simpan_p3k_petugas($data){
		$this->db->insert('p3k_petugas', $data);
	}
	
	 

	function lihat_p3k($id){
		$this->db->select('*');
		$this->db->from('p3k');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function lihat_p3k_petugas($id){
		$this->db->select('*');
		$this->db->from('p3k_petugas')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 
	 function hapus_p3k($data){
		$this->db->where('id_p3k', $data);
		$this->db->delete('p3k');
	}
	
	 function hapus_p3k_petugas($data){
		$this->db->where('id_petugas', $data);
		$this->db->delete('p3k_petugas');
	}

	

}