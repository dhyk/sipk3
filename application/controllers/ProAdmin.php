<?php

defined('BASEPATH') or exit('No direct script access allowed');



class ProAdmin extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function index()
  {

    if($this->input->get('id')) $this->session->set_userdata('id_perusahaan',$this->input->get('id'));
    $this->informasi_umum();
  }

  public function dashboard()
  {
    

    $this->menu_assesmen();

    $data = [

      'sidebar' => 'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/dashboard',
      'footer' => 'Profile/Layouts_admin/footer',

    ];

    $this->load->view('template', $data);
  }

  public function pertanyaan()
  {
   

    $data = [

      'sidebar' => 'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/assesment_k3',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function laporan()
  {
    
    $flag = $this->input->get('edit');
    if ($this->session->userdata('p') == null) $flag = 1;
    $this->menu_assesmen();

    $data = [

      'sidebar' => 'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/assesment_k3',
      'footer' => 'Profile/Layouts_admin/footer',
      'edit' => $flag,

    ];

    $this->load->view('template', $data);
  }

  public function menu_assesmen()
  {
    $p = $this->M_admin->lihat_pertanyaan($this->session->userdata('id_perusahaan'))->result();
    $this->session->set_userdata('p', $p);
  }

  


  public function sertfikat_standard()
  {
    $data = [

      'sidebar' => 'Profile/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/informasi_umum',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_sertifikat_standard' => $this->M_admin->lihat_sertifikat_standard()->result()
    ];

    $this->load->view('template', $data);
  }


  public function informasi_umum()
  {
    

    $flag = $this->input->get('edit');
    //var_dump($this->input->get('edit'));

    $data = [
      'sidebar' => 'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/informasi_umum',
      'footer' => 'Profile/Layouts_admin/footer',
      'informasi_umum' => $this->M_admin->lihat_data_id($this->session->userdata('id_perusahaan'))->result(), //ambil data dari db tabel user
      'sertifikat_smk' => $this->M_admin->lihat_smk3($this->session->userdata('id_perusahaan'))->result(), // ambil data dari db sertifikat smk
      'data_standard' => $this->M_admin->lihat_sertfikat_standard($this->session->userdata('id_perusahaan'))->result(), // ambil data dari db sertifikat standard
      'data_produk' => $this->M_admin->lihat_sertfikat_produk($this->session->userdata('id_perusahaan'))->result(), // ambil data dari db sertifikat produk
      'data_izin' => $this->M_admin->lihat_izin_usaha($this->session->userdata('id_perusahaan'))->result(), // ambil data dari db izin usaha
      'data_ahli' => $this->M_admin->lihat_ahlik3($this->session->userdata('id_perusahaan'))->result(), // ambil data dari db ahlik3umum
      'edit' => $flag,
    ];

    $this->load->view('template', $data);
  }
}
