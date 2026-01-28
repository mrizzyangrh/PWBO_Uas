<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ortu_controllers extends CI_Controller {  // ← nama class harus sesuai nama file!

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ortu_model');        // huruf kecil + underscore!
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_ortu'] = $this->ortu_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ortu/index', $data);
        $this->load->view('template/footer');
    }

    // ------------------- TAMBAH DATA -------------------
    public function tambah_ortu()
    {
        $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('ayah', 'Nama Ayah', 'required');
        // tambahkan rule lain kalau perlu

        if ($this->form_validation->run() == FALSE) {
            // pertama kali buka form atau validasi gagal
            $data['title'] = 'Tambah Data Orang Tua';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('ortu/tambah_ortu');
            $this->load->view('template/footer');
        } else {
            $this->_simpan_ortu();   // pake underscore 2x, bukan __simpan_ortu
        }
    }

    private function _simpan_ortu()   // ← diperbaiki: 1 underscore depan + 1 di nama
    {
        $data = [
            'name_ibu'   => $this->input->post('ibu'),    // diperbaiki: ibu → ibu, ayah → ayah
            'name_ayah'  => $this->input->post('ayah'),
            'hubungan'   => $this->input->post('hubungan'),
            'telp'       => $this->input->post('telp'),
            'alamat'     => $this->input->post('alamat'),
            'create_at'  => date('Y-m-d H:i:s')
        ];

        $simpan = $this->ortu_model->tambah($data);

        if ($simpan) {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-success" role="alert">Berhasil ditambahkan</div>');
        } else {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-danger" role="alert">Gagal ditambahkan</div>');
        }
        redirect('ortu');
    }

    // ------------------- HAPUS DATA -------------------
    public function hapus_ortu($id)
    {
        $ortu = $this->ortu_model->get_by_id($id);

        if ($ortu) {
            $hapus = $this->ortu_model->hapus($id);

            if ($hapus) {
                $this->session->set_flashdata('message', 
                    '<div class="alert alert-success" role="alert">Berhasil dihapus</div>');
            } else {
                $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger" role="alert">Gagal dihapus</div>');
            }
        } else {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-warning" role="alert">Data tidak ditemukan</div>');
        }
        redirect('ortu');
    }

    // ------------------- UBAH DATA -------------------
    public function ubah_ortu($id)
    {
        $ortu = $this->ortu_model->get_by_id($id);

        if ($ortu) {
            $this->form_validation->set_rules('ibu', 'Nama Ibu', 'required');
            // tambah rule lain kalau perlu

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = 'Ubah Data Orang Tua';
                $data['ortu']  = $ortu;

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('ortu/ubah_ortu', $data);
                $this->load->view('template/footer');
            } else {
                $this->_ubah_ortu($id);
            }
        } else {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-warning" role="alert">Data Ortu Tidak Ditemukan</div>');
            redirect('ortu');
        }
    }

    private function _ubah_ortu($id)
    {
        $data = [
            'name_ibu'   => $this->input->post('ibu'),
            'name_ayah'  => $this->input->post('ayah'),
            'hubungan'   => $this->input->post('hubungan'),
            'telp'       => $this->input->post('telp'),
            'alamat'     => $this->input->post('alamat'),
            'create_at'  => date('Y-m-d H:i:s')
        ];

        $ubah = $this->ortu_model->ubah($data, $id);

        if ($ubah) {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-success" role="alert">Berhasil diubah</div>');
        } else {
            $this->session->set_flashdata('message', 
                '<div class="alert alert-danger" role="alert">Gagal diubah</div>');
        }
        redirect('ortu');
    }
}