<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawas extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
   $this->load->model('M_pengawas');
   
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
      'data_tugas' =>$this->M_pengawas->lihat_data('select p.* from pengaduan p, data_pengawas w where p.id_pengawas=w.id_pengawas or p.id_pengawas2=w.id_pengawas and w.id_user='.$this->session->userdata('id_user'))->result(),
      
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
//      'detail_tindakan' => $this->M_pengawas->lihat_tindakan()->result(),
      'data_pengaduan' => $this->M_pengawas->lihat_data("SELECT p.*, w.nama as nama_pengawas FROM pengaduan p LEFT JOIN data_pengawas w ON p.id_pengawas=w.id_pengawas WHERE p.id_pengaduan=".$this->input->get('id'))->result(),
      'data_tindakan' => $this->M_pengawas->lihat_data("SELECT * FROM tb_tindakan WHERE id_pengaduan=".$this->input->get('id'))->result(),
     
   
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
      'id_pengaduan' => $this->input->get('id'),
      'id_pengawas' => $this->input->get('pws'),
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
      if($this->input->post('status')=='Selesai'){
        $status = array( 
          'status' => $this->input->post('status')
        );
        $this->M_pengawas->ubah_status($this->input->post('id_pengaduan'),$status);
      }
      $this->M_pengawas->simpan_tindakan($data);
      $this->session->set_flashdata('flash', 'Data Behasil Disimpan');
      redirect('index.php/Pengawas/detail_tugas?id='.$this->input->post('id_pengaduan'));
    }
  }

  public function hapus_tindakan(){

    $this->M_pengawas->hapus_tindakan($this->input->get('id'));
    $this->session->set_flashdata('flash', 'Data Behasil Dihapus');
    redirect('index.php/Pengawas/detail_tugas?id='.$this->input->get('pd'));
  }

  


}
