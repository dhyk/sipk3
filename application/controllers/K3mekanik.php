<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class K3mekanik extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_kebakaran');
    $this->load->model('M_mekanik');
    $this->load->helper('url');
  }

  public function bejana()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/a_bejana',
      'footer' => 'Admin/Layouts_admin/footer',
     'data_bejana'=> $this->M_mekanik->lihat_bejana($this->session->userdata('id_user'))->result(),
     
    ];
    $this->load->view('template', $data);

  }

  public function ketel()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/b_ketel',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_ketel'=> $this->M_mekanik->lihat_ketel($this->session->userdata('id_user'))->result(),
      
    ];
    $this->load->view('template', $data);

  }

  public function tenaga()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/c_tenaga',
      'footer' => 'Admin/Layouts_admin/footer',
     'data_mesin'=> $this->M_mekanik->lihat_mesin($this->session->userdata('id_user'))->result(),
     
    ];
    $this->load->view('template', $data);

  }

  public function elevator()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/d_elevator',
      'footer' => 'Admin/Layouts_admin/footer',
     'data_elevator'=> $this->M_mekanik->lihat_elevator($this->session->userdata('id_user'))->result(),
     
    ];
    $this->load->view('template', $data);

  }

  public function alatukur()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/e_alatukur',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_ukur'=> $this->M_mekanik->lihat_ukur($this->session->userdata('id_user'))->result(),
      
    ];
    $this->load->view('template', $data);

  }

  public function alatangkat()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/k3_mekanik/f_alatangkut',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_alat_angkat'=> $this->M_mekanik->lihat_angkat($this->session->userdata('id_user'))->result(),
      
     
    ];
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
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

      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/K3_Mekanik/tambah_ketel_uap',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }
//-------------------------------------------------------------
  public function simpan_angkat(){
    $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor'),
      'jenis' => $this->input->post('jenis'),
      'kapasitas' => $this->input->post('kapasitas'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_angkat($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/alatangkat');

  }

   
}

 public function simpan_bejana(){
  $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor'),
      'fungsi' => $this->input->post('fungsi'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    var_dump($data);
    $this->M_mekanik->simpan_bejana($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/bejana');

  }
}

public function simpan_elevator(){
  $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor'),
      'jenis' => $this->input->post('jenis'),
      'kapasitas' => $this->input->post('kapasitas'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_elevator($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/elevator');

  }
}

public function simpan_ketel(){
  $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor'),
      'jenis' => $this->input->post('jenis'),
      'kapasitas' => $this->input->post('kapasitas'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_ketel($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/ketel');

  }
}

public function simpan_ukur(){
  $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor'),
      'jenis' => $this->input->post('jenis'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_ukur($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/alatukur');

  } 
}

public function simpan_mesin(){
  $config['upload_path']          = './upload/upload_berkas_mekanik';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3mekanik');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nama' => $this->input->post('nama'),
      'nomor' => $this->input->post('nomor'),
      'fungsi' => $this->input->post('fungsi'),
      'sertifikat' => $this->input->post('nomor_izin'),
      'tanggal' => $this->input->post('tanggal'),
      'masa' => $this->input->post('masa_berlaku'),
      'tanggal_rekam' => $this->input->post('tanggal_pengujian'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_mesin($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3mekanik/tenaga');

  }  
}

//-------------------------------------------------------------


public function hapus_angkat(){
  $this->M_mekanik->hapus_angkat($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/alatangkat');
    
  }
  
  public function hapus_bejana(){
  $this->M_mekanik->hapus_bejana($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/bejana');
      
  }
  
  public function hapus_elevator(){
  $this->M_mekanik->hapus_elevator($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/elevator');
   
  }
  
  public function hapus_ketel(){
  $this->M_mekanik->hapus_ketel($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/ketel');
   
  }
  
  public function hapus_ukur(){
  $this->M_mekanik->hapus_ukur($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/alatukur');
   
  }
  
  public function hapus_mesin(){
  $this->M_mekanik->hapus_mesin($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3mekanik/tenaga');
  
  }
  


}




