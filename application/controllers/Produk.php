<?php

class Produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['judul'] = 'Daftar Produk';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load ->view('templates/header', $data);
        $this->load ->view('produk/index', $data);
        $this->load ->view('templates/footer');
    }

    public function tambah(){
        $data['judul'] = 'Form Tambah Produk';
        $data['kategori'] = ['Bangku', 'Meja', 'Kursi', 'Lemari'];        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if ($this->form_validation->run() == FALSE){
            $this->load ->view('templates/header', $data);
            $this->load ->view('produk/tambah', $data);
            $this->load ->view('templates/footer');
        }
        else{
            $this->Produk_model->tambahDataProduk();
            $this->session->set_flashdata('flash', 'Ditambah!');
            redirect("produk");
        }
    }

    public function hapus($id){
        $this->Produk_model->hapusDataProduk($id);
        $this->session->set_flashdata('flash', 'Dihapus!');
        redirect("produk");
    }

}