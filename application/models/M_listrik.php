<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_listrik extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}


   function lihat_k3listrik($id){
	$this->db->select('*');
	$this->db->from('k3listrik');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ak3_listrik($id){
	$this->db->select('*');
	$this->db->from('listrik_ak3_listrik');  
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ijin_listrik($id){
	$this->db->select('*');
	$this->db->from('listrik_ijin_listrik');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ijin_petir($id){
	$this->db->select('*');
	$this->db->from('listrik_ijin_petir');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_pemeriksaan_listrik($id){
	$this->db->select('*');
	$this->db->from('listrik_pemeriksaan_listrik');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_pemeriksaan_petir($id){
	$this->db->select('*');
	$this->db->from('listrik_pemeriksaan_petir');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_teknisi($id){
	$this->db->select('*');
	$this->db->from('listrik_teknisi');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }
//-----------------------------------------------------------

	 function simpan_k3listrik($data,$id){
		$this->db->where('id_user', $id);
		$this->db->delete('k3listrik');
		$this->db->insert('k3listrik', $data);
	}
  
	 function simpan_ak3_listrik($data){
        $this->db->insert('listrik_ak3_listrik', $data);  
	}
  
	 function simpan_ijin_listrik($data){
        $this->db->insert('listrik_ijin_listrik', $data);
	}
  
	 function simpan_ijin_petir($data){
        $this->db->insert('listrik_ijin_petir', $data);
	}
  
	 function simpan_pemeriksaan_listrik($data){
        $this->db->insert('listrik_pemeriksaan_listrik', $data);
	}
  
	 function simpan_pemeriksaan_petir($data){
        $this->db->insert('listrik_pemeriksaan_petir', $data);
	}
  
	 function simpan_teknisi($data){
        $this->db->insert('listrik_teknisi', $data);
	}
  
	//-------------------------------------------------------------
  
	 function hapus_k3listrik($data){
		$this->db->where('id_k3listrik', $data);
		$this->db->delete('k3listrik');
	}
  
	 function hapus_ak3_listrik($data){
		$this->db->where('id_ak3_listrik', $data);
        $this->db->delete('listrik_ak3_listrik');  
	}
  
	 function hapus_ijin_listrik($data){
		$this->db->where('id_ijin_listrik', $data);
        $this->db->delete('listrik_ijin_listrik');
	}
  
	 function hapus_ijin_petir($data){
		$this->db->where('id_ijin_petir', $data);
        $this->db->delete('listrik_ijin_petir');
	}
  
	 function hapus_pemeriksaan_listrik($data){
		$this->db->where('id_pemeriksaan', $data);
        $this->db->delete('listrik_pemeriksaan_listrik');
	}
  
	 function hapus_pemeriksaan_petir($data){
		$this->db->where('id_pemeriksaan', $data);
        $this->db->delete('listrik_pemeriksaan_petir');
	}
  
	 function hapus_teknisi($data){
		$this->db->where('id_teknisi', $data);
        $this->db->delete('listrik_teknisi');
	}

}