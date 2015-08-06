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
class Search extends CI_Model{

    function SearchAll(){
        return $this->db->query("select * from petagis")->result();
    }

    function cari($input){
    	return $this->db->query("select * from petagis where nama_file like '%%$input%%'")->result();
    }

    function jumlah_request(){
        return $this->db->query("select count(id_request) as jumlah_request from request where status = 'request'")->row();
    }

    function jumlah_delivered(){
        return $this->db->query("select count(id_request) as jumlah_delivered from request where status = 'delivered'")->row();
    }

    function request($requester,$tag,$judul,$deskripsi,$session){
    	$this->db->query("insert into request (requester,judul,deskripsi,status,tgl_request,id_login,tag) values ('$requester','$judul','$deskripsi','request',sysdate(),999,'$tag')");

        //$this->db->query("insert into petagis_2015 () values ()")
    }

    function data_request(){
    	return $this->db->query("select a.requester,a.judul,a.deskripsi,a.status,a.tgl_request,b.nama 
                                from request a,userxx b 
                                where b.id_login = a.id_login")->result();
    } 

    function ownRequest($logname) {
        return $this->db->query("select a.requester,a.judul,a.deskripsi,a.status,a.tgl_request,b.nama 
                                from request a,userxx b 
                                where b.id_login = a.id_login and a.requester = '$logname' ")->result();
    }


    function id_role($session){
      return $this->db->query("select id_role,nama from userxx where username = '$session'")->row();
    
    }

    function id_login($session){
      return $this->db->query("select id_login from userxx where username = '$session'")->row();
    
    }

    function user($session){
      return $this->db->query("select username from userxx where username = '$session'")->row();
    
    }

    function password($session){
        return $this->db->query("select password from userxx where username ='$session'")->row();
    }

    function simpan($nama,$password,$session){
        $this->db->query("update userxx set nama='$nama', password='$password' where username = '$session'");
        
    }

    function pengguna_map(){
        return $this->db->query("select a.id_login,a.nama as nama_user,a.username,b.nama_dept,c.nama from userxx a,departemen b,role c where a.id_dept = b.id_dept and c.id_role = a.id_role")->result();
    }

    function getData(){
        return $this->db->query("select a.nama,a.username,b.nama_dept from userxx a,departemen b where a.id_dept = b.id_dept")->result();
    }

    function update_status($id_login,$judul,$status){
        $this->db->query("update request set status='$status',id_login='$id_login' where judul='$judul'");
    }

    function getDept(){
        return $this->db->query("select * from departemen")->result();
    }

    function tambah_user($nama,$username,$id_dept,$role,$pass){
        $this->db->query("insert into userxx (id_dept,nama,username,password,id_role) values ('$id_dept','$nama','$username','$pass','$role')");
    }

    function hapus_user($id_login){
        $this->db->query("delete from userxx where id_login = '$id_login'");
    }

    function getAllTag(){
        return $this->db->query("select * from tag")->result();
    }

    function getNumberOfUser(){
        return $this->db->query("select count(id_login) as jumlah_user from userxx")->row();
    }

    function tambahtag($nama_tag){
        $this->db->query("insert into tag (nama_tag) values ('$nama_tag')");
    }

    function hapustag($tag){
        $this->db->query("delete from tag where nama_tag = '$tag'");
    }

    function role(){
        return $this->db->query("select * from role")->result();
    }

    function dept(){
        return $this->db->query("select * from departemen")->result();
    }

    function update_user($id_login,$nama,$username,$dept,$role,$pass){
        $this->db->query("update userxx set id_role = '$role' , id_dept = '$dept' , username = '$username' , nama ='$nama' , password = '$pass' where id_login='$id_login' ");
    }

    function selectJudul(){
        return $this->db->query("select judul from request")->result();
    }

    function deleteRequest($judul){
        $this->db->query("delete from request where judul = '$judul'");
    }

 }
?>