<?php

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa','model');
    }

    function index() {
        $data['judul'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model->fetchAll();
        if($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->model->cariMahasiswa();
        }
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('template/footer');
    }

    function tambah() {
        $data['judul'] = 'Tambah Data Mahasiswa';
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('nama_mhs','Nama','required');
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('template/footer');
        } else {
            $this->model->tambahMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }
    }

    function hapus($id) {
        $this->model->hapusMahasiswa($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }

    function detail($id) {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->model->fetchById($id);
        $this->load->view('template/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('template/footer');
    }

    function edit($id) {
        $data['judul'] = 'Form Edit Data Mahasiswa';
        $data['mahasiswa'] = $this->model->fetchByID($id);
        $data['jurusan'] = ['Teknik Kimia','Sistem Informasi'];
        $this->form_validation->set_rules('nim','Nim','required|numeric');
        $this->form_validation->set_rules('nama_mhs','Nama','required');
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        $this->form_validation->set_rules('jk','Jenis Kelamin','required');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->model->editMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    } 



    
}