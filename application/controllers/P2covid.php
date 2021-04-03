<?php


defined('BASEPATH') OR exit('No direct script access allowed');



class P2covid extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
    $this->load->model('M_admin');
   
    $this->load->helper('url');
  }

public function pertanyaan_covid()
{
  if($this->session->userdata('level')!='2'){
    redirect('index.php/Home');
  }

 $data = [

  'sidebar'=>'Admin/Layouts_admin/sidebarnew',
  'akun' => $this->session->userdata('username'),
  'level' => $this->session->userdata('level'),
  'content' => 'Admin/p2_covid',
  'footer' => 'Admin/Layouts_admin/footer',
];

$this->load->view('template', $data);
}

}
?>