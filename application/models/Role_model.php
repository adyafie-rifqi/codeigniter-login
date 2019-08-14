<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function getRole()
    {
        return $this->db->get('user_role')->result_array();
    }
    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }
    public function hapusRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }
}
