<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pengaduan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function data_pengaduan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='4'){
      redirect('index.php/Home');
    }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'pengaduan',
      'footer' => 'layouts/footer',
       ];

    $this->load->view('template', $data);
    
  }

  public function tambah_pengaduan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='4'){
      redirect('index.php/Home');
    }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'form_pengaduan',
      'footer' => 'layouts/footer',
       ];

    $this->load->view('template', $data);
    
  }

  


}
