<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
    $this->load->model('M_pengajuan');
    $this->load->helper('url');
  }

  public function index()
  {
		//echo "admiinnnn";
    // if($this->session->userdata('level')!='4'){
    //   redirect('index.php/Home');
    // }

    $data = [
        
      'header'=>'layouts/head',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'login',
      // 'footer' => 'layouts/footer',  
    ];
//var_dump($data);
   $this->load->view('template', $data);
    
  }

  public function login_check()
  {
      $username = $this->input->post('username');
      $password = $this->input->post('password');


      $login = $this->M_login->login_user($username, $password)->result(); //ambil data dari DB

      if ($login == null) {
          //jika gagal
          //untuk notif jika gagal login
          redirect('index.php/login');
      } else {
          //jika berhasil login
          $this->session->set_userdata('username', $username); //simpan session
          $query = $this->M_login->get_id_user($username);
          var_dump($query); 
          $id_user = $query[0]->id_user;
          //var_dump($id_user);
          $this->session->set_userdata('id_user', $id_user);
          // $this->M_login->last_login($username); //update tanggal di db
          $this->session->set_flashdata('flash', 'Anda Berhasil Masuk');
          $level = $login[0]->level;
          $this->session->set_userdata('level', $level); //simpan session

          redirect('index.php/Pengajuan/pengajuan');
          }
    }
  



  public function logout()
  {
      //var_dump($this->session->userdata('email'));
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('level');
      $this->session->set_flashdata('flash', 'Anda Berhasil Keluar');
      //var_dump($this->session->userdata('email'));
      redirect('index.php/Login');
  }


 

}
