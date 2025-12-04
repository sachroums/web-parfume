<?php
class VideoParfume extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Video_model');
    }

    public function index() {
        $data['videoo'] = $this->Video_model->get_active();
        $data['title'] = "Video Produk";

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/video', $data);
        $this->load->view('templates/home_footer');
    }

    public function detail($id) {
        $data['videoo'] = $this->Video_model->get_by_id($id);
        $data['title'] = $data['videoo']->judul; // ✔ diperbaiki

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/videoo/detail', $data);
        $this->load->view('templates/home_footer');
    }
}
