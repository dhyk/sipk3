<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {        
 // function __construct() {
   // parent::__construct();
  //}

	function tester(){
		return "tes dari model";
	}

	function login_user($username,$password){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get();

		return $query;
	}
function get_id_user($username){
		
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username',$username);
		$query = $this->db->get()->result();

		return $query;
	}
	


	function last_login($username){
		
		$where=array('username' => $username);
		$data=array('last_login' => date('Y-m-d H:i:s'));
		$table='tb_user';

		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function register($data){
var_dump($data);
		$this->db->insert('tb_user',$data);
	}

	function get_level($username){
		return $this->db->from('tb_user')->where('username',$username)->get('level')->result();

	}

	

}