<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');
    }

    public function index() {
        $data['title'] = "Hubungi Kami";

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/contact', $data);
        $this->load->view('templates/home_footer');
    }

    public function kirim() {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'subjek' => $this->input->post('subjek'),
            'pesan' => $this->input->post('pesan'),
        ];

        $this->Contact_model->insert($data);

        $this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
        redirect('contact');
    }
}
