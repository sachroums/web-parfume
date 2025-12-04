<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Layanan_model');
        $this->load->library('upload');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }
    }

    public function index() {
        $data['title'] = 'Manajemen Layanan';
        $data['layanan'] = $this->Layanan_model->get_all();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/layanan/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah() {
        $data['title'] = 'Tambah Layanan';

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/layanan/tambah');
        $this->load->view('templates/admin_footer');
    }

    public function simpan() {
        $config['upload_path'] = './uploads/layanan/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $gambar = '';
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'icon' => $this->input->post('icon'),
            'gambar' => $gambar
        ];

        $this->Layanan_model->insert($data);
        redirect('layanan');
    }

    public function edit($id) {
        $data['title'] = 'Edit Layanan';
        $data['layanan'] = $this->Layanan_model->get_by_id($id);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/layanan/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id) {
        $config['upload_path'] = './uploads/layanan/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $gambar = $this->input->post('gambar_lama');

        if ($this->upload->do_upload('gambar')) {
            if ($gambar && file_exists('./uploads/layanan/' . $gambar)) {
                unlink('./uploads/layanan/' . $gambar);
            }
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'icon' => $this->input->post('icon'),
            'gambar' => $gambar
        ];

        $this->Layanan_model->update($id, $data);
        redirect('layanan');
    }

    public function hapus($id) {
        $layanan = $this->Layanan_model->get_by_id($id);

        if ($layanan->gambar && file_exists('./uploads/layanan/'.$layanan->gambar)) {
            unlink('./uploads/layanan/'.$layanan->gambar);
        }

        $this->Layanan_model->delete($id);
        redirect('layanan');
    }
}
