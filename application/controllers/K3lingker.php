<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class K3lingker extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_kebakaran');
    $this->load->model('M_lingker');
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
      'content' => 'Admin/k3_lingker',
      'footer' => 'Admin/Layouts_admin/footer',
        // 'data_sertifikat_standard' => $this->M_admin->lihat_sertfikat_standard()->result(),
        // 'data_sertifikat_produk' => $this->M_admin->lihat_sertfikat_produk()->result(),
        // 'data_izin_usaha' => $this->M_admin->lihat_izin_usaha()->result(),

    ];
   // var_dump( $this->M_admin->lihat_berita()->result());
    $this->load->view('template', $data);

  }
  public function tambah_juru_las()
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
      'content' => 'Admin/K3_Lingker/tambah_juru_las',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_ak3_lingker()
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
      'content' => 'Admin/K3_Lingker/tambah_ak3_lingker',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_pemeriksaan()
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
      'content' => 'Admin/K3_Lingker/tambah_pemeriksaan',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_pengukuran_lingker()
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
      'content' => 'Admin/K3_Lingker/tambah_pengukuran_lingker',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_penerapan_higiene()
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
      'content' => 'Admin/K3_Lingker/tambah_rekaman_penerapan_higiene',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_tenaga_kerja()
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
      'content' => 'Admin/K3_Lingker/tambah_tenaga_kerja',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_tk_ruang()
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
      'content' => 'Admin/K3_Lingker/tambah_tk_ruang',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  
  public function simpan_jurulas(){
    
      $data= array(
        'id_user' => $this->session->userdata('id_user'),
        'nama' => $this->input->post('nama'),
        'klasifikasi' => $this->input->post('klasifikasi'),
        'sertifikat' => $this->input->post('nomor_sertifikat'),
        'tanggal_terbit' => $this->input->post('tanggal'),
        'masa_berlaku' => $this->input->post('masa_berlaku'),
      );
      $this->M_mekanik->simpan_jurulas($data);
      $this->session->set_flashdata('flash','disimpan');
      redirect('index.php/K3lingker');
    
}

public function simpan_higiene($data){
  $config['upload_path']          = './upload/upload_berkas_lingker';
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
      'nomor' => $this->input->post('nomor_laporan'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_higiene($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker');

  }

}

public function simpan_k3($data){
  $data= array(
    'id_user' => $this->session->userdata('id_user'),
    'nama' => $this->input->post('nama'),
    'jenjang' => $this->input->post('jenjang'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_mekanik->simpan_k3($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker');
}

public function simpan_ketinggian($data){
  $data= array(
    'id_user' => $this->session->userdata('id_user'),
    'nama' => $this->input->post('nama'),
    'kompetensi' => $this->input->post('kompetensi'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal_terbit'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_mekanik->simpan_ketinggian($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker');
}

public function simpan_pemeriksaan($data){
  $config['upload_path']          = './upload/upload_berkas_lingker';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3lingker');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'jenis' => $this->input->post('jenis'),
      'nama' => $this->input->post('nama_pelaksana'),
      'lembaga' => $this->input->post('lembaga_pelaksana'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_pemeriksaan($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker');

  }
}

public function simpan_rekaman($data){
  $config['upload_path']          = './upload/upload_berkas_lingker';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 10000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());
    $this->session->set_flashdata('flash','Gagal');
    redirect('index.php/K3lingker');
  }else{
    $data = array('upload_data' => $this->upload->data());
    $berkas=$this->upload->data('file_name');
    
    $data= array(
      'id_user' => $this->session->userdata('id_user'),
      'nomor' => $this->input->post('nomor_laporan'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_mekanik->simpan_rekaman($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker');

  }
}

public function simpan_ruang($data){
  $data= array(
    'id_user' => $this->session->userdata('id_user'),
    'nama' => $this->input->post('nama'),
    'jenjang' => $this->input->post('jenjang'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_mekanik->simpan_ruang($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker');
}

//-------------------------------------------------------------


public function hapus_jurulas($data){
    $this->M_lingker->hapus_jurulas($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3lingker');
}

public function hapus_higien($data){
  $this->M_lingker->hapus_higiene($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

public function hapus_k3($data){
  $this->M_lingker->hapus_k3($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

public function hapus_ketinggian($data){
  $this->M_lingker->hapus_ketinggian($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

public function hapus_pemeriksaan($data){
  $this->M_lingker->hapus_pemeriksaan($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

public function hapus_rekaman($data){
  $this->M_lingker->hapus_rekaman($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

public function hapus_ruang($data){
  $this->M_lingker->hapus_ruang($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker');
}

}




