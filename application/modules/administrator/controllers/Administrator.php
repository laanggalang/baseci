<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Administrator extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('m_login');
    }   
    
    
    public function index()
    {
        $this->load->view('login');
    }
    public function auth() {
        $login = $this->m_login->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
            $row = $this->m_login->data_login($this->input->post('username'), md5($this->input->post('password')));
            $data = array(
                'logged' => 1,
                'nama' => $row->nama,
                'id_user' => $row->id_user,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
            
            echo"success";

        } else {
            echo"gagal";
        }
    }
    function out() {
        //        destroy session
        $this->session->sess_destroy();
        //        redirect ke halaman login
        redirect(site_url('administrator/'));
    }
    
    
}