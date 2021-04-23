<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Disnaker extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->model('M_disnaker');
    $this->load->helper('url');
  }

  public function dashboard()
  {
    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }


    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/dashboard0',
      'footer' => 'Admin/Layouts_admin/footer',
      'perusahaan' => $this->M_disnaker->lihat_perusahaan()->result(),
      'p2k3' => $this->M_disnaker->hitung_p2k3()->result(),
      'kecelakaan' => $this->M_disnaker->hitung_kecelakaan()->result(),
      'perusahaan1' => $this->M_disnaker->hitung_perusahaan()->result(),
      'aduan' => $this->M_disnaker->hitung_aduan()->result(),
    ];

    $this->load->view('template', $data);
  }

  public function daftar_sertifikat_alat()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_sertifikat_alat',
      'footer' => 'Admin/Layouts_admin/footer',
      'kebakaran_instalasi'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa_berlaku from tb_user u, tb_kebakaran_instalasi i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'listrik_listrik'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa_berlaku from tb_user u, listrik_ijin_listrik i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'listrik_petir'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa_berlaku from tb_user u, listrik_ijin_petir i where i.id_user=u.id_tb_user and i.masa_berlaku>sysdate() ')->result(),
      'mekanik_angkat'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_angkat i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
      'mekanik_bejana'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_bejana i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
      'mekanik_elevator'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_elevator i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
      'mekanik_ketel'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_ketel i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
      'mekanik_mesin'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_mesin i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
      'mekanik_ukur'=> $this->M_disnaker->lihat_data('select nama_perusahaan, masa from tb_user u, tb_mekanik_ukur i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
    ];

    $this->load->view('template', $data);
  }

  public function daftar_sertifikat_personel()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_sertifikat_personel',
      'footer' => 'Admin/Layouts_admin/footer',
      'kebakaran_ak3'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, tb_kebakaran_ak3 i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'kebakaran_petugas'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, tb_kebakaran_petugas i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'kebakaran_penanggulangan'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, tb_kebakaran_penanggulangan i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'listrik_ak3'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, listrik_ak3_listrik i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'listrik_teknisi'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, listrik_teknisi i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'lingker_k3'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, lingker_k3 i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'lingker_ketinggian'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, lingker_ketinggian i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'lingker_ruang'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, lingker_ruang i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
     'lingker_jurulas'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, masa_berlaku from tb_user u, lingker_jurulas i where i.id_user=u.id_tb_user and i.masa_berlaku<sysdate() ')->result(),
      'p3k'=> $this->M_disnaker->lihat_data('select nama_perusahaan, nama, masa from tb_user u, p3k_petugas i where i.id_user=u.id_tb_user and i.masa<sysdate() ')->result(),
   
    ];

    $this->load->view('template', $data);
  }
  public function laporan_p2k3()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_p2k3',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_laporan_p2k3'=> $this->M_disnaker->lihat_data('select nama_perusahaan,nama, tanggal_laporan from tb_user u, tb_laporan_p2k3 i where i.id_user=u.id_tb_user and i.tanggal_laporan<sysdate()')->result(),
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),

    ];

    $this->load->view('template', $data);
  }

  public function daftar_laporan_kecelakaan()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_laporan_kecelakaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),

    ];

    $this->load->view('template', $data);
  }

  public function laporan_pemeriksaan()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_pemeriksaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),

    ];

    $this->load->view('template', $data);
  }

  

  public function laporan_kecelakaan()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_kecelakaan',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),

    ];

    $this->load->view('template', $data);
  }

  public function daftar_laporan_p2covid()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/laporan_p2covid',
      'footer' => 'Admin/Layouts_admin/footer',
      //'data_sertifikat'=> $this->M_disnaker->lihat_data_sertifikat($this->session->userdata('id_user'))->result(),

    ];

    $this->load->view('template', $data);
  }

  public function daftar_pengaduan()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_pengaduan',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_pengaduan' => $this->M_disnaker->lihat_data_pengaduan()->result(),

    ];

    $this->load->view('template', $data);
  }

  public function detail_pengaduan()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }



    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/detail_pengaduan',
      'footer' => 'Admin/Layouts_admin/footer',
      'pengawas' => $this->M_disnaker->d_pengawas($this->session->userdata('id_user'))->result(),
      //'data_pengawas' => $this->M_disnaker->lihat_pengawas($this->session->userdata('id_user'))->result(),
      'data_pengaduan' => $this->M_disnaker->lihat_detail_pengaduan($this->input->get('id'))->result(),
      'data_pengawas' => $this->M_disnaker->lihat_data('Select * from data_pengawas')->result(),

    ];

    $this->load->view('template', $data);
  }

  public function daftar_pengawas()
  {

    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [

      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/daftar_pengawas',
      'footer' => 'Admin/Layouts_admin/footer',
      'data_pengawas' => $this->M_disnaker->lihat_data('Select * from data_pengawas')->result(),

    ];

    $this->load->view('template', $data);
  }

  public function tambah_pengawas()
  {
    if ($this->session->userdata('level') != '1') {
      redirect('index.php/Home');
    }

    $data = [
      'sidebar' => 'Admin/Layouts_admin/sidebardis',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/tambah_pengawas',
      'footer' => 'Admin/Layouts_admin/footer',
    ];

    $this->load->view('template', $data);
  }

  public function simpan_pengawas()
  {
    $data1 = array(
      
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'level' => '5',

    );
    
    $this->M_disnaker->register($data1);

    $data2 = [
      'nama' => $this->input->post('nama'),
      'nip' => $this->input->post('nip'),
      'jabatan' => $this->input->post('jabatan'),
      'no_telp' => $this->input->post('no_telp'),
      'email' => $this->input->post('email'),      
      'id_user' =>  $this->M_disnaker->get_id_masyarakat()->result()[0]->id_tb_user,
    ];
    $this->M_disnaker->simpan_pengawas($data2);


    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
    redirect('index.php/Disnaker/daftar_pengawas');
  }

  public function hapus_pengawas()
  {
    $this->M_disnaker->hapus_pengawas($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Berhasil dihapus');
    redirect('index.php/Disnaker/daftar_pengawas');
  }

  public function aksi_pengaduan_pengawas()
  {
    $to = "somebody@example.com ";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: webmaster@example.com" . "\r\n" .
      "CC: somebodyelse@example.com";

    //mail($to, $subject, $txt, $headers);

    $config['upload_path']          = './upload/upload_file_spt';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas_penanggulangan')) {
      $error = array('error' => $this->upload->display_errors());
      $berkas = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $berkas = $this->upload->data('file_name');
    }


    $data = [
      'status' => 'Diterima',
      'keterangan' => $this->input->post('keterangan'),
      'file_spt' => $berkas,
      'no_spt' => $this->input->post('nomor_spt'),
      'id_pengawas' => $this->input->post('id_pengawas'),
      'id_pengawas2' => $this->input->post('id_pengawas2'),
    ];
    $id_pengaduan = $this->input->post('id_pengaduan');
    $this->M_disnaker->ubah_pengaduan(['id_pengaduan' => $id_pengaduan], $data);
    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
    redirect('index.php/Disnaker/daftar_pengaduan');
  }

  public function aksi_pengaduan_ditolak()
  {

    $data = [
      'status' => 'Ditolak',
    ];
    $id_pengaduan = $this->input->get('id');
    var_dump($id_pengaduan);
    $this->M_disnaker->ubah_pengaduan(['id_pengaduan' => $id_pengaduan], $data);
    $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
   redirect('index.php/Disnaker/daftar_pengaduan');
  }
}
