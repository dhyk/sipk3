<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_disnaker extends CI_Model
{
   // function __construct() {
   // parent::__construct();
<<<<<<< HEAD
   //}

   function lihat_perusahaan()
   {
      $this->db->select('*');
      $this->db->from('tb_user');
      $this->db->where('level', '2');
      $query = $this->db->get();

      return $query;
   }

   function hitung_p2k3()
   {
      $this->db->select('count(*) as count');
      $this->db->from('tb_laporan_p2k3');
      $query = $this->db->get();

      return $query;
   }
   function hitung_kecelakaan()
   {
      $this->db->select('count(*) as count');
      $this->db->from('tb_kecelakaan');
      $query = $this->db->get();

      return $query;
   }
}
=======
  //}

   function lihat_perusahaan(){
	$this->db->select('*');
	$this->db->from('tb_user');
   $this->db->where('level','2');
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
>>>>>>> e7820baaeb4e4f60773a1b93522edcd2f0eb051c
