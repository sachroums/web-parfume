<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
    public function get_all()
    {
        $this->db->order_by('tanggal', 'DESC');
        return $this->db->get('berita')->result();
    }

    public function get_latest()
    {
        $this->db->order_by('tanggal', 'DESC');
        $this->db->limit(1);
        return $this->db->get('berita')->row(); // row() untuk ambil satu baris
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert('berita', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('berita', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('berita', ['id' => $id]);
    }
}

