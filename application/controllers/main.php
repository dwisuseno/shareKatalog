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
class Main extends CI_Controller {
	function __construct(){
     parent::__construct();
     $this->load->library('session');
     $this->load->model('peta');
     $this->load->model('abd');
     $this->load->model('auth');
     $this->load->model('search');
     $this->load->helper(array('form', 'url'));
  }

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['jumlah_user'] = $this->search->getNumberOfUser();
			$data['title'] = 'Request Peta';
			$this->load->view('main',$data);
		} else {
        redirect('login');
    	}
	}

	public function wilayah(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['title'] = 'Request Map App | Wilayah';
			$this->load->view('wilayah',$data);
		} else {
        redirect('login');
    	}
	}

	public function tahun(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['petagis'] = $this->peta->petagis_2015();
			$data['title'] = 'Request Map App | Tahun';
			$this->load->view('tahun',$data);
		} else {
        redirect('login');
    	}
	}

	public function saving(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			//$user = $this->input->post('user');
			$nama = $this->input->post('nama');
			$password = md5($this->input->post('password'));
			$this->search->simpan($nama,$password,$session);
			
			redirect('main/user_profile');
		} else {
        redirect('login');
    	}
	}

	public function user_profile(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['title'] = 'Request Map App | User Profile';
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['pass'] = $this->search->password($session);
			$data['user'] = $this->search->user($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$this->load->view('user_profile',$data);
		} else {
        redirect('login');
    	}
	}

	public function penggunaan_peta(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['title'] = 'Request Map App | Penggunaan Peta';
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['petagis'] = $this->peta->petagis_2015();
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$this->load->view('penggunaan_peta',$data);
		} else {
        redirect('login');
    	}
	}

	public function user(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['title'] = 'Request Map App | User Setting';
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['pengguna'] = $this->search->pengguna_map();
			$this->load->view('user',$data);
		} else {
        redirect('login');
    	}
	}

	public function search(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['title'] = 'Request Map App | Search';
			$this->load->view('search',$data);
		} else {
        redirect('login');
    	}
	}

	public function cari(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$input = $this->input->post('input');
			$data['input'] = $this->search->cari($input);
			$data['title'] = 'Request Map App | Hasil Pencarian';
			$this->load->view('hasil',$data);
		} else {
        redirect('login');
    	}
	}

	public function mencari(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['title'] = 'Request Map App | Search';
			$this->load->view('search',$data);
		} else {
        redirect('login');
    	}
	}

	public function request(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['nama_dept'] = $this->auth->nama_dept($session);
			$data['username'] = $session;
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['taging'] = $this->search->getAllTag();
			$data['title'] = 'Request Map App | Request';
			$this->load->view('request',$data);
		} else {
        redirect('login');
    	}
	}

	public function check_request(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_login'] = $this->search->id_login($session);
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$map = '2016';
			$data['test'] = $this->peta->getRequester($map);
			$data['map'] = $this->peta->maprequest();
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['data_request'] = $this->search->data_request();
			$data['title'] = 'Request Map App | Check Request';
			$this->load->view('check_request',$data);
		} else {
        redirect('login');
    	}
	}

	public function tag(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_login'] = $this->search->id_login($session);
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['tag'] = $this->peta->tag();
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['title'] = 'Request Map App | Tags';
			$this->load->view('tag',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_request(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_login'] = $this->search->id_login($session);
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['tag'] = $this->peta->tag();
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['data_request'] = $this->search->data_request();
			$data['title'] = 'Request Map App | Request Setting';
			$this->load->view('data_request',$data);
		} else {
        redirect('login');
    	}
	}

	public function hitung(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$requester = $this->input->post('requester');
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');
			$tag = $this->input->post('taging');
			$this->search->request($requester,$tag,$judul,$deskripsi,$session);
			redirect('main/status');
		} else {
        redirect('login');
    	}

	}

	public function update_status(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$requester = $this->input->post('requester');
			$judul = $this->input->post('judul');
			$status = $this->input->post('status');
			$id_login = $this->input->post('id_login');
			$this->search->update_status($id_login,$judul,$status);
			redirect('main/status');
		} else {
        redirect('login');
    	}

	}

	public function status(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['nama_Request'] = $this->search->selectJudul();
			$data['data_request'] = $this->search->data_request();
			$data['title'] = 'Request Map App | Status';
			$this->load->view('status',$data);
		} else {
        redirect('login');
    	}
	}

	public function ownRequest(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['nama_Request'] = $this->search->selectJudul();
			$data['data_request'] = $this->search->data_request();
			$data['title'] = 'Request Map App | Your Request';
			$this->load->view('own_request',$data);
		} else {
        redirect('login');
    	}
	}

	public function make_request(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['pengguna'] = $this->search->getData();
			$data['taging'] = $this->search->getAllTag();
			$data['title'] = 'Request Map App | Status';
			$this->load->view('make_request',$data);
		} else {
        redirect('login');
    	}
	}

	public function abd(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['username'] = $session;
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['title'] = 'Request Map App | Scan Abd';
			$data['data_abd'] = $this->abd->data_abd();
			$this->load->view('abd',$data);
		} else {
        redirect('login');
    	}
	}

	public function profile(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['title'] = 'Request Map App | Profile';
			$this->load->view('profile',$data);
		} else {
        redirect('login');
    	}
	}

	public function tambah_user(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['dept'] = $this->search->getDept();
			$data['title'] = 'Request Map App | Tambah User';
			$this->load->view('tambah_user',$data);
		} else {
        redirect('login');
    	}
	}

	public function proses_tambah(){
		if ($this->session->userdata('logged_in')) {
			$nama = $this->input->post('nama_lengkap'); 
			$id_dept = $this->input->post('departemen'); 
			$username = $this->input->post('username'); 
			$role = $this->input->post('role'); 
			$pass = md5($this->input->post('password')); 
			$this->search->tambah_user($nama,$username,$id_dept,$role,$pass);
			redirect('main/user');
		} else {
        redirect('login');
    	}
	}

	public function updateuser(){
		if ($this->session->userdata('logged_in')) {
			$id_login = $this->input->post('id_login');
			$nama = $this->input->post('nama'); 
			$dept = $this->input->post('departemen'); 
			$role = $this->input->post('role'); 
			$username = $this->input->post('username'); 
			$pass = md5($this->input->post('password')); 
			$this->search->update_user($id_login,$nama,$username,$dept,$role,$pass);
			redirect('main/user');
		} else {
        redirect('login');
    	}
	}

	public function edit_user(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['nama_role'] = $this->search->role();
			$data['nama_dept'] = $this->search->dept();
			$data['user'] = $this->search->pengguna_map();
			$data['title'] = 'Request Map App | Edit User';
			$this->load->view('edit_user',$data);
		} else {
        redirect('login');
    	}
	}

	public function hapus_user(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['user'] = $this->search->pengguna_map();
			$data['title'] = 'Request Map App | Hapus User';
			$this->load->view('hapus_user',$data);
		} else {
        redirect('login');
    	}
	}

	public function hapusRequest(){
		if ($this->session->userdata('logged_in')) {
			$judul= $this->input->post('judul');
			$this->search->deleteRequest($judul);
			redirect('main/status');
		} else {
        redirect('login');
    	}
	}

	public function proses_hapus(){
		if ($this->session->userdata('logged_in')) {
			$id_login = $this->input->post('id_login');
			$this->search->hapus_user($id_login);
			redirect('main/user');
		} else {
        redirect('login');
    	}
	}

	public function addingtag(){
		if ($this->session->userdata('logged_in')) {
			$nama_tag = $this->input->post('nama_tag');
			$this->search->tambahtag($nama_tag);
			redirect('main/tag');
		} else {
        redirect('login');
    	}
	}

	public function edittag(){
		if ($this->session->userdata('logged_in')) {
			$tagname = $this->input->post('tagname');
			$tag = $this->input->post('tag');
			$this->peta->editTag($tagname,$tag);
			redirect('main/tag');
		} else {
        redirect('login');
    	}
	}

	public function deletetag(){
		if ($this->session->userdata('logged_in')) {
			$tag = $this->input->post('tag');
			$this->search->hapustag($tag);
			redirect('main/tag');
		} else {
        redirect('login');
    	}
	}

	public function insertPeta(){
		if ($this->session->userdata('logged_in')) {
			$map = $this->input->post('map');
			$requester = $this->peta->getRequester($map);
			$departemen = $this->peta->getDepartemen($map);
			$reg = $this->input->post('register');
			$nama_file = $this->input->post('nama_file');
			$pic = $this->input->post('pic');
			$this->peta->insertpeta($map,$reg,$requester,$departemen,$nama_file,$pic);
			redirect('main/check_request');
		} else {
        redirect('login');
    	}
	}

	public function searching(){
		if ($this->session->userdata('logged_in')) {
			$session = $this->session->userdata('username');
			$data['id_role'] = $this->search->id_role($session);
			$data['nama'] = $this->auth->nama($session);
			$data['jumlah_request'] = $this->search->jumlah_request();
			$data['jumlah_delivered'] = $this->search->jumlah_delivered();
			$data['username'] = $session;
			$data['title'] = 'Request Map App | Hasil Pencarian';
			$this->load->view('hasil_pencarian',$data);
		} else {
        redirect('login');
    	}
	}
	
}
/* End of file Main.php */
/* Location: ./application/controllers/welcome.php */