<?php

class Produk extends CI_Controller{
    //put your code here
    public $title = 'Produk';
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
        $this->load->model('m_produk');
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('administrator'));
        }
    }

    public function index() {
        $data['title'] = $this->title;
        $data['produk'] = $this->m_produk->get_produk_join_kategori();
        $data['views'] = 'produk';
        $this->load->view('new/header',$data);
    }

    //class untuk add produk
    public function add_produk()
    {
        $data['title'] = $this->title;
        $data['views'] = 'input_produk';
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
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
        );
        $result = $this->m_crud->insert('produk', $data);
        redirect('produk/');
    }

    public function edit($id)
    {
        $data['title'] = $this->title;
        $data['views'] = 'edit_produk';
        $id = simple_decrypt($id);
        $data['produk_edit'] = $this->m_produk->get_produk($id);
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
            'nama_produk' => $this->input->post('nama_produk'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'id_kategori' => $this->input->post('id_kategori'),
        );

        // if($filename != ''){
        //     $data['gambar_user'] = $filename;
        // }

        $result = $this->m_crud->update('produk', 'id_produk', $data, $idx);
        redirect('produk/');
    }

    public function hapus($id)
    {
        $id = simple_decrypt($id);
        $result = $this->m_crud->delete('produk','id_produk',$id);
        redirect('produk/');
    }
    public function produk_kategori() {
        $data['title'] = $this->title;
        $data['kategori'] = $this->m_kategori->get_kategori();
        $data['views'] = 'kategori';
        $this->load->view('new/header',$data);
    }
}