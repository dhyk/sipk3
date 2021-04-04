<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_listrik extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

   function lihat_daftar_sertifikat($id){
	$this->db->select('*');
	$this->db->from('k3listrik');
    $this->db->where('id_user',$id);
    $query = $this->db->get();

    return $query;
 }
}