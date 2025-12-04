<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->model('Pengumuman_model');
        $this->load->helper('text'); // word_limiter
    }

    public function index()
    {
        $data['title'] = 'Informasi';
        $data['berita'] = $this->Berita_model->get_all();
        $data['pengumuman'] = $this->Pengumuman_model->get_all();

        $this->load->view('templates/home_header', $data);
        $this->load->view('informasi/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function berita($id)
    {
        $data['berita'] = $this->Berita_model->get_by_id($id);
        if (!$data['berita']) show_404();
        $data['title'] = $data['berita']->judul;
        $this->load->view('templates/home_header', $data);
        $this->load->view('informasi/detail_berita', $data);
        $this->load->view('templates/home_footer');
    }

    public function pengumuman($id)
    {
        $data['pengumuman'] = $this->Pengumuman_model->get_by_id($id);
        if (!$data['pengumuman']) show_404();
        $data['title'] = $data['pengumuman']->judul;
        $this->load->view('templates/home_header', $data);
        $this->load->view('informasi/detail_pengumuman', $data);
        $this->load->view('templates/home_footer');
    }
}
