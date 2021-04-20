<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_disnaker extends CI_Model
{
   // function __construct() {
   // parent::__construct();
   //}

   function lihat_perusahaan()
   {
      $this->db->select('*');
      $this->db->from('tb_user');
      $this->db->where('level', '2');
      $query = $this->db->get();

      return $query;
   }


   function d_pengawas()
   {
      $this->db->select('*');
      $this->db->from('data_pengawas');
      $this->db->where('nama');
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
   function hitung_aduan()
   {
      $this->db->select('count(*) as count');
      $this->db->from('pengaduan');
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

   function hitung_perusahaan()
   {
      $this->db->select('count(*) as count');
      $this->db->from('tb_user');
      $this->db->where('level', '2');
      $query = $this->db->get();

      return $query;
   }
   function simpan_pengawas($data){
		$this->db->insert('data_pengawas', $data);
	}

   function lihat_pengawas($id){
		$this->db->select('*');
		$this->db->from('data_pengawas')	;
      $this->db->where('id_user',$id);
      $query = $this->db->get();

	   return $query;
	}
   function hapus_pengawas($data){
		$this->db->where('id_pengawas', $data);
		$this->db->delete('data_pengawas');
	}

   function lihat_data_pengaduan(){
		$this->db->select('*');
		$this->db->from('pengaduan');
      $this->db->join('tb_user_pengadu','pengaduan.id_user=tb_user_pengadu.id_user');
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

   function ubah_pengaduan($where,$data){

      $this->db->where($where);
		$this->db->update('pengaduan', $data);
   }


  //}

 
}
