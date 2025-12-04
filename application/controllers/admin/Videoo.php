<?php
class Videoo extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Video_model');
    }

    public function index() {
        $data['videoo'] = $this->Video_model->get_all();
        $data['title'] = "Kelola Video Produk";

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/videoo/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah() {
        $data['title'] = "Tambah Video Produk";

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/videoo/tambah');
        $this->load->view('templates/admin_footer');
    }

    private function _upload_video() {
    $config = [
        'upload_path'   => FCPATH . 'uploads/videoo/',
        'allowed_types' => 'mp4|webm|MP4|WEBM',
        'max_size'      => 500000
    ];

    if (!isset($this->upload)) {
        $this->load->library('upload');
    }

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('file_video')) {
        echo "<h3>UPLOAD VIDEO GAGAL</h3>";
        echo $this->upload->display_errors();
        return null;
    }

    return $this->upload->data('file_name');
}

private function _upload_thumbnail() {
    $config = [
        'upload_path'   => FCPATH . 'uploads/thumbnail/',
        'allowed_types' => 'jpg|jpeg|png',
        'max_size'      => 5000
    ];

    $this->upload->initialize($config);

    if (!$this->upload->do_upload('thumbnail')) {
        echo "<h3>UPLOAD THUMBNAIL GAGAL</h3>";
        echo $this->upload->display_errors();
        return null;
    }

    return $this->upload->data('file_name');
}


    public function store() {
        $video = $this->_upload_video();
        $thumb = $this->_upload_thumbnail();

        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'file_video' => $video,
            'thumbnail' => $thumb,
            'status' => $this->input->post('status'),
        ];

        $this->Video_model->insert($data);
        redirect('videoo');
    }

    public function edit($id) {
        $data['video'] = $this->Video_model->get_by_id($id);
        $data['title'] = "Edit Video Produk";

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/videoo/edit', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update($id) {
        $video = $this->_upload_video();
        $thumb = $this->_upload_thumbnail();

        $data = [
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'status' => $this->input->post('status'),
        ];

        if ($video) $data['file_video'] = $video;
        if ($thumb) $data['thumbnail'] = $thumb;

        $this->Video_model->update($id, $data);
        redirect('videoo');
    }

    public function delete($id) {
        $this->Video_model->delete($id);
        redirect('videoo');
    }
}
