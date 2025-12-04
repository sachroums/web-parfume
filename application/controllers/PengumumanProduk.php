<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengumumanProduk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
    }

    // ==========================
    // HALAMAN LIST BERITA
    // ==========================
    public function index()
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_all();
        $data['active_menu'] = 'pengumuman';   // untuk navbar highlight

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/pengumuman', $data);  // sesuaikan nama file view Anda
        $this->load->view('templates/home_footer');
    }

    // ==========================
    // HALAMAN DETAIL BERITA
    // ==========================
    public function detail_pengumuman($id)
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_by_id($id);

        if (!$data['pengumuman']) {
            show_404();
        }

        $data['active_menu'] = 'pengumuman';

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/detail_pengumuman', $data);
        $this->load->view('templates/home_footer');
    }
}
