<?php
class M_crud extends CI_Model {
    function insert_id($table, $data){
        $this->db->trans_begin();
        $this->db->insert($table, $data);
        $last_id = $this->db->insert_id();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return $last_id;
        }
    }
    function insert($table, $data){
        $this->db->trans_begin();
        $this->db->insert($table, $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }
    function uploadfile01($var,$dir,$all){
        $this->load->library('upload');

        $namagambar = "file-".date('Ymdhis');
        $config=array(
            'upload_path' => $dir, //lokasi gambar akan di simpan
            'allowed_types' => $all, //ekstensi gambar yang boleh di uanggah
            'max_size' => '20000', //batas maksimal ukuran gambar
            'max_width' => '2048', //batas maksimal lebar gambar
            'max_height' => '2048', //batas maksimal tinggi gambar
            'file_name' => url_title($namagambar) //nama gambar
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload($var)){
            $file = $this->upload->data();
            return $file;
        }
        else{
            return 0;
        }
    }
    
    function uploadfile($var,$dir,$all){
        $new_name = time();
        $config2=array(
            'image_library' => 'gd2',
            'upload_path' => $dir, //lokasi gambar akan di simpan
            'allowed_types' => $all, //ekstensi gambar yang boleh di uanggah
            'create_thumb' => TRUE,
            'max_size' => '20000', //batas maksimal ukuran gambar
            'file_name' => $new_name
        );
        $this->load->library('upload');
        $this->upload->initialize($config2);
        if ($this->upload->do_upload($var))
        {
            $file = $this->upload->data()['file_name'];
            $config = array(
                'image_library' => 'gd2',
                'source_image' => $dir."".$file,
                'new_image' => $dir.'thumb-400/',
                'create_thumb' => TRUE,
                'maintain_ratio' => TRUE,
                'width'=>400,
                'thumb_marker' => ''
            );
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            $this->image_lib->clear();
            $config2 = array(
                'image_library' => 'gd2',
                'source_image' => $dir."".$file,
                'new_image' => $dir.'thumb-144/',
                'create_thumb' => TRUE,
                'maintain_ratio' => TRUE,
                'width'=>144,
                'thumb_marker' => ''
            );
            $this->image_lib->initialize($config2);
            $this->image_lib->resize();
            return $file;
        }
        else
        {
            return 0;
        }
    }
    function update($table, $field, $data, $id){
        $this->db->trans_begin();
        $this->db->update($table, $data, array($field => $id));
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }
    function delete($table, $field, $id) {
        $this->db->trans_begin();
        $this->db->delete($table, array($field => $id));
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return 0;
        }
        else {
            $this->db->trans_commit();
            return 1;
        }
    }
    
    public function email($tujuan,$subyek,$pesan)
    {
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "pasarsouvenirmurah.com";
        $config['smtp_port'] = "465";
        $config['smtp_crypto'] = "ssl";
        $config['smtp_user'] = "service@pasarsouvenirmurah.com";
        $config['smtp_pass'] = "psmupdatedua";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";
        $this->email->initialize($config);
        $this->email->from('service@pasarsouvenirmurah.com', 'Pasar Souvenir Murah');
        $this->email->to($tujuan);
        $this->email->subject($subyek);
        $this->email->message($pesan);
        //$this->email->send();
        if ( ! $this->email->send()) {
            show_error($this->email->print_debugger());
        } 
    }
    
}		