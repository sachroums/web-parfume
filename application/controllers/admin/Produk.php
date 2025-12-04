<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
        $this->load->model('Produk_gambar_model'); 
        $this->load->library('upload');
        $this->load->library('session');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }

    }

    public function index()
    {
        $data['title'] = 'Manajemen Produk';
        $data['produk'] = $this->Produk_model->get_all_produk();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/Produk/index', $data);
        $this->load->view('templates/admin_footer');

    }

    public function tambah()
    {
        $data['title'] = 'Tambah Produk';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/produk/tambah');
        $this->load->view('templates/admin_footer');
    }
    
    public function simpan ()
    {
        // proses upload
        $config['upload_path']   = './uploads/produk/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $gambar = '';
        if ($this->upload->do_upload('gambar')) {
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $gambar,
            'stok' => $this->input->post('stok')
        ];

        $this->Produk_model->insert($data);

        $produk_id = $this->db->insert_id();
        if (!empty($_FILES['gambar_lain']['name'][0])) {

        $files = $_FILES;
        $count = count($_FILES['gambar_lain']['name']);

        for ($i = 0; $i < $count; $i++) {

            $_FILES['file']['name']     = $files['gambar_lain']['name'][$i];
            $_FILES['file']['type']     = $files['gambar_lain']['type'][$i];
            $_FILES['file']['tmp_name'] = $files['gambar_lain']['tmp_name'][$i];
            $_FILES['file']['error']    = $files['gambar_lain']['error'][$i];
            $_FILES['file']['size']     = $files['gambar_lain']['size'][$i];

            $config['upload_path']   = './uploads/produk/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048;
            $config['encrypt_name']  = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file')) {

                $file_name = $this->upload->data('file_name');

                // simpan ke tabel produk_gambar
                $this->Produk_gambar_model->insert([
                    'produk_id' => $produk_id,
                    'file'      => $file_name,
                    'urutan'    => $i + 1
                ]);
            }
        }
    }
        redirect('produk');
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Produk';
        $data['produk'] = $this->Produk_model->get_by_id($id);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/produk/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id)
    {
        $config['upload_path'] = './uploads/produk/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        $gambar = $this->input->post('gambar_lama');

        if ($this->upload->do_upload('gambar')) {
            // hapus gambar lama
            if ($gambar && file_exists('./uploads/produk/'.$gambar)) {
                unlink('./uploads/produk/'.$gambar);
            }
            $gambar = $this->upload->data('file_name');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'deskripsi' => $this->input->post('deskripsi'),
            'gambar' => $gambar,
            'stok' => $this->input->post('stok')
        ];

        $this->Produk_model->update($id, $data);
        redirect('produk');
    }

    public function hapus($id)
    {
        $b = $this->Produk_model->get_by_id($id);
        if ($b->gambar && file_exists('./uploads/produk/'.$b->gambar)) {
            unlink('./uploads/produk/'.$b->gambar);
        }
        $this->Produk_model->delete($id);
        redirect('produk');
    }
}

