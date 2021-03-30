<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_daftar');
        $this->load->helper('form','url','number');
        $this->load->library('form_validation','session');
        $this->load->helper(array('captcha','url'));
    }    
    public function index(){  

       $this->load->helper('captcha');
       $vals=array(
         'img_path' => './captcha/',
         'img_url' => base_url().'captcha/',
         'img_width' => '200',
         'img_height' => 30,
         'border' => 0,
         'expiration' => 3600
     );
       
       $cap = create_captcha($vals);
       $x['image'] = $cap['image'];
       $x['word']  = $cap['word'];
       $x['data']  = $this->M_daftar->getAll();
       $this->session->set_userdata('mycaptcha',$cap['word']);
       $this->load->view('header',$x);
   }


   function input(){
    if(isset($_POST['btnsimpan']))
    {
        $this->load->library('upload');
        $username                   = $this->input->post('username');
        $password                   = md5($this->input->post('password'));//enkripsi md5
        $nama_perusahaan            = $this->input->post('nama_perusahaan');//iki
        $nama_tempat_usaha          = $this->input->post('nama_tempat_usaha');//iki
        $alamat                     = $this->input->post('alamat');//iki
        $penanggung_jawab           = $this->input->post('penanggung_jawab');//iki
        $no_penanggung_jawab        = $this->input->post('no_penanggung_jawab');//iki
        $email_penanggung_jawab     = $this->input->post('email_penanggung_jawab');//iki
        $jenis_usaha                = $this->input->post('jenis_usaha');//iki
        $jumlah_karyawan            = $this->input->post('jumlah_karyawan');//iki
        $level                      = $this->input->post('level');

        $data = array(
            'username'          => $username,
            'password'          => $password,
            'klien_nama'        => $nama_perusahaan,
            'klien_usaha'       => $nama_tempat_usaha,
            'klien_alamat'      => $alamat,
            'klien_pj'          => $penanggung_jawab,
            'klien_hp'          => $no_penanggung_jawab,
            'klien_email'       => $email_penanggung_jawab,
            'jenis_id'          => $jenis_usaha,
            'klien_kategori'    => $jumlah_karyawan,
            'level'             => $level
        );
        $this->db->insert('tb_pengguna',$data);
        $url=base_url('');
        redirect($url);
    }
}
}
