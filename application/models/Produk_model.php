<?php

class Produk_model extends CI_Model {
    public function getAllProduk(){
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    
    public function tambahDataProduk(){
        $data = [
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
    
    $this->db->insert('produk', $data);
    }

    public function hapusDataProduk($id){
        $this->db->delete('produk', ['id' => $id]);
    }

    public function getProdukById($id){
        $query = $this->db->get_where('produk', ['id' => $id]);
        return $query->row_array();
    }

    public function ubahDataProduk(){
        $data = [
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
        ];
    
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('produk', $data);
    }

    public function cariDataProduk(){
        $katacari = $this->input->post('katacari');
        $this->db->like('nama', $katacari);
        $this->db->or_like('kategori', $katacari);
    }
}