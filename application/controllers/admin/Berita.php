<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
        $this->load->library('upload');
        $this->load->library('session');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }

    }

    public function index()
    {
        $data['title'] = 'Manajemen Berita';
        $data['berita'] = $this->Berita_model->get_all();

        // Gunakan template ADMIN
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/berita/index', $data);
        $this->load->view('templates/admin_footer');
    }

    

    public function tambah()
    {
        $data['title'] = 'Tambah Berita';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/berita/tambah');
        $this->load->view('templates/admin_footer');
    }

    public function simpan()
    {
        // konfigurasi upload
        $config['upload_path'] = './uploads/berita/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $gambar = '';
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $gambar,
            'tanggal' => date('Y-m-d'),
        ];

        $this->Berita_model->insert($data);
        redirect('berita');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Berita';
        $data['b'] = $this->Berita_model->get_by_id($id);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/berita/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id)
    {
        $config['upload_path'] = './uploads/berita/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        $gambar = $this->input->post('gambar_lama');

        if ($this->upload->do_upload('gambar')) {
            // hapus gambar lama
            if ($gambar && file_exists('./uploads/berita/'.$gambar)) {
                unlink('./uploads/berita/'.$gambar);
            }
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $gambar,
        ];

        $this->Berita_model->update($id, $data);
        redirect('berita');
    }

    public function hapus($id)
    {
        $b = $this->Berita_model->get_by_id($id);
        if ($b->gambar && file_exists('./uploads/berita/'.$b->gambar)) {
            unlink('./uploads/berita/'.$b->gambar);
        }
        $this->Berita_model->delete($id);
        redirect('berita');
    }
}
