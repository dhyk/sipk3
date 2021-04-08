<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProLaporan extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
    $this->load->model('M_admin');
   
    $this->load->helper('url');
  }

public function index()
{
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }

  $isi=$this->M_admin->lihat_data_kecelakaan($this->session->userdata('id_perusahaan'))->result();
  $sumber=[1,1,1,1];
  if($isi!=null )$sumber=explode(';',$isi[0]->sumber);
  
 
  $data = [

  'sidebar'=>'Profile/Layouts_admin/sidebarnew',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Profile/kecelakaan_kerja',
  'footer' => 'Profile/Layouts_admin/footer',
  'data_kecelakaan' => $isi ,
  'sumber'=>$sumber,
 
];

$this->load->view('template', $data);
}

public function tambah_laporan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

   $data = [

    'sidebar'=>'Profile/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Profile/tambah_lap_kecelakaan',
    'footer' => 'Profile/Layouts_admin/footer',
  ];

  $this->load->view('template', $data);
}

public function simpan_kecelakaan()
  {
    $data = array(
      'waktu' => $this->input->post('waktu'),
      'stasiun' => $this->input->post('stasiun'),
      'jenis' => $this->input->post('jenis'),
      'jumlah' => $this->input->post('jumlah'),
      'usia' => $this->input->post('usia'),
      'jk' => $this->input->post('gender'),
      'kategori' => $this->input->post('kategori'),
      'bagian' => $this->input->post('bagian'),
      'k_unsafe_action' => $this->input->post('unsafe_action'),
      'k_unsafe_condition' => $this->input->post('unsafe_condition'),
      'sumber' => $this->input->post('peralatan').';'
      .$this->input->post('metode').';'
      .$this->input->post('lingkungan').';'
      .$this->input->post('proses'),
      'pengendalian' => $this->input->post('pengendalian'),
      'id_user' => $this->session->userdata('id_perusahaan'),
    );
    $this->M_admin->simpan_laporan_kecelakaan($data);
    $this->session->set_flashdata('flash', 'disimpan');
    redirect('index.php/Laporan');
  }

  public function hapus_kecelakaan()
  {
    $this->M_admin->hapus_laporan_kecelakaan($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Laporan');
  }

  public function laporan_p2k3()
{
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }

 $data = [

  'sidebar'=>'Profile/Layouts_admin/sidebarnew',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Profile/laporan_p2k3',
  'footer' => 'Profile/Layouts_admin/footer',
  'data_laporan_p2k3' => $this->M_admin->lihat_data_laporan_p2k3($this->session->userdata('id_perusahaan'))->result(),
];

$this->load->view('template', $data);
}

public function tambah_laporan_p2k3()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

   $data = [

    'sidebar'=>'Profile/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Profile/tambah_lap_p2k3',
    'footer' => 'Profile/Layouts_admin/footer',
  ];

  $this->load->view('template', $data);
}

public function simpan_laporan_p2k3()
  {

    $config['upload_path']          = './upload/upload_berkas_laporan_p2k3';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Laporan/laporan_p2k3');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

    $data = array(
      'nama' => $this->input->post('nama'),
      'tanggal_laporan' => $this->input->post('tanggal'),
      'file' => $berkas,
      'id_user' => $this->session->userdata('id_perusahaan')
    );
    $this->M_admin->simpan_laporan_p2k3($data);
    $this->session->set_flashdata('flash', 'disimpan');
    redirect('index.php/Laporan/laporan_p2k3');
  }
  }
  public function hapus_laporan_p2k3()
  {
    $this->M_admin->hapus_laporan_p2k3($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Laporan/laporan_p2k3');
  }

}
?>