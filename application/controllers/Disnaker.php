<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Disnaker extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function dashboard()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='1'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Disnaker/sidebarnew',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Disnaker/dashboard0',
      'footer' => 'Admin/Disnaker/footer',
       ];

    $this->load->view('template', $data);
    
  }


}
