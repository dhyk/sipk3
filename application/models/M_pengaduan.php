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

	

	
}