<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Abd extends CI_Model{

    function data_abd(){
        return $this->db->query("select * from abd")->result();
    }

/*
* Nama Aplikasi: Request Map dan Katalog App
* Nama Pembuat: Dwi Al Aji Suseno
* Universitas: Institut Teknologi Sepuluh Nopember
* Jurusan: Teknik Informatika
* NIM: 5112100185
* Framework Code Igniter
* note: Selamat Mengembangkan aplikasi ini. 
*/    
    
 }
?>

