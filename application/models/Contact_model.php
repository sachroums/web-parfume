<?php
class Contact_model extends CI_Model {

    public function insert($data)
    {
        return $this->db->insert('contact_message', $data);
    }

    public function get_all()
    {
        return $this->db->order_by('id', 'DESC')->get('contact_message')->result();
    }

    public function delete($id)
    {
        return $this->db->delete('contact_message', ['id' => $id]);
    }
}
