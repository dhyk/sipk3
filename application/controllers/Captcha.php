<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Captcha extends CI_Controller
 {
 	public function testCap()
 	{
 		return "ini kalimat dari kelas capctha buat ngetes";
 	}

 	function create_captcha()
 	{
 		$options = array(
 			'img_path' => './captcha',
 			'img_url' => base_url('captcha'),
 			'img_width' => '150',
 			'img_height' => '60',
			 'font_path' => FCPATH . 'captcha/font/captcha4.ttf',
 			'expiration' => 7200
 		);
 		$cap = create_captcha($options);
 		$image = $cap['word'];

 		$this->session->set_userdata('captchaword',$cap['word']);
 		

 		return $image;
 	}

 	function check_captcha()
 	{
 		if ($this->input->post('captcha')== $this->session->userdata('captchaword')) {
 			return true;
 		}
 		else{
 			$this->form_validation->set_message('check-captcha','Captcha is Wrong');
 			return false;
 		}
 	}

 	function index()
 	{
 		$this->form_validation->set_rules('captcha', 'Captcha','trim|callback_check_captcha|required');

 		if ($this->form_validation->run()==false) {
 			$this->load->view('testcap',array('img'=> $this->create_captcha()));
 		}
 		else{
 			echo 'Success Captcha Code';
 		}
 	}
 }
	

