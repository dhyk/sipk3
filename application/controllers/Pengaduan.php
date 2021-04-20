<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pengaduan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_pengaduan');
    $this->load->helper('url');
  }

  public function data_pengaduan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='4'){
      redirect('index.php/Home');
    }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'pengaduan',
      'footer' => 'layouts/footer',
      'data' => $this->M_pengaduan->lihat_data_pengaduan($this->session->userdata('id_user'))->result(),
       ];

    $this->load->view('template', $data);
    
  }

  public function tambah_pengaduan()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='4'){
      redirect('index.php/Home');
    }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'form_pengaduan',
      'footer' => 'layouts/footer',
       ];

    $this->load->view('template', $data);
    
  }
  public function profile_mas()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='4'){
      redirect('index.php/Home');
    }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'profile_mas',
      'footer' => 'layouts/footer',
      'data' => $this->M_pengaduan->lihat_data_user($this->session->userdata('id_user'))->result(),
       ];

    $this->load->view('template', $data);
    
  }

  public function simpan_pengaduan(){


    $config['upload_path']          = './upload/upload_berkas_pengaduan';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      $berkas=null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');
      
    }

    if (!$this->upload->do_upload('file_bipatrit')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      $berkas2=null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas2 = $this->upload->data('file_name');
      
    }

    $data=array(
      'nama'=>$this->input->post('nama'),
      'judul'=>$this->input->post('judul'),
      'jenis'=>$this->input->post('jenis'),
      'tanggal'=>$this->input->post('tanggal'),
      'nama_perusahaan' => $this->input->post('nama_perusahaan'),
      'perihal'=>$this->input->post('perihal'),
      'file_pengaduan'=>$berkas,
      'bipatrit'=>$this->input->post('bipatrit'),
      'nama_pekerja'=>$this->input->post('pekerja'),
      'alamat_pekerja'=>$this->input->post('alamat'),
      'nama_serikat'=>$this->input->post('serikat'),
      'alamat_serikat'=>$this->input->post('alamat_serikat'),
      'nama_perundingan'=>$this->input->post('perunding'),
      'alamat_perundingan'=>$this->input->post('alamat_perunding'),
      'masalah_perselisihan'=>$this->input->post('alasan'),
      'pendirian'=>$this->input->post('pendirian'),
      'kesimpulan'=>$this->input->post('kesimpulan'),
      'file_bipatrit'=>$berkas2,
      'id_user'=> $this->session->userdata('id_user'),
      );

    $this->M_pengaduan->simpan_pengaduan($data);
    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
    redirect('index.php/Pengaduan/data_pengaduan');



  }

  public function hapus_pengaduan(){
    $id=$this->input->get('id');
    echo $id;
    $this->M_pengaduan->hapus_pengaduan($id);
    $this->session->set_flashdata('flash', 'Data Behasil Dihapus');
    redirect('index.php/Pengaduan/data_pengaduan');
  }
  


}
