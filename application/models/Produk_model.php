<?php

class Produk_model extends CI_Model {
    public function getAllProduk(){
        $query = $this->db->get('produk');
        return $query->result_array();
    }
}