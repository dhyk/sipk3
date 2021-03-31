<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class K3listrik extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_listrik');
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
      'content' => 'Admin/k3_listrik',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_k3listrik'=> $this->M_listrik->lihat_k3listrik($this->session->userdata('id_user'))->result(),
      'data_ak3'=> $this->M_listrik->lihat_ak3_listrik($this->session->userdata('id_user'))->result(),
      'data_ijin_listrik'=> $this->M_listrik->lihat_ijin_listrik($this->session->userdata('id_user'))->result(),
      'data_ijin_petir'=> $this->M_listrik->lihat_ijin_petir($this->session->userdata('id_user'))->result(),
      'data_pemeriksaan_listrik'=> $this->M_listrik->lihat_pemeriksaan_listrik($this->session->userdata('id_user'))->result(),
      'data_pemeriksaan_petir'=> $this->M_listrik->lihat_pemeriksaan_petir($this->session->userdata('id_user'))->result(),
      'data_teknisi'=> $this->M_listrik->lihat_teknisi($this->session->userdata('id_user'))->result(),
        // 'data_sertifikat_standard' => $this->M_admin->lihat_sertfikat_standard()->result(),
        // 'data_sertifikat_produk' => $this->M_admin->lihat_sertfikat_produk()->result(),
        // 'data_izin_usaha' => $this->M_admin->lihat_izin_usaha()->result(),

    ];
   // var_dump( $this->M_admin->lihat_berita()->result());
    $this->load->view('template', $data);

  }
  public function tambah_teknisi()
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
      'content' => 'Admin/K3_Listrik/tambah_teknisi',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_ak3_listrik()
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
      'content' => 'Admin/K3_Listrik/tambah_ak3_listrik',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_kelayakan_listrik()
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
      'content' => 'Admin/K3_Listrik/tambah_kelayakan_listrik',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_kelayakan_petir()
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
      'content' => 'Admin/K3_Listrik/tambah_kelayakan_petir',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_pemeriksaan_listrik()
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
      'content' => 'Admin/K3_Listrik/tambah_rekaman_pemeriksaan_listrik',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_pemeriksaan_petir()
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
      'content' => 'Admin/Kebakaran/tambah_rekaman_pemeriksaan_petir',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

//-------------------------------------------------------------
  public function simpan_k3listrik(){

    $data=array(
      'pembangkit_listrik' =>$this->input->post('pembangkit'),
      'sumber_bahaya' =>$this->input->post('bahaya'),
      'standar_instalasi' =>$this->input->post('standar'),
      'ada_k3' =>$this->input->post('ak3'),
      'ada_teknisi'=>$this->input->post('teknisi'),
      'id_user'=>$this->session->userdata('id_user'),
);
// var_dump($data);
$this->M_listrik->simpan_k3listrik($data);
$this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3listrik');
  }

  public function simpan_ak3_listrik(){
      $data=array(
        'nama'=>$this->input->post('nama'),
        'sertifikat'=>$this->input->post('nomor'),
        'tanggal_terbit'=>$this->input->post('tanggal'),
        'masa_berlaku'=>$this->input->post('masa'),
        'id_user'=>$this->session->userdata('id_user'),
      );
      $this->M_listrik->simpan_ak3_listrik($data);
      $this->session->set_flashdata('flash','disimpan');
          redirect('index.php/K3listrik');

  }

  public function simpan_ijin_listrik(){
    $data=array(
      
      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_user'),
    );
    $this->M_listrik->simpan_ijin_listrik($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik');
  }

  public function simpan_ijin_petir(){
    $data=array(

      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_user'),
    );
    $this->M_listrik->simpan_ijin_petir($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik');
  }

  public function simpan_pemeriksaan_listrik(){
    $config['upload_path']          = './upload/upload_berkas_listrik';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 2000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;
  
    
    $this->upload->initialize($config);
  
    if ( ! $this->upload->do_upload('berkas')){
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash','Gagal');
      redirect('index.php/Kwlistrik');
    }else{
      $berkas=$this->upload->data('file_name');


    $data=array(
      'sertifikat'=>$berkas,
      'tanggal_pemeriksaan'=>$this->input->post('tanggal'),
      'id_user'=>$this->session->userdata('id_user'),
    );
    $this->M_listrik->simpan_pemeriksaan_listrik($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik');
  }
}

  public function simpan_pemeriksaan_petir(){
    $config['upload_path']          = './upload/upload_berkas_listrik';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 2000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;
  
    
    $this->upload->initialize($config);
  
    if ( ! $this->upload->do_upload('berkas')){
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash','Gagal');
      redirect('index.php/K3listrik');
    }else{
      $berkas=$this->upload->data('file_name');


    $data=array(
      'sertifikat'=>$berkas,
      'tanggal_pemeriksaan'=>$this->input->post('tanggal'),
      'id_user'=>$this->session->userdata('id_user'),
    );
    $this->M_listrik->simpan_pemeriksaan_petir($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik');
  }
}

  public function simpan_teknisi(){
    $data=array(
      'nama'=>$this->input->post('nama'),
      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_user'),
    );
    $this->M_listrik->simpan_teknisi($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik');

  }

  //-------------------------------------------------------------

  public function hapus_k3listrik(){

  }
  
  public function hapus_ak3_listrik(){
  
  }
  
  public function hapus_ijin_listrik(){
  
  }
  
  public function hapus_ijin_petir(){
  
  }
  
  public function hapus_pemeriksaan_listrik(){
  
  }
  
  public function hapus_pemeriksaan_petir(){
  
  }
  
  public function hapus_teknisi(){
    
  }



}




