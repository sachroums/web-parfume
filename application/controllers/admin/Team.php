<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Team_model');
        $this->load->library('upload');
        $this->load->library('session');

        if (!$this->session->userdata('admin')) {
            redirect('auth');
        }
    }

    public function index() {
        $data['title'] = 'Manajemen Team';
        $data['team'] = $this->Team_model->get_all();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/team/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah() {
        $data['title'] = 'Tambah Anggota Team';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/team/tambah');
        $this->load->view('templates/admin_footer');
    }

    public function simpan() {
        $config['upload_path'] = './uploads/team/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        $foto = '';
        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data('file_name');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $foto
        ];

        $this->Team_model->insert($data);
        redirect('team');
    }

    public function edit($id) {
        $data['title'] = 'Edit Anggota Team';
        $data['team'] = $this->Team_model->get_by_id($id);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/team/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id) {
        $config['upload_path'] = './uploads/team/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size'] = 2048;
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        $foto = $this->input->post('foto_lama');

        if ($this->upload->do_upload('foto')) {
            if ($foto && file_exists('./uploads/team/'.$foto)) {
                unlink('./uploads/team/'.$foto);
            }
            $foto = $this->upload->data('file_name');
        }

        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'foto' => $foto
        ];

        $this->Team_model->update($id, $data);
        redirect('team');
    }

    public function hapus($id) {
        $team = $this->Team_model->get_by_id($id);

        if ($team->foto && file_exists('./uploads/team/'.$team->foto)) {
            unlink('./uploads/team/'.$team->foto);
        }

        $this->Team_model->delete($id);
        redirect('team');
    }
}
