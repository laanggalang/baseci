<?php
class M_user extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_user($id = FALSE)
    {
        if($id === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $this->db->where('id_user', $id);
        $query = $this->db->get('user');
        return $query->row_array();
    }
    
}