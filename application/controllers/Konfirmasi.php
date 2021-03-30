<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends CI_Controller {
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
    public function konfirmasi_order()
    {
        $data = [
            // 'username'= $session_data'username',
            // 'level'= $session_data'level',
            'header' => 'layouts/header',
            // 'head'   => 'layouts/head',
            'content' => 'konfirmasi_order',
            'footer'=> 'layouts/footer',
            'akun' => $this->session->userdata('username')
        ];
        $this->load->view('template', $data);
    }

}