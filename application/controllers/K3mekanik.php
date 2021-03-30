<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class K3mekanik extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_kebakaran');
    // $this->load->model('M_listrik');
    // $this->load->model('M_mekanik');
    $this->load->helper('url');
  }

  public function index()
  {
		//$data['pemesanan'] = $this->m_data->tampil_data()->result();
		//$this->load->view('Admin/dashboard',$data);
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
     // echo 'masuk halaman admin';
    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            // 'head' => 'layouts/head',
      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik',
      'footer' => 'Admin/Layouts_admin/footer',
        // 'data_sertifikat_standard' => $this->M_admin->lihat_sertfikat_standard()->result(),
        // 'data_sertifikat_produk' => $this->M_admin->lihat_sertfikat_produk()->result(),
        // 'data_izin_usaha' => $this->M_admin->lihat_izin_usaha()->result(),

    ];
   // var_dump( $this->M_admin->lihat_berita()->result());
    $this->load->view('template', $data);

  }
  public function tambah_mesin()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_mesin',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_bejana()
  {
     if($this->session->userdata('level')!='2'){
       redirect('index.php/Home');
    }
//echo 'Masuk ah';
    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_bejana',
      'footer' => 'Admin/Layouts_admin/footer',
    ];
    // var_dump($data);

   $this->load->view('template', $data);
  }

  public function tambah_alat_angkat()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_alat_angkat',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_alat_ukur()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_alat_ukur',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_elevator_eskalator()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_elevator_eskalator',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_ketel_uap()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',

      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_ketel_uap',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

}




