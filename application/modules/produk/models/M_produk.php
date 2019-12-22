<?php
class M_produk extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_produk($id = FALSE)
    {
        if($id === FALSE)
        {
            $query = $this->db->get('produk');
            return $query->result_array();
        }

        $this->db->where('id_produk', $id);
        $query = $this->db->get('produk');
        return $query->row_array();
    }
    public function get_produk_join_kategori()
    {
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    public function get_produk_join()
    {
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $this->db->join('user', 'produk.id_user = user.id_user', 'left');
        $query = $this->db->get('produk');
        return $query->result_array();
    }
}