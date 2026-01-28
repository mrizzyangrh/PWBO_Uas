<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_controllers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Kunjungan_model', 'Anak_model']);
        $this->load->library('form_validation');
    }

    // ================= INDEX =================
    public function index()
    {
        $data['title'] = 'Data Kunjungan';

        // data ini SUDAH berisi:
        // nama_anak, name_ayah, name_ibu
        $data['list_kunjungan'] = $this->Kunjungan_model->get_all();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('kunjungan/index', $data);
        $this->load->view('template/footer');
    }

    // ================= TAMBAH =================
    public function tambah_kunjungan()
    {
        $this->form_validation->set_rules('id_anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

        if ($this->form_validation->run() == FALSE) {

            $data['title'] = 'Tambah Data Kunjungan';
            $data['list_anak'] = $this->Anak_model->get_all();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kunjungan/tambah_kunjungan', $data);
            $this->load->view('template/footer');

        } else {
            $this->_simpan();
        }
    }

    private function _simpan()
    {
        $data = [
            'id_anak'       => $this->input->post('id_anak'),
            'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),
            'fasilitas'     => $this->input->post('fasilitas')
        ];

        $this->Kunjungan_model->tambah($data);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success">Data kunjungan berhasil ditambahkan</div>'
        );

        redirect('kunjungan');
    }

    // ================= UBAH =================
    public function ubah_kunjungan($id)
    {
        $data['title'] = 'Ubah Data Kunjungan';
        $data['kunjungan'] = $this->Kunjungan_model->get_by_id($id);
        $data['list_anak'] = $this->Anak_model->get_all();

        if (!$data['kunjungan']) redirect('kunjungan');

        $this->form_validation->set_rules('id_anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('tgl_kunjungan', 'Tanggal Kunjungan', 'required');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('kunjungan/ubah_kunjungan', $data);
            $this->load->view('template/footer');

        } else {
            $this->_ubah_kunjungan($id);
        }
    }

    private function _ubah_kunjungan($id)
    {
        $data = [
            'id_anak'       => $this->input->post('id_anak'),
            'tgl_kunjungan' => $this->input->post('tgl_kunjungan'),
            'fasilitas'     => $this->input->post('fasilitas')
        ];

        $this->Kunjungan_model->ubah($data, $id);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success">Data kunjungan berhasil diubah</div>'
        );

        redirect('kunjungan');
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        // PERBAIKAN TYPO
        $this->Kunjungan_model->hapus($id);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success">Data kunjungan berhasil dihapus</div>'
        );

        redirect('kunjungan');
    }
}
