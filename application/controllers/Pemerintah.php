<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pemerintah extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home');
   $this->load->model('M_admin');
    $this->load->helper('url');
  }

  public function dashboard()
  {
		//echo "admiinnnn";
    if($this->session->userdata('level')!='3'){
      redirect('index.php/Home');
    }

    $data = [
        
      'sidebar'=>'Admin/Layouts_admin/sidebarpem',
      'akun' => $this->session->userdata('username'),
      'level' => $this->session->userdata('level'),
      'content' => 'Admin/Pemerintah/dashboard',
      'footer' => 'Admin/Layouts_admin/footer',
       ];

    $this->load->view('template', $data);
    
  }

  


}
