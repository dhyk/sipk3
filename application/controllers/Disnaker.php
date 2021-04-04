<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Disnaker extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function dashboard()
  {
    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }


    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/dashboard0',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);

  }

  public function daftar_sertifikat_alat()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_sertifikat_alat',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function daftar_sertifikat_personel()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_sertifikat_personel',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function daftar_laporan_kecelakaan()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_laporan_kecelakaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function laporan_pemeriksaan()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_pemeriksaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function laporan_p2k3()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_p2k3',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function laporan_kecelakaan()
  {

    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_kecelakaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),
      
    ];

    $this->load->view('template', $data);
  }



}
