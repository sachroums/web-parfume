<?php
class Video_model extends CI_Model
{
    private $table = "video_produk";

    public function get_all()
    {
        return $this->db->order_by('tanggal', 'DESC')->get($this->table)->result();
    }

    public function get_active()
    {
        return $this->db->where('status', 1)->order_by('tanggal', 'DESC')->get($this->table)->result();
    }

    public function get_latest($limit = 3)
    {
        return $this->db->order_by('tanggal', 'DESC')->limit($limit)->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
