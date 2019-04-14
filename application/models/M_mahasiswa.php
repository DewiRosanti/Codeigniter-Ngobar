<?php

class M_mahasiswa extends CI_Model {
    var $table = 'tbl_mahasiswa';

    function fetchAll() {
        $query = $this->db->get_where($this->table);
        return $query;
    }

    function tambahMahasiswa() {
        $data = array(
            'nim' => $this->input->post('nim', true),
            'nama_mhs' => $this->input->post('nama_mhs', true),
            'jurusan' => $this->input->post('jurusan', true),
            'jk' => $this->input->post('jk', true)
        );

        $query = $this->db->insert($this->table,$data);
        return $query;
    }

    function hapusMahasiswa($id) {
        $query = $this->db->delete($this->table, array('nim' => $id));
        return $query;
    }

    function fetchByID($id) {
        $query = $this->db->get_where($this->table, ['nim' => $id ]);
        return $query->row_array();
    }

    function editMahasiswa() {
        $data = array(
            'nama_mhs' => $this->input->post('nama_mhs', true),
            'jurusan' => $this->input->post('jurusan', true),
            'jk' => $this->input->post('jk', true)
        );
        $id = $this->input->post('nim');

        $query = $this->db->update($this->table,$data,['nim' => $id]);
        return $query;
    }

    function cariMahasiswa() {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_mhs', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('jk', $keyword);
        return $this->db->get($this->table);
    }
}