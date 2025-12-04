<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }

        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Admin';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates/admin_footer');
    }

    public function produk()
    {
        $data['title'] = 'Kelola Produk';
        $data['produk'] = $this->Produk_model->get_all_produk();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/produk/index', $data);
        $this->load->view('templates/admin_footer');
    }
}
