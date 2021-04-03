<?php


defined('BASEPATH') OR exit('No direct script access allowed');



class Pertanyaan extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
    $this->load->model('M_admin');
   
    $this->load->helper('url');
  }

public function simpan_pertanyaan(){

$data=array(
    'p1'=>$this->input->post('p1'),
    'p2'=>$this->input->post('p2'),
    'p3'=> $this->input->post('p3'),
    'p4'=> $this->input->post('p4'),
    'p5'=> $this->input->post('p5'),
    'p6'=> $this->input->post('p6'),
    'p7'=> $this->input->post('p7'),
    'p8'=> $this->input->post('p8'),
    'p9'=> $this->input->post('p9'),
    'p10'=> $this->input->post('p10'),
    'p11'=> $this->input->post('p11'),
    'p12'=> $this->input->post('p12'),
    'p13'=> $this->input->post('p13'),
    'p14'=> $this->input->post('p14'),
    'p15'=> $this->input->post('p15'),
    'p16'=> $this->input->post('p16'),
    'p17'=> $this->input->post('p17'),
    'id_user'=> $this->session->userdata('id_user')
);

$this->M_admin->simpan_pertanyaan($data,$this->session->userdata('id_user'));
redirect('index.php/Admin/laporan');

}



}
?>