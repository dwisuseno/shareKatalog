<?php
/*
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
*/
class Upload_file extends CI_Controller {
 
	function __construct(){
     parent::__construct();
     $this->load->library('session');
     $this->load->model('peta');
     //$this->load->model('abd');
     $this->load->model('auth');
     $this->load->model('search');
     $this->load->helper(array('form', 'url'));
  }
 
	function index(){
		$this->load->view('form_upload', array('error' => ' ' ));
	}
 
	function do_upload(){
		if ($this->session->userdata('logged_in')) {
			$config['upload_path'] = 'upload/';
			$config['allowed_types'] = 'gif|jpg|png|xls|xlsx|pdf|JPG|JPEG';
			$config['max_size']	= '900000';
			$config['max_width']  = '1024';
			$config['max_height']  = '900';
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['title'] = 'Request Map';
	 
			$this->load->library('upload', $config);
	 
			if ( ! $this->upload->do_upload()){
				$error = array('error' => $this->upload->display_errors());
	 			$pesan = 'Anda Gagal';
				redirect('main/request');
			}
			else{
				$data = array('upload_data' => $this->upload->data());
	 			$pesan = 'Anda Berhasil';
				redirect('main/status');
			}
		} else {
	        redirect('login');
	    }
	}
}
?>