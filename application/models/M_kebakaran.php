<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_kebakaran extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function simpan_kebakaran_utama($data){
	$this->db->insert('tb_kebakaran', $data);
	}

	 function simpan_kebakaran_ak3($data){
		$this->db->insert('tb_kebakaran_ak3', $data);
	}
	
	 function simpan_kebakaran_alarm($data){
		$this->db->insert('tb_kebakaran_alarm', $data);
	}
	
	 function simpan_kebakaran_apar($data){
		$this->db->insert('tb_kebakaran_apar', $data);
	}
	
	 function simpan_kebakaran_gladi($data){
		$this->db->insert('tb_kebakaran_gladi', $data);
	}
	
	 function simpan_kebakaran_hydrant($data){
		$this->db->insert('tb_kebakaran_hydrant', $data);
	}
	
	 function simpan_kebakaran_instalasi($data){
		$this->db->insert('tb_kebakaran_instalasi', $data);
	}
	
	 function simpan_kebakaran_penanggulangan($data){
		$this->db->insert('tb_kebakaran_penanggulangan', $data);
	}
	
	 function simpan_kebakaran_petugas($data){
		$this->db->insert('tb_kebakaran_petugas', $data);
	}
	
	 function simpan_kebakaran_sprinkler($data){
		$this->db->insert('tb_kebakaran_sprinkler', $data);
	}
	

	function lihat_data_kebakaran($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran');
		$this->db->where('id_user',$id);
		$query = $this->db->get();

		return $query;
	}

	function lihat_kebakaran_ak3($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_ak3')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_alarm($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_alarm')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_apar($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_apar')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_gladi($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_gladi')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_hydrant($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_hydrant')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_instalasi($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_instalasi')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_penanggulangan($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_penanggulangan')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}
	
	 function lihat_kebakaran_petugas($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_petugas')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	 }

	 function lihat_kebakaran_sprinkler($id){
		$this->db->select('*');
		$this->db->from('tb_kebakaran_sprinkler')	;
	$this->db->where('id_user',$id);
	$query = $this->db->get();

	return $query;
	}

	function hapus_data_kebakaran($id){
		$this->db->where('id_user', $id);
		$this->db->delete('tb_kebakaran');
	}

	function hapus_kebakaran_ak3($data){
		$this->db->where('id_ak3', $data);
		$this->db->delete('tb_kebakaran_ak3');
	}
	
	 function hapus_kebakaran_alarm($data){
		$this->db->where('id_alarm', $data);
		$this->db->delete('tb_kebakaran_alarm');
	}
	
	 function hapus_kebakaran_apar($data){
		$this->db->where('id_apar', $data);
		$this->db->delete('tb_kebakaran_apar');
	}
	
	 function hapus_kebakaran_gladi($data){
		$this->db->where('id_gladi', $data);
		$this->db->delete('tb_kebakaran_gladi');
	}
	
	 function hapus_kebakaran_hydrant($data){
		$this->db->where('id_hydrant', $data);
		$this->db->delete('tb_kebakaran_hydrant');
	}
	
	 function hapus_kebakaran_instalasi($data){
		$this->db->where('id_instalasi', $data);
		$this->db->delete('tb_kebakaran_instalasi');
	}
	
	 function hapus_kebakaran_penanggulangan($data){
		$this->db->where('id_penanggulangan', $data);
		$this->db->delete('tb_kebakaran_penanggulangan');
	}
	
	 function hapus_kebakaran_petugas($data){
		$this->db->where('id_petugas', $data);
		$this->db->delete('tb_kebakaran_petugas');
	}
	
	 function hapus_kebakaran_sprinkler($data){
		$this->db->where('id_sprinkler', $data);
		$this->db->delete('tb_kebakaran_sprinkler');
	}

	

}