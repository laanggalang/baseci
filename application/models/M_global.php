<?php

class M_global extends CI_Model {

    function get_all($table) {
        $query = $this->db->get($table);
        return $query->result_array();
    }
    
    function get_all_order($table,$field,$opsi) {
        $this->db->order_by($field,$opsi);
        $query = $this->db->get($table);
        return $query->result_array();
    }

    function get_by_id($table, $field, $id) {
        $query = $this->db->get_where($table, array($field => $id));
        return $query->row_array();
    }
    function get_list_by_id($table, $field, $id) {
        $query = $this->db->get_where($table, array($field => $id));
        return $query->result_array();
    }
    function get_by_id_array($table, $field, $id) {
        $query = $this->db->get_where($table, array($field => $id));
        return $query->row_array();
    }


    function pagination($table, $num, $offset){
        $query = $this->db->get($table, $num, $offset);
        return $query->result();
    }

    function jumlah(){
        return $this->db->get('os_artikel')->num_rows();
    }

    function jumlah_where($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);

        $query = $this->db->get();
        return $query->num_rows();
    }


    function get_limit($table, $limit) {
        $query = $this->db->limit($limit)->get_where($table);
        return $query->result();
    }

    function get_by_limit($table, $field, $id, $limit) {
        $query = $this->db->limit($limit)->get_where($table, array($field => $id));
        return $query->result();
    }

    function get_by_status($table, $field, $status) {
        $query = $this->db->get_where($table, array($field => $status));
        return $query->result();
    }

    function get_by_status_arr($table, $field, $status) {
        $query = $this->db->where_in($field, $status)->get($table);
        return $query->result();
    }

    function get_by_id_not_in($table, $field, $id, $not, $not_id) {
        $query = $this->db->where_not_in($not, $not_id)->get_where($table, array($field => $id));
        return $query->result();
    }

    function get_select($table, $field, $id) {
        $query = $this->db->where_not_in($field, $id)->get($table);
        return $query->result();
    }

    function get_select_in_id($table, $field, $id, $in, $in_id) {
        $query = $this->db->where_not_in($field, $id)->where($in, $in_id)->get($table);
        return $query->result();
    }

    function set_status($table, $field, $id, $stat, $status) {
        $this->db->set($stat, $status);
        $this->db->where($field, $id);
        $this->db->update($table);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }

    function check_exist($table, $field, $value) {
        $query = $this->db->get_where($table, array($field => $value), 1, 0);

        if ($query->num_rows() > 0) {
            return TRUE;
        }
        else {
            return FALSE;
        }	
    }



    function list_data($pencarian,$offset,$total){
        if ($pencarian){
            $this->db->like('judul_artikel',$pencarian);
        }     
        $result['total_rows'] = $this->db->count_all_results('os_artikel');

        if ($pencarian){
            $this->db->like('judul_artikel',$pencarian);
        }
        $query = $this->db->get('os_artikel',$total,$offset);

        $result['data'] = $query->result(); 
        return $result;
    }
    
    
    function num($table) {
        $query = $this->db->get($table);
        return $query->num_rows();
    }
    
    function num_by_id($table, $field, $id) {
        $query = $this->db->get_where($table, array($field => $id));
        return $query->num_rows();
    }


    public function cek_kode($id_pembeli)
    {
        $result = $this->db->query("select * from os_pesan where id_pembeli = '$id_pembeli' and new = 'Y'");
        return $result->row_array();
    }
    public function cek_id($kode,$id)
    {
        $result = $this->db->query("select * from os_pesan_detail where kode_pesan = '$kode' and id_produk = '$id'");
        return $result->row_array();
    }
    public function kode($panjang)
    {
        $karakter = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        for($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter{$pos};
        }
        return $string;
    }
}		