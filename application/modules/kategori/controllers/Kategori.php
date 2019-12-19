<?php

class Kategori extends CI_Controller{
    //put your code here
    public $title = 'Kategori';
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->helper('encrypt_helper');
        $this->load->helper('slug_helper');
        $this->load->model('../m_crud');
        $this->load->model('../m_global');
        $this->load->model('m_kategori');
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('administrator'));
        }
    }

    public function index() {
        $data['title'] = $this->title;
        $data['kategori'] = $this->m_kategori->get_kategori();
        $data['views'] = 'kategori';
        $this->load->view('new/header',$data);
    }
    public function add_kategori()
    {
        $data['title'] = $this->title;
        $data['views'] = 'input_kategori';
        $this->load->view('new/header',$data);
    }

    // class untuk proses add produk
    public function proses_add()
    {      
        // $variable = 'gambar_user'; //variable name dari form
        // $directory = './lib/blog/'; //direktori
        // $allowed_file = 'jpg|jpeg|gif|png'; //file yang diizinkan dibatasi dengan tanga |
        // $upload = $this->m_crud->uploadfile($variable,$directory,$allowed_file); //proses dengan modul insertfile
        // /* to upload file */
        // $filename = $upload['file_name'];

        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'desc_kategori' => $this->input->post('desc_kategori'),
        );
        $result = $this->m_crud->insert('kategori', $data);
        redirect('kategori/');
    }
    public function edit($id)
    {
        $data['title'] = $this->title;
        $data['views'] = 'edit_kategori';
        $id = simple_decrypt($id);
        $data['kategori_edit'] = $this->m_kategori->get_kategori($id);
        $this->load->view('new/header',$data);
    }
    public function proses_edit($id)
    {    

        // $variable = 'gambar_user'; //variable name dari form
        // $directory = './lib/blog/'; //direktori
        // $allowed_file = 'jpg|jpeg|gif|png'; //file yang diizinkan dibatasi dengan tanga |
        // $upload = $this->m_crud->uploadfile01($variable,$directory,$allowed_file); //proses dengan modul insertfile
        // /* to upload file */
        // $filename = $upload['file_name'];

        $idx = simple_decrypt($id);
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori'),
            'desc_kategori' => $this->input->post('desc_kategori'),
        );

        // if($filename != ''){
        //     $data['gambar_user'] = $filename;
        // }

        $result = $this->m_crud->update('kategori', 'id_kategori', $data, $idx);
        redirect('kategori/');
    }

}