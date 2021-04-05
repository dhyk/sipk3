<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Kebakaran extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_admin');
    $this->load->model('M_kebakaran');
    $this->load->helper('url');
  }

  public function index()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';
    $flag= $this->input->get('edit');
    $id = $this->session->userdata('id_user');
    $isi = $this->M_kebakaran->lihat_data_kebakaran($id)->result();
    if($isi==null)$flag=1;
    //------------------
    $sumber_potensi=[1,1,1,1,1,1,1,1,1];
    $sistem_pencegahan=[1,1,1,1,1];
    if($isi!=null){
    $sumber_potensi=explode(";",$isi[0]->sumber_potensi);
    $sistem_pencegahan=explode(";",$isi[0]->sistem_pencegahan);
    }
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/a_pencegahan_dan _penanggulangan_kebakaran',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_kebakaran' => $isi,
      'edit' => $flag,
      'sumber' =>$sumber_potensi,
      'sistem' =>$sistem_pencegahan,
      ];

    $this->load->view('template', $data);

  }

  public function petugas()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/b_petugas_kebakaran',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_petugas' => $this->M_kebakaran->lihat_kebakaran_petugas($id)->result(),
    ];

    $this->load->view('template', $data);
  }

  public function tambah_petugas_kebakaran()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_petugas_kebakaran',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function koordinator()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/c_koordinator_unit',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_penanggulangan' => $this->M_kebakaran->lihat_kebakaran_penanggulangan($id)->result(),
    ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function ak3()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/d_ak3',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_ak3' => $this->M_kebakaran->lihat_kebakaran_ak3($id)->result(),
      ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function gladi()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/e_gladi',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_gladi' => $this->M_kebakaran->lihat_kebakaran_gladi($id)->result(),
      ];

    $this->load->view('template', $data);
  }

  public function apar()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/f_apar',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_apar' => $this->M_kebakaran->lihat_kebakaran_apar($id)->result(),
     ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function alarm()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/g_alarm',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_alarm' => $this->M_kebakaran->lihat_kebakaran_alarm($id)->result(),
      ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function hydrant()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/h_hydrant',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_hydrant' => $this->M_kebakaran->lihat_kebakaran_hydrant($id)->result(),
      ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function sprinkler()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/i_sprinkler',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_sprinkler' => $this->M_kebakaran->lihat_kebakaran_sprinkler($id)->result(),
    ];

    // var_dump($data);
    $this->load->view('template', $data);
  }

  public function instalasi()
  {

    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }
    // echo 'masuk halaman admin';

    $id = $this->session->userdata('id_user');
    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/j_instalasi',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_instalasi' => $this->M_kebakaran->lihat_kebakaran_instalasi($id)->result(),
      ];

    // var_dump($data);
    $this->load->view('template', $data);
  }


  public function tambah_ak3_spesialis()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [


      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_ak3_spesialis',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_izin_instalasi_pemadam()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [


      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_izin_instalasi_pemadam',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_koordinator()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_koordinator',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_apar()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_rekaman_apar',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_instalasi_alarm()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_rekaman_instalasi_alarm',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_instalasi_fire()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_rekaman_instalasi_fire',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_instalasi_sprinkler()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_rekaman_instalasi_sprinkler',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function tambah_rekaman_latihan()
  {
    if ($this->session->userdata('level') != '2') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Kebakaran/tambah_rekaman_latihan',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }


  //------------------------------------------------------------------------------------------------------

  public function simpan_kebakaran_utama()
  {


    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas_penanggulangan')) {
      $error = array('error' => $this->upload->display_errors());
      $penanggulangan = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $penanggulangan = $this->upload->data('file_name');
    }


    if (!$this->upload->do_upload('berkas_kerja')) {
      $error = array('error' => $this->upload->display_errors());
      $kerja = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $kerja = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_regu')) {
      $error = array('error' => $this->upload->display_errors());
      $regu = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $regu = $this->upload->data('file_name');
    }


    if (($penanggulangan != null) && ($kerja != null) && ($regu != null)) {

      $sumber_potensi=$this->input->post("sumber_potensi1").';'.$this->input->post("sumber_potensi2").';'.
      $this->input->post("sumber_potensi3").';'.$this->input->post("sumber_potensi4").';'.
      $this->input->post("sumber_potensi5").';'.$this->input->post("sumber_potensi6").';'.
      $this->input->post("sumber_potensi7").';'.$this->input->post("sumber_potensi8").';'.
      $this->input->post("sumber_potensi9");

      $sistem_pencegahan=$this->input->post("sistem_pencegahan1").';'.$this->input->post("sistem_pencegahan2").';'.
      $this->input->post("sistem_pencegahan3").';'.$this->input->post("sistem_pencegahan4").';'.$this->input->post("sistem_pencegahan5");

      $data = array(
        'jumlah_karyawan' => $this->input->post("jumlah_karyawan"),
        'jumlah_unit' => $this->input->post("jumlah_unit"),
        'sumber_potensi' => $sumber_potensi,
        'asal_sumber' => $this->input->post("klasifikasi_potensi"),
        'asal_sumber' => $this->input->post("asal_sumber"),
        'sistem_pencegahan' => $sistem_pencegahan,
        'klasifikasi' =>$this->input->post("klasifikasi_potensi"),
        'jumlah_petugas' => $this->input->post("jumlah_petugas"),
        'jumlah_koordinator' => $this->input->post("jumlah_koordinator"),
        'id_user' => $this->session->userdata('id_user'),
        'file_penanggulangan' => $penanggulangan,
        'file_regu' => $regu,
        'file_kerja' => $kerja,
      );
      $this->M_kebakaran->simpan_kebakaran_utama($data,$this->session->userdata('id_user'));
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran');
    } else {
      echo "eror";
      redirect('index.php/Kebakaran');
    }
  }

  public function simpan_kebakaran_ak3()
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'tanggal_terbit' => $this->input->post('tanggal'),
      'masa_berlaku' => $this->input->post('masa'),
      'sertifikat' => $this->input->post('nomor'),
      'id_user' => $this->session->userdata('id_user'),
    );
    $this->M_kebakaran->simpan_kebakaran_ak3($data);
    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
    redirect('index.php/Kebakaran/ak3');
  }

  public function simpan_kebakaran_alarm()
  {

    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'tanggal_periksa' => $this->input->post('tanggal'),
        'file' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_alarm($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/alarm');
    }
  }

  public function simpan_kebakaran_apar()
  {

    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'tanggal_periksa' => $this->input->post('tanggal'),
        'file' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_apar($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/apar');
    }
  }

  public function simpan_kebakaran_gladi()
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'tanggal_terbit' => $this->input->post('tanggal'),
      'masa_berlaku' => $this->input->post('masa'),
      'sertifikat' => $this->input->post('nomor'),
      'id_user' => $this->session->userdata('id_user'),
    );
    $this->M_kebakaran->simpan_kebakaran_gladi($data);
    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
    redirect('index.php/Kebakaran/gladi');
  }

  public function simpan_kebakaran_hydrant()
  {

    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'tanggal_periksa' => $this->input->post('tanggal'),
        'file' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_hydrant($data);
      $this->session->set_flashdata('flash', 'disimpan');
      redirect('index.php/Kebakaran/hydrant');
    }
  }

  public function simpan_kebakaran_instalasi()
  {
    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'tanggal_periksa' => $this->input->post('tanggal'),
        'masa_berlaku' => $this->input->post('masa'),
        'file_sertifikat' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_instalasi($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/instalasi');
    }
  }

  public function simpan_kebakaran_penanggulangan()
  {
    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'nama' => $this->input->post('nama'),
        'tanggal_terbit' => $this->input->post('tanggal'),
        'masa_berlaku' => $this->input->post('masa'),
        'sertifikat' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_penanggulangan($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/koordinator');
    }
  }

  public function simpan_kebakaran_petugas()
  {

    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'nama' => $this->input->post('nama'),
        'tanggal_terbit' => $this->input->post('tanggal'),
        'masa_berlaku' => $this->input->post('masa'),
        'sertifikat' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_petugas($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/petugas');
    }
  }

  public function simpan_kebakaran_sprinkler()
  {

    $config['upload_path']          = './upload/upload_berkas_kebakaran';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('flash', 'Gagal');
      redirect('index.php/Kebakaran');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');

      $data = array(
        'tanggal_periksa' => $this->input->post('tanggal'),
        'file' => $berkas,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_kebakaran->simpan_kebakaran_sprinkler($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Kebakaran/sprinkler');
    }
  }

  public function hapus_kebakaran_ak3()
  {
    $this->M_kebakaran->hapus_kebakaran_ak3($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/ak3');
  }

  public function hapus_kebakaran_alarm()
  {
    $this->M_kebakaran->hapus_kebakaran_alarm($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/alarm');
  }

  public function hapus_kebakaran_apar()
  {
    $this->M_kebakaran->hapus_kebakaran_apar($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/apar');
  }

  public function hapus_kebakaran_gladi()
  {
    $this->M_kebakaran->hapus_kebakaran_gladi($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/gladi');
  }

  public function hapus_kebakaran_hydrant()
  {
    $this->M_kebakaran->hapus_kebakaran_hydrant($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/hydrant');
  }

  public function hapus_kebakaran_instalasi()
  {
    $this->M_kebakaran->hapus_kebakaran_instalasi($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/instalasi');
  }

  public function hapus_kebakaran_penanggulangan()
  {
    $this->M_kebakaran->hapus_kebakaran_penanggulangan($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/koordinator');
  }

  public function hapus_kebakaran_petugas()
  {
    $this->M_kebakaran->hapus_kebakaran_petugas($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/petugas');
  }

  public function hapus_kebakaran_sprinkler()
  {
    $this->M_kebakaran->hapus_kebakaran_sprinkler($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Kebakaran/sprinkler');
  }
}
