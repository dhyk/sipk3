<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
        $this->load->helper('form', 'url', 'number');
        $this->load->library('form_validation', 'session');
        $this->load->helper(array('captcha', 'url'));
    }



    public function index()
    {

        $this->load->helper('captcha');
        $vals = array(
            'img_path' => './captcha/',
            'img_url' => base_url() . 'captcha/',
            'img_width' => '400',
            'img_height' => '40',
            'font_size' => 20,
            'font_path' => FCPATH . 'system/fonts/alpha_echo.ttf',
            'border' => 0,
            'expiration' => 3600
        );

        $cap = create_captcha($vals);

        $data = [
            'header' => 'layouts/header',
            'content' => 'home',
            'footer' => 'layouts/footer',
            'akun' => $this->session->userdata('username'),
            'image_captcha' => $cap['image'],
            'word' => $x['word']  = $cap['word'],

        ];

        if ($this->session->userdata('level') == '1') {
            //if admin
            redirect('Disnaker', 'refresh');
        }

        $this->session->set_userdata('mycaptcha', $cap['word']);
        $this->load->view('template', $data);
    }



    public function register_pengguna()
    {


        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_perusahaan = $this->input->post('nama_perusahaan');
        $nomor_induk = $this->input->post('nomor_induk');
        $jumlah_karyawan = $this->input->post('jumlah_karyawan');
        //$nama_tempat_usaha = $this->input->post('nama_tempat_usaha');
        $alamat = $this->input->post('alamat');
        $nomor_penanggung_jawab = $this->input->post('nomor_penanggung_jawab');
        $email_penanggung_jawab = $this->input->post('email_penanggung_jawab');
        $nama_penanggung_jawab = $this->input->post('nama_penanggung_jawab');
        //$jenis_usaha = $this->input->post('jenis_usaha');
        $nomor = $this->input->post('nomor_p2k3');
        $tanggal = $this->input->post('tanggal_p2k3');
        $captcha = $this->input->post('captcha');

        if ($this->session->userdata('mycaptcha') == $captcha) { //cek captcha


            $data = array(

                'username' => $username,
                'password' => $password,
                'nama_perusahaan' => $nama_perusahaan,
                'alamat' => $alamat,
                'jumlah_karyawan' => $jumlah_karyawan,
                'nib' => $nomor_induk,
                'nomor_telepon_pj' => $nomor_penanggung_jawab,
                'email' => $email_penanggung_jawab,
                'nama_pj'  => $nama_penanggung_jawab,
                //'jenis_usaha' => $jenis_usaha,
                //'nama_tempat_usaha' => $nama_tempat_usaha,
                'no_p2k3' => $nomor,
                'tanggal_p2k3' => $tanggal,
                'level' => '2',
                'id_tb_user' => '',
                'last_login' => ''
            );
            // var_dump($data);
            $this->M_home->register($data);
            $this->session->set_flashdata('flash', 'Data Anda Berhasil Disimpan');
            redirect('index.php/Home');
        } else {
            //$this->session->set_flashdata('flash','Data Anda Berhasil Disimpan');
            redirect('index.php/Home');
        }
    }


    public function login_check()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $login = $this->M_home->login_user($username, $password)->result(); //ambil data dari DB

        if ($login == null) {
            //jika gagal
            //untuk notif jika gagal login
            redirect('index.php/Home');
        } else {
            //jika berhasil login
            $this->session->set_userdata('username', $username); //simpan session
            $query = $this->M_home->get_id_user($username);
            $id_user = $query[0]->id_tb_user;
            //var_dump($id_user);
            $this->session->set_userdata('id_user', $id_user);
            $this->M_home->last_login($username); //update tanggal di db
            $this->session->set_flashdata('flash', 'Anda Berhasil Masuk');
            $level = $login[0]->level;
            $this->session->set_userdata('level', $level); //simpan session

            if ($level == '1') {
                redirect('index.php/Disnaker/dashboard', 'refresh');
                echo "admin";
            } else if ($level == '3') {
                redirect('index.php/Pemerintah/dashboard', 'refresh');
                echo "admin";
            }
            else if($level== '4'){
                redirect('index.php/Pengaduan/data_pengaduan','refresh');

            }
            else if($level== '5'){
                redirect('index.php/Pengawas/daftar_tugas','refresh');

            }
            else{
                // echo "user";
                //var_dump($this->session->userdata('id_user'));
                redirect('index.php/Admin/dashboard');
            }
        }
    }



    public function logout()
    {
        //var_dump($this->session->userdata('email'));
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('flash', 'Anda Berhasil Keluar');
        //var_dump($this->session->userdata('email'));
        redirect('index.php/Home');
    }

    public function register_masyarakat()
    {




        $captcha = $this->input->post('captcha');

        if ($this->session->userdata('mycaptcha') == $captcha) { //cek captcha


            $data_user = [
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level' => '4',
            ];
            // var_dump($data_user);
            $this->M_home->register($data_user);

            $data_user_pegadu = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'domisili' => $this->input->post('domisili'),
                'ttl' => $this->input->post('tanggal_lahir'),
                'jk' => $this->input->post('jk'),
                'no_telp' => $this->input->post('no_tlp'),
                'email' => $this->input->post('email'),
                'id_user' => $this->M_home->get_id_masyarakat()->result()[0]->id_tb_user,
            ];
            // var_dump($data_user_pegadu);
            $this->M_home->register_pengadu($data_user_pegadu);

            $this->session->set_flashdata('flash', 'Data Anda Berhasil Disimpan');
            redirect('index.php/Home');
        } else {
            //$this->session->set_flashdata('flash','Data Anda Berhasil Disimpan');
            redirect('index.php/Home');
        }
    }
}
