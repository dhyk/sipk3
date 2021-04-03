<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kecelakaan extends CI_Controller {
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

 $data = [

  'sidebar'=>'Admin/Layouts_admin/sidebar',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Admin/kecelakaan_kerja',
  'footer' => 'Admin/Layouts_admin/footer',
];

$this->load->view('template', $data);
}

public function tambah_laporan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

   $data = [

    'sidebar'=>'Admin/Layouts_admin/sidebar',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/tambah_lap_kecelakaan',
    'footer' => 'Admin/Layouts_admin/footer',
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
      'sumber' => $this->input->post('peralatan/pemesinan').'<br>'
      .$this->input->post('metode kerja').'<br>'
      .$this->input->post('lingkungan kerja').'<br>'
      .$this->input->post('proses'),
      'pengendalian' => $this->input->post('pengendalian'),
      'id_user' => $this->session->userdata('id_user'),
    );
    $this->M_kebakaran->simpan_kecelakaan($data);
    $this->session->set_flashdata('flash', 'disimpan');
    redirect('index.php/Kecelakaan');
  }
  public function hapus_kecelakaan()
  {
    $this->M_kebakaran->hapus_kecelakaan($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran');
  }

}
?>