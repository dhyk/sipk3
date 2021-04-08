<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ProP3K extends CI_Controller {
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
		
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $isi=$this->M_p3k->lihat_p3k($this->session->userdata('id_perusahaan'))->result();
    
    $flag= $this->input->get('edit');
    if($isi==null)$flag=1;
    $data = [
         
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/P3K/a_P3K',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_p3k'=>$this->M_p3k->lihat_p3k($this->session->userdata('id_perusahaan'))->result(),
      'edit' => $flag
    ];
  
    $this->load->view('template', $data);

  }


  
  public function petugas()
  {
		
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
   
    $data = [
         
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/P3K/b_petugas',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_petugas'=>$this->M_p3k->lihat_p3k_petugas($this->session->userdata('id_perusahaan'))->result(),
     
    ];
  
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

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/P3K/tambah_petugas',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function simpan_p3k(){
    $data= array(
'id_user'=>$this->session->userdata('id_perusahaan'),
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
    $this->M_p3k->simpan_p3k($data,$this->session->userdata('id_perusahaan'));
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/P3K');

  }

  public function simpan_p3k_petugas(){
      $data=array(
        'id_user'=>$this->session->userdata('id_perusahaan'),
        'nama'=>$this->input->post('nama'),
        'nomor'=>$this->input->post('nomor'),
        'tanggal'=>$this->input->post('tanggal'),
        'masa'=>$this->input->post('masa'),
      );
      $this->M_p3k->simpan_p3k_petugas($data);
      $this->session->set_flashdata('flash','disimpan');
      redirect('index.php/P3K/petugas');
  } 

  
  public function hapus_p3k(){


  }

  public function hapus_p3k_petugas(){
    $this->M_p3k->hapus_p3k_petugas($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/P3K/petugas');

  } 
}




