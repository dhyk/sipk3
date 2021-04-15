<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class ProK3lingker extends CI_Controller {
	public function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_lingker');
    $this->load->helper('url');
  }

  public function index()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/k3_lingker',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ak3'=> $this->M_lingker->lihat_k3($this->session->userdata('id_perusahaan'))->result(),
      'data_juru'=> $this->M_lingker->lihat_jurulas($this->session->userdata('id_perusahaan'))->result(),
      'data_higiene'=> $this->M_lingker->lihat_higiene($this->session->userdata('id_perusahaan'))->result(),
      'data_ketinggian'=> $this->M_lingker->lihat_ketinggian($this->session->userdata('id_perusahaan'))->result(),
      'data_pemeriksaan'=> $this->M_lingker->lihat_pemeriksaan($this->session->userdata('id_perusahaan'))->result(),
      'data_rekaman'=> $this->M_lingker->lihat_rekaman($this->session->userdata('id_perusahaan'))->result(),
      'data_tk_ruang'=> $this->M_lingker->lihat_ruang($this->session->userdata('id_perusahaan'))->result(),
       
    ];
   $this->load->view('template', $data);

  }

  public function jurulas()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/a_jurulas',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_juru'=> $this->M_lingker->lihat_jurulas($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }

  public function ketinggian()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/b_ketinggian',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ketinggian'=> $this->M_lingker->lihat_ketinggian($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }

  public function ruang()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/c_ruang',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_tk_ruang'=> $this->M_lingker->lihat_ruang($this->session->userdata('id_perusahaan'))->result(),
       
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
      'content' => 'Profile/K3_Lingker/d_ak3',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_ak3'=> $this->M_lingker->lihat_k3($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }

  public function rekaman()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/e_rekaman',
      'footer' => 'Profile/Layouts_admin/footer',
     'data_rekaman'=> $this->M_lingker->lihat_rekaman($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }

  public function higiene()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/f_higiene',
      'footer' => 'Profile/Layouts_admin/footer',
      'data_higiene'=> $this->M_lingker->lihat_higiene($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }

  public function pemeriksaan()
  {
	
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
    
    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/g_pemeriksaan',
      'footer' => 'Profile/Layouts_admin/footer',
     'data_pemeriksaan'=> $this->M_lingker->lihat_pemeriksaan($this->session->userdata('id_perusahaan'))->result(),
      
    ];
   $this->load->view('template', $data);

  }


  public function tambah_juru_las()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_juru_las',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_ak3_lingker()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
          

      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_k3',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_pemeriksaan()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
       
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_pemeriksaan',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_pengukuran_lingker()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
         
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_pengukuran_lingker',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_penerapan_higiene()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_rekaman_penerapan_higiene',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_tenaga_kerja()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_tenaga_kerja',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_tk_ruang()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }

    $data = [
           
      'sidebar'=>'Profile/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Profile/K3_Lingker/tambah_tk_ruang',
      'footer' => 'Profile/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  
  public function simpan_jurulas(){
    
      $data= array(
        'id_user' => $this->session->userdata('id_perusahaan'),
        'nama' => $this->input->post('nama'),
        'klasifikasi' => $this->input->post('klasifikasi'),
        'sertifikat' => $this->input->post('nomor_sertifikat'),
        'tanggal_terbit' => $this->input->post('tanggal'),
        'masa_berlaku' => $this->input->post('masa_berlaku'),
      );
      $this->M_lingker->simpan_jurulas($data);
      $this->session->set_flashdata('flash','disimpan');
      redirect('index.php/K3lingker/jurulas');
    
}

public function simpan_higiene(){
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
      'id_user' => $this->session->userdata('id_perusahaan'),
      'nomor' => $this->input->post('nomor_laporan'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_lingker->simpan_higiene($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker/higiene');

  }

}

public function simpan_k3(){
  $data= array(
    'id_user' => $this->session->userdata('id_perusahaan'),
    'nama' => $this->input->post('nama'),
    'jenjang' => $this->input->post('jenjang'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_lingker->simpan_k3($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker/ak3');
}

public function simpan_ketinggian(){
  $data= array(
    'id_user' => $this->session->userdata('id_perusahaan'),
    'nama' => $this->input->post('nama'),
    'kompetensi' => $this->input->post('kompetensi'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal_terbit'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_lingker->simpan_ketinggian($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker/ketinggian');
}

public function simpan_pemeriksaan(){
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
      'id_user' => $this->session->userdata('id_perusahaan'),
      'jenis' => $this->input->post('jenis'),
      'nama' => $this->input->post('nama_pelaksana'),
      'lembaga' => $this->input->post('lembaga_pelaksana'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_lingker->simpan_pemeriksaan($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker/pemeriksaan');

  }
}

public function simpan_rekaman(){
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
      'id_user' => $this->session->userdata('id_perusahaan'),
      'nomor' => $this->input->post('nomor_laporan'),
      'tanggal' => $this->input->post('tanggal'),
      'file' => $berkas
    );
    $this->M_lingker->simpan_rekaman($data);
    $this->session->set_flashdata('flash','disimpan');
    redirect('index.php/K3lingker/rekaman');

  }
}

public function simpan_ruang(){
  $data= array(
    'id_user' => $this->session->userdata('id_perusahaan'),
    'nama' => $this->input->post('nama'),
    'jenjang' => $this->input->post('jenjang'),
    'sertifikat' => $this->input->post('nomor_sertifikat'),
    'tanggal_terbit' => $this->input->post('tanggal'),
    'masa_berlaku' => $this->input->post('masa_berlaku'),
  );
  $this->M_lingker->simpan_ruang($data);
  $this->session->set_flashdata('flash','disimpan');
  redirect('index.php/K3lingker/ruang');
}

//-------------------------------------------------------------


public function hapus_jurulas(){
    $this->M_lingker->hapus_jurulas($this->input->get('id'));
    $this->session->set_flashdata('flash','Berhasil dihapus');
    redirect('index.php/K3lingker/jurulas');
}

public function hapus_higiene(){
  $this->M_lingker->hapus_higiene($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/higiene');
}

public function hapus_k3(){
  $this->M_lingker->hapus_k3($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/ak3');
}

public function hapus_ketinggian(){
  $this->M_lingker->hapus_ketinggian($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/ketinggian');
}

public function hapus_pemeriksaan(){
  $this->M_lingker->hapus_pemeriksaan($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/pemeriksaan');
}

public function hapus_rekaman(){
  $this->M_lingker->hapus_rekaman($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/rekaman');
}

public function hapus_ruang(){
  $this->M_lingker->hapus_ruang($this->input->get('id'));
  $this->session->set_flashdata('flash','Berhasil dihapus');
  redirect('index.php/K3lingker/ruang');
}

}



