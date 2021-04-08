<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ProK3listrik extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_listrik');
    $this->load->helper('url');
  }

  public function index()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    $isi=$this->M_listrik->lihat_k3listrik($this->session->userdata('id_perusahaan'))->result();
    $flag= $this->input->get('edit');
    if($isi==null)$flag=1;

    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/a_k3listrik',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_k3listrik'=> $isi,
      'edit' => $flag
    ];

    $this->load->view('template', $data);
  }

  public function izin_listrik()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/k3_Listrik/b_izin_listrik',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ijin_listrik'=> $this->M_listrik->lihat_ijin_listrik($this->session->userdata('id_perusahaan'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function izin_petir()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/k3_Listrik/c_izin_petir',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ijin_petir'=> $this->M_listrik->lihat_ijin_petir($this->session->userdata('id_perusahaan'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function ak3()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/k3_Listrik/d_ak3',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ak3'=> $this->M_listrik->lihat_ak3_listrik($this->session->userdata('id_perusahaan'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function pemeriksaan_listrik()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/e_pemeriksaan_listrik',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_pemeriksaan_listrik'=> $this->M_listrik->lihat_pemeriksaan_listrik($this->session->userdata('id_perusahaan'))->result(),
      
    ];

    $this->load->view('template', $data);
  }

  public function pemeriksaan_petir()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/f_pemeriksaan_petir',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_pemeriksaan_petir'=> $this->M_listrik->lihat_pemeriksaan_petir($this->session->userdata('id_perusahaan'))->result(),
     
    ];

    $this->load->view('template', $data);
  }

  public function teknisi()
  {

    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/g_teknisi',
      'footer' => 'Profile/Layouts_admin/footer',
       'data_teknisi'=> $this->M_listrik->lihat_teknisi($this->session->userdata('id_perusahaan'))->result(),

    ];

    $this->load->view('template', $data);
  }


  public function tambah_teknisi()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
          
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_teknisi',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_ak3_listrik()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_ak3_listrik',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_kelayakan_listrik()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_kelayakan_listrik',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_kelayakan_petir()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_kelayakan_petir',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_pemeriksaan_listrik()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_rekaman_pemeriksaan_listrik',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_pemeriksaan_petir()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Listrik/tambah_rekaman_pemeriksaan_petir',
      'footer' => 'Profile/Layouts_admin/footer',
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
      'id_user'=>$this->session->userdata('id_perusahaan'),
);
// var_dump($data);
$this->M_listrik->simpan_k3listrik($data,$this->session->userdata('id_perusahaan'));
$this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3listrik');
  }

  public function simpan_ak3_listrik(){
      $data=array(
        'nama'=>$this->input->post('nama'),
        'sertifikat'=>$this->input->post('nomor'),
        'tanggal_terbit'=>$this->input->post('tanggal'),
        'masa_berlaku'=>$this->input->post('masa'),
        'id_user'=>$this->session->userdata('id_perusahaan'),
      );
      $this->M_listrik->simpan_ak3_listrik($data);
      $this->session->set_flashdata('flash','disimpan');
          redirect('index.php/K3listrik/ak3');

  }

  public function simpan_ijin_listrik(){
    $data=array(
      
      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_perusahaan'),
    );
    $this->M_listrik->simpan_ijin_listrik($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik/izin_listrik');
  }

  public function simpan_ijin_petir(){
    $data=array(

      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_perusahaan'),
    );
    $this->M_listrik->simpan_ijin_petir($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik/izin_petir');
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
      'id_user'=>$this->session->userdata('id_perusahaan'),
    );
    $this->M_listrik->simpan_pemeriksaan_listrik($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik/pemeriksaan_listrik');
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
      'id_user'=>$this->session->userdata('id_perusahaan'),
    );
    $this->M_listrik->simpan_pemeriksaan_petir($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik/pemeriksaan_petir');
  }
}

  public function simpan_teknisi(){
    $data=array(
      'nama'=>$this->input->post('nama'),
      'sertifikat'=>$this->input->post('nomor'),
      'tanggal_terbit'=>$this->input->post('tanggal'),
      'masa_berlaku'=>$this->input->post('masa'),
      'id_user'=>$this->session->userdata('id_perusahaan'),
    );
    $this->M_listrik->simpan_teknisi($data);
    $this->session->set_flashdata('flash','disimpan');
        redirect('index.php/K3listrik/teknisi');

  }

  //-------------------------------------------------------------

  public function hapus_k3listrik(){
    $this->M_listrik->hapus_k3listrik($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik');

  }
  
  public function hapus_ak3(){
    $this->M_listrik->hapus_ak3_listrik($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/ak3');
  
  }
  
  public function hapus_ijin_listrik(){
    $this->M_listrik->hapus_ijin_listrik($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/izin_listrik');
  
  }
  
  public function hapus_ijin_petir(){
    $this->M_listrik->hapus_ijin_petir($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/izin_petir');
  
  }
  
  public function hapus_pemeriksaan_listrik(){
    $this->M_listrik->hapus_pemeriksaan_listrik($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/pemeriksaan_listrik');
  
  }
  
  public function hapus_pemeriksaan_petir(){
    $this->M_listrik->hapus_pemeriksaan_petir($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/pemeriksaan_petir');
  
  
  }
  
  public function hapus_teknisi(){
    $this->M_listrik->hapus_teknisi($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3listrik/teknisi');
  
    
  }



}




