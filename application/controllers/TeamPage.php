<?php
class TeamPage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Team_model');
    }

    public function index()
    {
        $data['title'] = 'Our Team';
        $data['team'] = $this->Team_model->get_all();

        $this->load->view('templates/home_header', $data);
        $this->load->view('frontend/team', $data);
        $this->load->view('templates/home_footer');
    }

}
