<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_lingker extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}



 function lihat_jurulas($id){
	$this->db->select('*');
	$this->db->from('lingker_jurulas');  
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_higiene($id){
	$this->db->select('*');
	$this->db->from('lingker_higiene');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_k3($id){
	$this->db->select('*');
	$this->db->from('lingker_k3');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ketinggian($id){
	$this->db->select('*');
	$this->db->from('lingker_ketinggian');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_pemeriksaan($id){
	$this->db->select('*');
	$this->db->from('lingker_pemeriksaan');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_rekaman($id){
	$this->db->select('*');
	$this->db->from('lingker_rekaman');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ruang($id){
	$this->db->select('*');
	$this->db->from('lingker_ruang');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }
//-----------------------------------------------------------

  
	 function simpan_jurulas($data){
        $this->db->insert('lingker_jurulas', $data);  
	}
  
	 function simpan_higiene($data){
        $this->db->insert('lingker_higiene', $data);
	}
  
	 function simpan_k3($data){
        $this->db->insert('lingker_k3', $data);
	}
  
	 function simpan_ketinggian($data){
        $this->db->insert('lingker_ketinggian', $data);
	}
  
	 function simpan_pemeriksaan($data){
        $this->db->insert('lingker_pemeriksaan', $data);
	}
  
	 function simpan_rekaman($data){
        $this->db->insert('lingker_rekaman', $data);
	}

    function simpan_ruang($data){
        $this->db->insert('lingker_ruang', $data);
	}
  
	//-------------------------------------------------------------
  
  
	 function hapus_jurulas($data){
		$this->db->where('id_jurulas', $data);
        $this->db->delete('lingker_jurulas');  
	}
  
	 function hapus_higien($data){
		$this->db->where('id_higiene', $data);
        $this->db->delete('lingker_higiene');
	}
  
	 function hapus_k3($data){
		$this->db->where('id_k3', $data);
        $this->db->delete('lingker_k3');
	}
  
	 function hapus_ketinggian($data){
		$this->db->where('id_ketinggian', $data);
        $this->db->delete('lingker_ketinggian');
	}
  
	 function hapus_pemeriksaan($data){
		$this->db->where('id_pemeriksaan', $data);
        $this->db->delete('lingker_pemeriksaan');
	}
  
	 function hapus_rekaman($data){
		$this->db->where('id_rekaman', $data);
        $this->db->delete('lingker_rekaman');
	}

    function hapus_ruang($data){
		$this->db->where('id_ruang', $data);
        $this->db->delete('lingker_ruang');
	}
}