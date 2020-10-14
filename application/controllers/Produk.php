<?php

class Produk extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }
    public function index(){
        $data['judul'] = 'Daftar Produk';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load ->view('templates/header', $data);
        $this->load ->view('produk/index', $data);
        $this->load ->view('templates/footer');
    }
}