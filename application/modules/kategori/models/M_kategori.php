<?php
class M_kategori extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_kategori($id = FALSE)
    {
        if($id === FALSE)
        {
            $query = $this->db->get('kategori');
            return $query->result_array();
        }

        $this->db->where('id_kategori', $id);
        $query = $this->db->get('kategori');
        return $query->row_array();
    }
    public function get_kategori_join()
    {
        $this->db->join('user', 'produk.id_user = user.id_user', 'left');
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    
}