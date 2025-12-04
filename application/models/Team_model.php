<?php
class Team_model extends CI_Model {

    public function get_all()
    {
        return $this->db->order_by('id','DESC')->get('team')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('team', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('team', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('team', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('team', ['id' => $id]);
    }
}

