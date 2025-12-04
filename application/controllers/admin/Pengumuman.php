<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengumuman_model');
        $this->load->library('upload');
        $this->load->library('session');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }

    }

    public function index()
    {
        $data['title'] = 'Manajemen Pengumuman';
        $data['pengumuman'] = $this->Pengumuman_model->get_all();

        // Gunakan template ADMIN
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/pengumuman/index', $data);
        $this->load->view('templates/admin_footer');
    }

    

    public function tambah()
    {
        $data['title'] = 'Tambah Pengumuman';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/pengumuman/tambah');
        $this->load->view('templates/admin_footer');
    }

    public function simpan()
    {
        // konfigurasi upload
        $config['upload_path'] = './uploads/pengumuman/';
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

        $this->Pengumuman_model->insert($data);
        redirect('pengumuman');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Berita';
        $data['p'] = $this->Pengumuman_model->get_by_id($id);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/pengumuman/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id)
    {
        $config['upload_path'] = './uploads/pengumuman/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        $gambar = $this->input->post('gambar_lama');

        if ($this->upload->do_upload('gambar')) {
            // hapus gambar lama
            if ($gambar && file_exists('./uploads/pengumuman/'.$gambar)) {
                unlink('./uploads/pengumuman/'.$gambar);
            }
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'gambar' => $gambar,
        ];

        $this->Pengumuman_model->update($id, $data);
        redirect('pengumuman');
    }

    public function hapus($id)
    {
        $p = $this->Pengumuman_model->get_by_id($id);
        if ($p->gambar && file_exists('./uploads/pengumuman/'.$p->gambar)) {
            unlink('./uploads/pengumuman/'.$p->gambar);
        }
        $this->Pengumuman_model->delete($id);
        redirect('pengumuman');
    }
}
