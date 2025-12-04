<?php
class ContactAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Contact_model');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }
    }

    public function index() {
        $data['title'] = "Pesan Masuk";
        $data['pesan'] = $this->Contact_model->get_all();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/contactadmin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function hapus($id) {
        $this->Contact_model->delete($id);
        redirect('admin/contactadmin');
    }
}
