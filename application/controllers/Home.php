<?php

class Home extends CI_Controller
{
    function _construct(){
        parent::__construct();
    }

    function index(){
        $data['judul'] = 'Website CRUD CI';
        $this->load->view('template/header',$data);
        $this->load->view('home/index');
        $this->load->view('template/footer');
    }
}