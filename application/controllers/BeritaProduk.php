<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaProduk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    // ==========================
    // HALAMAN LIST BERITA
    // ==========================
    public function index()
    {
        $data['berita'] = $this->Berita_model->get_all();
        $data['active_menu'] = 'berita';   // untuk navbar highlight

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/berita', $data);  // sesuaikan nama file view Anda
        $this->load->view('templates/home_footer');
    }

    // ==========================
    // HALAMAN DETAIL BERITA
    // ==========================
    public function detail($id)
    {
        $data['berita'] = $this->Berita_model->get_by_id($id);

        if (!$data['berita']) {
            show_404();
        }

        $data['active_menu'] = 'berita';

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/detail', $data);
        $this->load->view('templates/home_footer');
    }
}
