<?php
class Cinema extends CI_Controller{
    public function index(){
        //$this untuk mengeksekusi perintah view
        $this->load->view('view-input-cinema');
    }

    public function output(){
        
        if($this->input->post('tipe')=="Reguler 2D"){
            $harga = 40000;
        }
        elseif($this->input->post('tipe')=="3D"){
            $harga = 80000;
        }
        elseif($this->input->post('tipe')=="Velvet"){
            $harga = 100000;
        }
        $total=$this->input->post('jumlah') * $harga;

            $data = [
                'nama' => $this->input->post('nama'),
                'judul' => $this->input->post('judul'),
                'jam' => $this->input->post('jam'),
                'tipe' => $this->input->post('tipe'),
                'jumlah' => $this->input->post('jumlah'),
                'harga' => $harga,
                'total' => $total
            ];
        $this->load->view('view-output-cinema',$data);
    }
}