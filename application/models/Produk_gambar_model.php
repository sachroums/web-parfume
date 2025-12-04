<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_gambar_model extends CI_Model {

    public function get_by_produk($produk_id)
    {
        return $this->db->order_by('urutan', 'ASC')
                        ->get_where('produk_gambar', ['produk_id' => $produk_id])
                        ->result();
    }

    public function insert($data)
    {
        return $this->db->insert('produk_gambar', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('produk_gambar', ['id' => $id]);
    }
}

