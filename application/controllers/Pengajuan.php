<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pengajuan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
    $this->load->model('M_pengajuan');
    $this->load->helper('url');
  }

  public function pengajuan()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'list_pengajuan',
      'footer' => 'layouts/footer',
      'data' => $this->M_pengajuan->lihat_data_pengajuan()->result(),
  
    ];
//var_dump($data);
   $this->load->view('template', $data);
    
  }

  public function tambah_pengajuan()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }
    if($this->input->get('id')) $id=$this->input->get('id');
    else $id='0';

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'form_pengajuan',
      'footer' => 'layouts/footer',
      'data' => $this->M_pengajuan->ambil_data($id)->result(),
      'status' => $this->M_pengajuan->ambil_status($id)->result(),
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

 

  public function simpan_pengajuan(){
    if($this->input->post('id_pengajuan')) 
    {
      $status='update';

      $tgl_pengajuan = $this->input->post('tgl_pengajuan');
      $tgl_acc_pengawas_k3 = $this->input->post('tgl_acc_pengawas_k3');
      $tgl_acc_kabag = $this->input->post('tgl_acc_kabag');
      $tgl_acc_mr = $this->input->post('tgl_acc_mr');
      $tgl_acc_rekan = $this->input->post('tgl_acc_rekan');
    
      $ttd_pelaksana = $this->input->post('ttd_pelaksana');
      $ttd_pengawas_k3 = $this->input->post('ttd_pengawas_k3');
      $ttd_kabag = $this->input->post('ttd_kabag');
      $ttd_mr = $this->input->post('ttd_mr');
      $ttd_rekan = $this->input->post('ttd_rekan');
    }
    else {
      $status='insert';
      $tgl_acc_pengawas_k3 = null;
      $tgl_acc_kabag = null;
      $tgl_acc_mr = null;
      $tgl_acc_rekan = null;

      
      $ttd_pengawas_k3 = null;
      $ttd_kabag = null;
      $ttd_mr =null;
      $ttd_rekan = null;
    }
     
    $pelaksana = $kabag = $pengawas = $mr = $rekan = null;
    if($this->input->post('tombol')=='pelaksana') {
      $tgl_pengajuan =  date("Y/m/d h:i:sa");
      $pelaksana=$this->input->post('tombol');
      $ttd_pelaksana=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else if($this->input->post('tombol')=='pengawas') {
      $tgl_acc_pengawas_k3 =  date("Y/m/d h:i:sa");
      $pengawas=$this->input->post('tombol');
      $ttd_pengawas_k3=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else if($this->input->post('tombol')=='kabag') {
      $tgl_acc_kabag =  date("Y/m/d h:i:sa");
      $kabag=$this->input->post('tombol');
      $ttd_kabag=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else if($this->input->post('tombol')=='mr') {
      $tgl_acc_mr  =  date("Y/m/d h:i:sa"); 
      $mr=$this->input->post('tombol');
      $ttd_mr=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else if($this->input->post('tombol')=='rekan') {
      $tgl_acc_rekan =  date("Y/m/d h:i:sa");
      $rekan=$this->input->post('tombol');
      $ttd_rekan=$this->M_pengajuan->ambil_ttd($this->session->userdata('id_user'))->result()[0]->foto_ttd;
    }
    else;

    
    $data=array(
      'id_user'=> $this->session->userdata('id_user'),
      'nama_pekerjaan'=>$this->input->post('nama_pekerjaan'),
      'nomor_pekerjaan'=>$this->input->post('nomor_pekerjaan'),
      'nama_pelaksana'=>$this->input->post('nama_pelaksana'),
      'pimpinan_rekanan'=>$this->input->post('pimpinan_rekanan'),
      'no_tlp_pimpinan' => $this->input->post('no_tlp_pimpinan'),
      'pengawas_rekanan'=>$this->input->post('pengawas_rekanan'),
      'no_tlp_pengawas'=>$this->input->post('no_tlp_pengawas'),
      'lokasi_pekerjaan'=>$this->input->post('lokasi_pekerjaan'),
      'lama_dari'=>$this->input->post('lama_dari'),
      'lama_sampai'=>$this->input->post('lama_sampai'),
      'jam_kerja'=>$this->input->post('jam_kerja'),
      'pengawas_teknis'=>$this->input->post('pengawas_teknis'),
      'jumlah_tenaga'=>$this->input->post('jumlah_tenaga'),

      'instalasi_listrik'=>$this->input->post('instalasi_listrik'),
      'instalasi_jaringan'=>$this->input->post('instalasi_jaringan'),
      'pemasangan_service_ac'=>$this->input->post('pemasangan_service_ac'),
      'fogging'=>$this->input->post('fogging'),
      'sedot_wc'=>$this->input->post('sedot_wc'),
      'pengecatan_kantor'=>$this->input->post('pengecatan_kantor'),
      'perbaikan_kantor'=>$this->input->post('perbaikan_kantor'),
      'lainnya'=>$this->input->post('lainnya'),
      'detail_perbaikan'=>$this->input->post('detail_perbaikan'),
      'detail_lainnya'=>$this->input->post('detail_lainnya'),
//pengawas
      'uu'=>$this->input->post('uu'),
      'peraturan_umum_k3'=>$this->input->post('peraturan_umum_k3'),
      'surat_izin'=>$this->input->post('surat_izin'),
      'syarat_kerja'=>$this->input->post('syarat_kerja'),
      'claim' => $this->input->post('claim'),
      'pelaporan'=>$this->input->post('pelaporan'),
      'p3k'=>$this->input->post('p3k'),
      'peraturan1'=>$this->input->post('peraturan1'),
      'peraturan2'=>$this->input->post('peraturan2'),
      'peraturan3'=>$this->input->post('peraturan3'),
      'peraturan_1'=>$this->input->post('peraturan_1'),
      'peraturan_2'=>$this->input->post('peraturan_2'),
      'peraturan_3'=>$this->input->post('peraturan_3'),
  //acc    
      'ttd_kabag'=>$ttd_kabag,
      'ttd_rekan'=>$ttd_rekan,
      'ttd_pengawas_k3'=>$ttd_pengawas_k3,
      'ttd_pelaksana'=>$ttd_pelaksana,
      'ttd_mr'=>$ttd_mr,
  //    
      'rekomendasi_pengawas_k3'=>$this->input->post('rekomendasi_pengawas_k3'),
      'rekomendasi_mr'=>$this->input->post('rekomendasi_mr'),
      'catatan'=>$this->input->post('catatan'),
      'tgl_catatan_satpam'=>$this->input->post('tgl_catatan_satpam'),
      'status'=>$this->input->post('tombol'),

      'tgl_pengajuan'=>$tgl_pengajuan,
      'tgl_acc_kabag'=>$tgl_acc_kabag,
       'tgl_acc_rekan'=>$tgl_acc_rekan,
       'tgl_acc_pengawas_k3'=>$tgl_acc_pengawas_k3,
      'tgl_acc_mr'=>$tgl_acc_mr,

      
      );
      var_dump($data);
     if($status=='update') $this->M_pengajuan->update_pengajuan($this->input->post('id_pengajuan'),$data);
     else $this->M_pengajuan->simpan_pengajuan($data);
  
    $this->session->set_flashdata('flash', 'Data Berhasil Disimpan');
  redirect('index.php/Pengajuan/pengajuan');



  }

  public function detail_pengajuan(){
    $data = [

      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'detail_pengaduan_masyarakat',
      'footer' => 'layouts/footer',
      'data_pengaduan' => $this->M_pengaduan->lihat_data("SELECT p.*, w.nama as nama_pengawas, wu.nama as nama_pengawas2, d.no_telp FROM pengaduan p LEFT JOIN data_pengawas w ON p.id_pengawas=w.id_pengawas LEFT JOIN data_pengawas wu ON p.id_pengawas2=wu.id_pengawas JOIN tb_user_pengadu d on p.id_user=d.id_user WHERE p.id_pengaduan=".$this->input->get('id'))->result(),
      'data_tindakan' => $this->M_pengaduan->lihat_data("SELECT * FROM tb_tindakan WHERE id_pengaduan=".$this->input->get('id'))->result(),

    ];

    $this->load->view('template', $data);


  }

  public function hapus_pengajuan(){
    $id=$this->input->get('id');
    echo $id;
    $this->M_pengaduan->hapus_pengaduan($id);
    $this->session->set_flashdata('flash', 'Data Behasil Dihapus');
    redirect('index.php/Pengaduan/data_pengaduan');
  }


  public function cetak_form()

	{

    if($this->input->get('id')) $id=$this->input->get('id');
    else $id='0';

    $data = [
        
      //'header'=>'layouts/head2',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'coba',
      //'footer' => 'layouts/footer2',
      'data' => $this->M_pengajuan->ambil_data($id)->result(),
      'status' => $this->M_pengajuan->ambil_status($id)->result(),
       ];
      // var_dump($data);


    $html=$this->load->view('template', $data, true);
    // $this->load->view('template', $data);
		$this->load->library('Pdf');

		

		//setting awal

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->setPrintFooter(false);

        $pdf->setPrintHeader(false);

        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

        $pdf->AddPage('');

        $pdf->Write(0, '', '', 0, 'L', true, 0, false, false, 0);

        $pdf->SetFont('');

        

        $pdf->writeHTML($html);
        //ob_end_clean();
        $pdf->Output("Ijin_Pelaksanaan_Kerja ".date("d-m-Y").".pdf", 'FI');

	}


  


}
