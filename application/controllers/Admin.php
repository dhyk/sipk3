<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function index()
  {
		
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
  }

  public function dashboard()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/dashboard',
      'footer' => 'Admin/Layouts_admin/footer',
      
    ];

    $this->load->view('template', $data);

  }

  public function pertanyaan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/assesment_k3',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);

  }

  public function laporan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/laporan',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_laporan'=>$this->M_admin->lihat_pertanyaan($this->session->userdata('id_user'))->result(),
   
    ];

    $this->load->view('template', $data);

  }
 
   public function logout(){

    $this->session->unset_userdata('username');
    $this->session->unset_userdata('level');
     
    redirect('index.php/Home');
  }


  public function aksi_upload_smk3(){


    $config['upload_path']          = './upload/upload_smk3';
    $config['allowed_types']        = 'pdf';
    $config['max_size']             = 2000;
    // $config['max_width']            = 3000;
    // $config['max_height']           = 3000;

    
    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('berkas')){
      $error = array('error' => $this->upload->display_errors());
     redirect('index.php/Admin/informasi_umum');
    }else{
      $data = array('upload_data' => $this->upload->data());

      $berkas=$this->upload->data('file_name');
     $id_user=$this->session->userdata('id_user');
     $this->M_admin->savesmk3($berkas,$id_user);
      $this->session->set_flashdata('flash','disimpan');
      redirect('index.php/Admin/informasi_umum');

    }
  }



  public function sertfikat_standard()
  {
    $data = [
         
      'sidebar'=>'Admin/Layouts_admin/sidebar',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/informasi_umum',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_sertifikat_standard' => $this->M_admin->lihat_sertifikat_standard()->result()
    ];
 
    $this->load->view('template', $data);

  }


public function informasi_umum()
{
  if($this->session->userdata('level')!='2'){ // cek level hanya user yang dapat akses
    redirect('index.php/Home');
  }

  $data = [
    'sidebar'=>'Admin/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/informasi_umum',
    'footer' => 'Admin/Layouts_admin/footer',
    'informasi_umum'=> $this->M_admin->lihat_data_user($this->session->userdata('username'))->result(), //ambil data dari db tabel user
    'sertifikat_smk' => $this->M_admin->lihat_smk3($this->session->userdata('id_user'))->result(), // ambil data dari db sertifikat smk
    'data_standard' => $this->M_admin->lihat_sertfikat_standard($this->session->userdata('id_user'))->result(), // ambil data dari db sertifikat standard
    'data_produk' => $this->M_admin->lihat_sertfikat_produk($this->session->userdata('id_user'))->result(), // ambil data dari db sertifikat produk
    'data_izin' => $this->M_admin->lihat_izin_usaha($this->session->userdata('id_user'))->result(), // ambil data dari db izin usaha
    'data_ahli' => $this->M_admin->lihat_ahlik3($this->session->userdata('id_user'))->result(), // ambil data dari db ahlik3umum

  ];

  $this->load->view('template', $data);

}

public function tambah_sertifikat_standard()
{
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }

  $data = [
    'sidebar'=>'Admin/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/tambah_sertifikat_standard',
    'footer' => 'Admin/Layouts_admin/footer',
  ];

  $this->load->view('template', $data);
}   

public function aksi_upload_sertifikat_standard(){
  $nama = $this->input->post('nama');
  $tanggal = $this->input->post('tanggal_terbit');
  $masa = $this->input->post('masa_berlaku');
  $id = $this->session->userdata('id_user');
  
  $config['upload_path']          = './upload/upload_sertifikat_standard';
  $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
  $config['max_size']             = 2000;
  $config['max_width']            = 3000;
  $config['max_height']           = 3000;

  
  $this->upload->initialize($config);

  if ( ! $this->upload->do_upload('berkas')){
    $error = array('error' => $this->upload->display_errors());

    // $this->tambahberita();
  }else{
    $data = array('upload_data' => $this->upload->data());

    $foto=$this->upload->data('file_name');
  
    $this->M_admin->save_sertifikat_standard($nama,$tanggal,$masa,$foto,$id);
    $this->session->set_flashdata('flash','disimpan');

    $this->informasi_umum();
  }
}

public function hapus_sertifikat_standard(){
  $this->M_admin->hapus_sertifikat_standard($this->input->get('id'));
  $this->informasi_umum();
}


public function tambah_sertifikat_produk()
{
  if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

 $data = [

  'sidebar'=>'Admin/Layouts_admin/sidebarnew',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Admin/tambah_sertifikat_produk',
  'footer' => 'Admin/Layouts_admin/footer',
];

$this->load->view('template', $data);
// echo "masuk";
}

public function aksi_tambah_sertifikat_produk(){
  $nama = $this->input->post('nama');
  $tanggal = $this->input->post('terbit');
  $masa = $this->input->post('masa');
  $id = $this->session->userdata('id_user');
  
  $this->M_admin->save_sertifikat_produk($nama,$tanggal,$masa,$id);
  $this->session->set_flashdata('flash','disimpan');

  $this->informasi_umum();
  }

  public function hapus_sertifikat_produk(){
   $this->M_admin->hapus_sertifikat_produk($this->input->get('id'));
   // echo "hapuuss";
   $this->informasi_umum();
  }

  
public function tambah_izin_berusaha()
{
  if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

 $data = [
  'sidebar'=>'Admin/Layouts_admin/sidebarnew',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Admin/tambah_izin_berusaha',
  'footer' => 'Admin/Layouts_admin/footer',
];

$this->load->view('template', $data);
}

public function aksi_tambah_izin_berusaha(){

  $nama = $this->input->post('nama');
  $nomor = $this->input->post('nomor');
  $tanggal = $this->input->post('terbit');
  $masa = $this->input->post('masa');
  $id = $this->session->userdata('id_user');
  
   $this->M_admin->save_izin_berusaha($nama,$nomor,$tanggal,$masa,$id);
  $this->session->set_flashdata('flash','disimpan');

  $this->informasi_umum();
  }

  public function hapus_izin_berusaha(){
    $this->M_admin->hapus_izin_berusaha($this->input->get('id'));
   // echo "hapuuss";
   $this->informasi_umum();
  }


  public function tambah_daftar_ahlik3()
  {
    if($this->session->userdata('level')!='2'){
        redirect('index.php/Home');
      }
  
   $data = [
             
    'sidebar'=>'Admin/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/tambah_daftar_k3_umum',
    'footer' => 'Admin/Layouts_admin/footer',
  ];
  
  $this->load->view('template', $data);
  }            
  
  public function aksi_tambah_ahlik3(){
  
    $nama = $this->input->post('nama');
    $nomor = $this->input->post('nomor');
    $tanggal = $this->input->post('tanggal');
    $masa = $this->input->post('masa');
    $id = $this->session->userdata('id_user');
    
     $this->M_admin->save_ahlik3($nama,$nomor,$tanggal,$masa,$id);
    $this->session->set_flashdata('flash','disimpan');
  
    $this->informasi_umum();
    }
  
    public function hapus_ahlik3(){
      $this->M_admin->hapus_ahlik3($this->input->get('id'));
     $this->informasi_umum();
    }


}


    




