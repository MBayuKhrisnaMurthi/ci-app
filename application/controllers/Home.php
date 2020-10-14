<?php

class Home extends CI_Controller {
    public function index($nama = 'Nexus Trinity'){
        $data['nama'] = $nama;
        $data['judul'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}