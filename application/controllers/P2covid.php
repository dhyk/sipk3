<?php


defined('BASEPATH') OR exit('No direct script access allowed');



class P2covid extends CI_Controller {
	function __construct(){
		parent::__construct();		
	
    $this->load->model('M_admin');
   
    $this->load->helper('url');
  }

  public function index()
  {
    if($this->session->userdata('level')!='2'){
      redirect('index.php/Home');
    }
  
   $data = [
  
    'sidebar'=>'Admin/Layouts_admin/sidebarnew',
    'akun' => $this->session->userdata('username'),
    'level' => $this->session->userdata('level'),
    'content' => 'Admin/v_p2_covid',
    'footer' => 'Admin/Layouts_admin/footer',
  ];
  
  $this->load->view('template', $data);
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


public function simpan_covid()
  {


    $config['upload_path']          = './upload/upload_berkas_p2covid';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    $config['max_size']             = 10000;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;


    $this->upload->initialize($config);

    if (!$this->upload->do_upload('berkas_p1')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p1 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p1 = $this->upload->data('file_name');
    }


    if (!$this->upload->do_upload('berkas_p2')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p2 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p2 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p3')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p3 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p3 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p4')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p4 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p4 = $this->upload->data('file_name');
    }


    if (!$this->upload->do_upload('berkas_p5')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p5 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p5 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p6')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p6 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p6 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p7')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p7 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p7 = $this->upload->data('file_name');
    }


    if (!$this->upload->do_upload('berkas_p8')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p8 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p8 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p9')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p9 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p9 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p10')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p10 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p10 = $this->upload->data('file_name');
    }


    if (!$this->upload->do_upload('berkas_p11')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p11 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p11 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p12')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p12 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p12 = $this->upload->data('file_name');
    }

    if (!$this->upload->do_upload('berkas_p13')) {
      $error = array('error' => $this->upload->display_errors());
      $b_p13 = null;
    } else {
      $data = array('upload_data' => $this->upload->data());
      $b_p13 = $this->upload->data('file_name');
    }


    if (($b_p1 != null) && ($b_p2 != null)  && ($b_p3 != null) && ($b_p4 != null) && ($b_p4 != null)
    && ($b_p5 != null) && ($b_p6 != null) && ($b_p7 != null) && ($b_p8 != null) && ($b_p9 != null) && ($b_p10 != null) 
    && ($b_p11 != null) && ($b_p12 != null) && ($b_p13 != null)) {

      $data = array(
        'p1' => $this->input->post("p1"),
        'p2' => $this->input->post("p2"),
        'p3' => $this->input->post("p3"),
        'p4' => $this->input->post("p4"),
        'p5' => $this->input->post("p5"),
        'p6' => $this->input->post("p6"),
        'p7' => $this->input->post("p7"),
        'p8' => $this->input->post("p8"),
        'p9' => $this->input->post("p9"),
        'p10' => $this->input->post("p10"),
        'p11' => $this->input->post("p11"),
        'p12' => $this->input->post("p12"),
        'p13' => $this->input->post("p13"),
        'p1' => $b_p1,
        'p2' => $b_p2,
        'p3' => $b_p3,
        'p4' => $b_p4,
        'p5' => $b_p5,
        'p6' => $b_p6,
        'p7' => $b_p7,
        'p8' => $b_p8,
        'p9' => $b_p9,
        'p10' => $b_p10,
        'p11' => $b_p11,
        'p12' => $b_p12,
        'p13' => $b_p13,
        'id_user' => $this->session->userdata('id_user'),
      );
      $this->M_admin->simpan_covid($data);
      $this->session->set_flashdata('flash', 'disimpan');
      redirect('index.php/P2covid');
    } else {
      echo "eror";
      redirect('index.php/P2covid');
    }
  }

}
?>