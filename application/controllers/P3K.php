<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class P3K extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_p3k');
    // $this->load->model('M_listrik');
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
      'content' => 'Admin/p3k',
      'footer' => 'Admin/Layouts_admin/footer',
      
      'data_p3k'=>$this->M_p3k->lihat_p3k($this->session->userdata('id_user'))->result(),
      'data_petugas'=>$this->M_p3k->lihat_p3k_petugas($this->session->userdata('id_user'))->result(),
        // 'data_sertifikat_standard' => $this->M_admin->lihat_sertfikat_standard()->result(),
        // 'data_sertifikat_produk' => $this->M_admin->lihat_sertfikat_produk()->result(),
        // 'data_izin_usaha' => $this->M_admin->lihat_izin_usaha()->result(),

    ];
   // var_dump( $this->M_admin->lihat_berita()->result());
    $this->load->view('template', $data);

  }
  public function tambah_petugas()
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
      'content' => 'Admin/P3K/tambah_petugas',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function simpan_p3k(){
    $data= array(
'id_user'=>$this->session->userdata('id_user'),
'kategori' =>$this->input->post('kategori'),
'jumlah_shift'=>$this->input->post('shift'),
'tenaga_kerja'=>$this->input->post('tenaga'),
'jumlah_petugas'=>$this->input->post('petugas'),
'jumlah_unit'=>$this->input->post('unit'),
'ruang_p3k'=>$this->input->post('ruang'),
'jumlah_p3ka'=>$this->input->post('p3ka'),
'jumlah_p3kb'=>$this->input->post('p3kb'),
'jumlah_p3kc'=>$this->input->post('p3kc'),

    );
    $this->M_p3k->simpan_p3k($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/P3K');

  }

  public function simpan_p3k_petugas(){
      $data=array(
        'id_user'=>$this->session->userdata('id_user'),
        'nama'=>$this->input->post('nama'),
        'nomor'=>$this->input->post('nomor'),
        'tanggal'=>$this->input->post('tanggal'),
        'masa'=>$this->input->post('masa'),
      );
      $this->M_p3k->simpan_p3k_petugas($data);
      $this->session->set_flashdata('flash','disimpan');
      redirect('index.php/P3K');
  } 

  
  public function hapus_p3k(){


  }

  public function hapus_p3k_petugas(){


  } 
}




