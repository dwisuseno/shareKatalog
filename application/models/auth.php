<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
*/
class Auth extends CI_Model{

    function login($session){
        return $this->db->query("select id_login from userxx where username = '$session'")->row();
    }

    function nama($session) {
        return $this->db->query("select nama from userxx where username = '$session'")->row();
    }

    function nama_dept($session) {
        return $this->db->query("select b.nama_dept from userxx a,departemen b where username = '$session' and b.id_dept = a.id_dept")->row();
    }

    function do_auth($username,$password){
    $hasil = $this->db->query("select * from userxx where username = '$username' and password = '$password'");
    if($hasil->num_rows() == 1)
    {
        return true;
    }
    else
    {
        return false;
    }
   }



 }
?>