<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function index()
    {
        $data['active_menu'] = 'home';
        $data['title'] = 'Berita Terbaru';
        $data['berita_terbaru'] = $this->Berita_model->get_latest();
        $data['berita']   = $this->Berita_model->get_all();
    
        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/home', $data);
        $this->load->view('templates/home_footer');
    }

    public function detail($id)
{
    $data['b'] = $this->Berita_model->get_by_id($id);
    if (!$data['b']) show_404();

    $data['title'] = $data['b']->judul;
    $this->load->view('templates/home_header', $data);
    $this->load->view('frontend/detail', $data);
    $this->load->view('templates/home_footer');
}
}
