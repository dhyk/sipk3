<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawas extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
   $this->load->model('M_pengawas');
   $this->load->model('M_Disnaker');
    $this->load->helper('url');
  }

  public function daftar_tugas()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/daftar_tugas',
      'footer' => 'Admin/Layouts_admin/footer',
      
       ];

    $this->load->view('template', $data);
    
  }
  public function detail_tugas()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/detail_tugas',
      'footer' => 'Admin/Layouts_admin/footer',
      'detail_tindakan' => $this->M_pengawas->lihat_tindakan()->result(),
       ];

    $this->load->view('template', $data);
    
  }

  public function tambah_tindakan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='5'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebar_was',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pengawas/tambah_tindakan',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);
    
  }

  public function simpan_tindakan()
  {

    $config['upload_path']          = './upload/upload_file_tindakan';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Pengawas/detail_tugas');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'nama' => $this->input->post('nama'),
        'detail' => $this->input->post('detail'),
        'tanggal_tindakan' => $this->input->post('tanggal_tindakan'),
        'berkas' => $berkas,
        'status' => $this->input->post('status'),
        'id_pengawas'=> $this->input->post('id_pengawas') ,
        'id_pengaduan'=> $this->input->post('id_pengaduan'),
        
      );
      $this->M_pengawas->simpan_tindakan($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Pengawas/detail_tugas');
    }
  }

  


}
