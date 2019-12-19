<?php

class User extends CI_Controller{
    //put your code here
    public $title = 'user';
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
        $this->load->model('m_user');
        if ($this->session->userdata('logged')<>1) {
            redirect(site_url('administrator'));
        }
    }

    public function index() {
        $data['title'] = $this->title;
        $data['user'] = $this->m_user->get_user();
        $data['views'] = 'user';
        $this->load->view('new/header',$data);
    }
    public function add_user()
    {
        $data['title'] = $this->title;
        $data['views'] = 'input_user';
        $this->load->view('new/header',$data);
    }
    public function proses_add()
    {      
        // $variable = 'gambar_user'; //variable name dari form
        // $directory = './lib/blog/'; //direktori
        // $allowed_file = 'jpg|jpeg|gif|png'; //file yang diizinkan dibatasi dengan tanga |
        // $upload = $this->m_crud->uploadfile($variable,$directory,$allowed_file); //proses dengan modul insertfile
        // /* to upload file */
        // $filename = $upload['file_name'];

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
        );
        $result = $this->m_crud->insert('user', $data);
        redirect('user/');
    }

    public function edit($id)
    {
        $data['title'] = $this->title;
        $data['views'] = 'edit_user';
        $id = simple_decrypt($id);
        $data['user_edit'] = $this->m_user->get_user($id);
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
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'username' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
        );

        // if($filename != ''){
        //     $data['gambar_user'] = $filename;
        // }

        $result = $this->m_crud->update('user', 'id_user', $data, $idx);
        redirect('user/');
    }
    
    public function hapus($id)
    {
        $id = simple_decrypt($id);
        $result = $this->m_crud->delete('user','id_user',$id);
        redirect('user/');
    }

    
}