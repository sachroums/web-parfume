<?php
class LayananPage extends CI_Controller {

    public function index()
    {
        $this->load->model('Layanan_model');

        $data['title'] = "Layanan Sérén";
        $data['layanan'] = $this->Layanan_model->get_all();

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/layanan', $data);
        $this->load->view('templates/home_footer');
    }

}
