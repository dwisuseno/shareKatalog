<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
*/
class Logout extends CI_Controller {
	function __construct(){
     parent::__construct();
     $this->load->helper("html");
     $this->load->helper("form");
     $this->load->helper("text");
     $this->load->model('auth');
     $this->load->library('session');
  }


	public function index()
	{
		$data['title'] = 'Selamat Datang di KRP';
		$this->session->sess_destroy();
		$this->load->view('login',$data);
		//$this->load->
	}

	public function auth_login()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if($this->auth->do_auth($username, $password) == true)
		{
			$newdata = array(
				'username'  => $username,
				'password' => $password,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect('main');
		}
		else
		{
			redirect('login');
		}
	}

}

