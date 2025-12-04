<?php
class Layanan_model extends CI_Model {


public function get_all()
{
return $this->db->get('layanan')->result();
}


public function insert($data)
{
return $this->db->insert('layanan', $data);
}


public function get_by_id($id)
{
return $this->db->get_where('layanan', ['id' => $id])->row();
}


public function update($id, $data)
{
return $this->db->where('id', $id)->update('layanan', $data);
}


public function delete($id)
{
return $this->db->delete('layanan', ['id' => $id]);
}
}
?>