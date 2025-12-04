<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Katalog extends CI_Controller {

    public function index()
    {
        $this->load->model('Produk_model');
        $data['produk'] = $this->Produk_model->get_all_produk();
        $data['active_menu'] = 'produk';
        
        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/katalog', $data);
        $this->load->view('templates/home_footer');
    }
}
