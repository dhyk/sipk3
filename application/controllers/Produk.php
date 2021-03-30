<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->model('M_home');
    $this->load->helper('form','url','number');
    $this->load->library('form_validation');
    }    
	// public function minta_harga(){        
 //    $this->load->view('layouts/header');
	// $this->load->view('home');
	// $this->load->view('layouts/footer');
	// }
    public function tampil_survei()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'produk/tampil_survei',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

     public function tampil_organizer()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'produk/tampil_organizer',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

    public function tampil_inspeksi()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'produk/tampil_inspeksi',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

     public function tampil_konsultansi()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'produk/tampil_konsultansi',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

     public function tampil_verifikasi()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'produk/tampil_verifikasi',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

}