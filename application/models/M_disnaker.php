<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_disnaker extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

   function lihat_perusahaan(){
	$this->db->select('*');
	$this->db->from('tb_user');
    $query = $this->db->get();

    return $query;
 }

 function hitung_p2k3(){
   $this->db->select('count(*) as count');
	$this->db->from('tb_laporan_p2k3');
    $query = $this->db->get();

    return $query;

 }
 function hitung_kecelakaan(){
   $this->db->select('count(*) as count');
	$this->db->from('tb_kecelakaan');
    $query = $this->db->get();

    return $query;

 }
 
}