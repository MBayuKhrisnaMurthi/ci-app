<?php

class Produk extends CI_Controller {
    public function index(){
        $data['judul'] = 'Daftar Produk';
        $this->load ->view('templates/header', $data);
        $this->load ->view('produk/index');
        $this->load ->view('templates/footer');
    }
}