<?php
class Mahasiswa extends CI_Controller{
    public function index(){
        echo "Selamat Datang Mahasiswa";
    }

    public function biodata($nim="", $nama=""){
        $data['nim']=$nim;
        $data['nama']=$nama;
        $this->load->view('Mahasiswa_view',$data);
        //echo "NIM : $nim <br>";
        //echo "Nama : $nama";
    }
}