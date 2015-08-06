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
class Peta extends CI_Model{

    function petagis_2015(){
        return $this->db->query("select * from petagis")->result();
    }

    function status_request(){
        return $this->db->query("select * from request")->result();
    }

    function maprequest(){
    	return $this->db->query("select * from request where status = 'delivered'")->result();
    }

    function tag(){
    	return $this->db->query("select * from tag")->result();
    }

    function getRequester($map){
        $hasil = $this->db->query("select userxx.nama as nama
                                 from userxx,request
                                 where request.id_request = '$map' and userxx.id_login = request.id_login ")->row();
        return $hasil->nama;
    }

    function getDepartemen($map){
        $hasil = $this->db->query("select departemen.nama_dept as dept
                                 from userxx,request,departemen
                                 where request.id_request = '$map' and userxx.id_login = request.id_login and userxx.id_dept = departemen.id_dept ")->row();
        return $hasil->dept;  
    }

    function insertpeta($map,$reg,$requester,$departemen,$nama_file,$pic){
        $this->db->query("insert into petagis (Id,id_request,tgl_pembuatan,requester,departemen,nama_file,pic) values ('$reg','$map',now(),'$requester','$departemen','$nama_file','$pic')");
    }

    function editTag($tagname,$tag){
        $this->db->query("update tag set nama_tag = '$tagname' where Id = '$tag'");
    }

 }
?>