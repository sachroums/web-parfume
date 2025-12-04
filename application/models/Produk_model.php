<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
    

    public function get_all_produk()
    {
        return $this->db->get('produk')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('produk', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('produk', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('produk', $data);
    }

    public function delete($id)
    {
        return $this->db->where('id', $id)->delete('produk');
    }
}

