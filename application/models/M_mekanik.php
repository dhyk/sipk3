<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_mekanik extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}



 function lihat_angkat($id){
	$this->db->select('*');
	$this->db->from('tb_mekanik_angkat');  
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_bejana($id){
	$this->db->select('*');
	$this->db->from('lihat_mekanik_bejana');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_elevator($id){
	$this->db->select('*');
	$this->db->from('tb_mekanik_elevator');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ketel($id){
	$this->db->select('*');
	$this->db->from('tb_mekanik_ketel');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_ukur($id){
	$this->db->select('*');
	$this->db->from('tb_mekanik_ukur');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }

 function lihat_mesin($id){
	$this->db->select('*');
	$this->db->from('tb_mekanik_mesin');
$this->db->where('id_user',$id);
$query = $this->db->get();

return $query;
 }
//-----------------------------------------------------------

  
	 function simpan_angkat($data){
        $this->db->insert('tb_mekanik_angkat', $data);  
	}
  
	 function simpan_bejana($data){
        $this->db->insert('tb_mekanik_bejana', $data);
	}
  
	 function simpan_elevator($data){
        $this->db->insert('tb_mekanik_elevator', $data);
	}
  
	 function simpan_ketel($data){
        $this->db->insert('tb_mekanik_ketel', $data);
	}
  
	 function simpan_ukur($data){
        $this->db->insert('tb_mekanik_ukur', $data);
	}
  
	 function simpan_mesin($data){
        $this->db->insert('tb_mekanik_mesin', $data);
	}
  
	//-------------------------------------------------------------
  
  
	 function hapus_angkat($data){
		$this->db->where('id_angkat', $data);
        $this->db->delete('tb_mekanik_angkat');  
	}
  
	 function hapus_bejana($data){
		$this->db->where('id_bejana', $data);
        $this->db->delete('tb_mekanik_bejana');
	}
  
	 function hapus_elevator($data){
		$this->db->where('id_elevator', $data);
        $this->db->delete('tb_mekanik_elevator');
	}
  
	 function hapus_ketel($data){
		$this->db->where('id_ketel', $data);
        $this->db->delete('tb_mekanik_ketel');
	}
  
	 function hapus_ukur($data){
		$this->db->where('id_ukur', $data);
        $this->db->delete('tb_mekanik_ukur');
	}
  
	 function hapus_mesin($data){
		$this->db->where('id_mesin', $data);
        $this->db->delete('tb_mekanik_mesin');
	}
}