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
    'p1'=>$this->input->get('p1'),
    'p2'=>$this->input->get('p2'),
    'p3'=> $this->input->get('p3'),
    'p4'=> $this->input->get('p4'),
    'p5'=> $this->input->get('p5'),
    'p6'=> $this->input->get('p6'),
    'p7'=> $this->input->get('p7'),
    'p8'=> $this->input->get('p8'),
    'p9'=> $this->input->get('p9'),
    'p10'=> $this->input->get('p10'),
    'p11'=> $this->input->get('p11'),
    'p12'=> $this->input->get('p12'),
    'p13'=> $this->input->get('p13'),
    'p14'=> $this->input->get('p14'),
    'p15'=> $this->input->get('p15'),
    'p16'=> $this->input->get('p16'),
    'p17'=> $this->input->get('p17'),
    'id_user'=> $this->session->userdata('id_user')
);

$this->M_admin->simpan_pertanyaan($data);
redirect('index.php/Admin/pertanyaan');
//$this->session->set_userdata('p', $data);

redirect('index.php/Pertanyaan/hasil_pertanyaan');
}

public function hasil_pertanyaan(){
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }
   // echo 'masuk halaman admin';

   $hasil=$this->M_admin->lihat_hasil_pertanyaan($this->input->get('id'))->result();
  
   $this->session->set_userdata('p',$hasil[0]);
  $data = [
        
    'sidebar'=>'Admin/Layouts_admin/sidebar',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/pertanyaan_hasil',
    'footer' => 'Admin/Layouts_admin/footer',
    
  ];

 $this->load->view('template', $data);

}

}
?>