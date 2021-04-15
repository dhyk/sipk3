<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pengawas extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function daftar_tugas()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/daftar_tugas',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);
    
  }
  public function detail_tugas()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/detail_tugas',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);
    
  }

  public function tambah_tindakan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/tambah_tindakan',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);
    
  }
  


}
