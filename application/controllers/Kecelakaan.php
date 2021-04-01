<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kecelakaan extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
    $this->load->model('M_admin');
   
    $this->load->helper('url');
  }

public function index()
{
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }

 $data = [

  'sidebar'=>'Admin/Layouts_admin/sidebar',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Admin/kecelakaan_kerja',
  'footer' => 'Admin/Layouts_admin/footer',
];

$this->load->view('template', $data);
}

public function tambah_laporan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

   $data = [

    'sidebar'=>'Admin/Layouts_admin/sidebar',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/tambah_lap_kecelakaan',
    'footer' => 'Admin/Layouts_admin/footer',
  ];

  $this->load->view('template', $data);
}

}
?>