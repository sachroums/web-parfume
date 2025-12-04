<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function home()
    {
        $data['active_menu'] = 'produk';

        $data['title'] = "Home";
        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/home');
        $this->load->view('templates/home_footer');
    }

    public function katalog()
    {
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['title'] = "Katalog Produk";

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/katalog', $data);
        $this->load->view('templates/home_footer');
    }
}
