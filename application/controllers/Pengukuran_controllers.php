<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengukuran_controllers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Pengukuran_model', 'Kunjungan_model']);
        $this->load->library('form_validation');
    }

    // ================= INDEX =================
    public function index()
    {
        $data['list_pengukuran'] = $this->Pengukuran_model->get_all();
        $data['title'] = 'Data Pengukuran';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pengukuran/index', $data);
        $this->load->view('template/footer');
    }

    // ================= TAMBAH =================
    public function tambah_pengukuran()
    {
        $this->form_validation->set_rules('id_kunjungan', 'ID Kunjungan', 'required|integer');
        $this->form_validation->set_rules('tgl_ukur', 'Tanggal Ukur', 'required');
        $this->form_validation->set_rules('bb', 'Berat Badan', 'required|decimal');
        $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|decimal');
        $this->form_validation->set_rules('lk', 'Lingkar Kepala', 'required|decimal');
        $this->form_validation->set_rules('vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('status_gizi', 'Status Gizi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Pengukuran';
            $data['list_kunjungan'] = $this->Kunjungan_model->get_all();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengukuran/tambah_pengukuran', $data);
            $this->load->view('template/footer');
        } else {
            $this->_simpan();
        }
    }

    private function _simpan()
    {
        $data = [
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'tgl_ukur'     => $this->input->post('tgl_ukur'),
            'bb'           => $this->input->post('bb'),
            'tb'           => $this->input->post('tb'),
            'lk'           => $this->input->post('lk'),
            'vaksin'       => $this->input->post('vaksin'),
            'status_gizi'  => $this->input->post('status_gizi')
        ];

        $this->Pengukuran_model->tambah($data);

        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data pengukuran berhasil ditambahkan</div>'
        );

        redirect('pengukuran');
    }

    // ================= UBAH =================
    public function ubah_pengukuran($id)
    {
        $data['pengukuran'] = $this->Pengukuran_model->get_by_id($id);
        if (!$data['pengukuran']) redirect('pengukuran');

        $this->form_validation->set_rules('id_kunjungan', 'ID Kunjungan', 'required|integer');
        $this->form_validation->set_rules('tgl_ukur', 'Tanggal Ukur', 'required');
        $this->form_validation->set_rules('bb', 'Berat Badan', 'required|decimal');
        $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|decimal');
        $this->form_validation->set_rules('lk', 'Lingkar Kepala', 'required|decimal');
        $this->form_validation->set_rules('vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('status_gizi', 'Status Gizi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Ubah Data Pengukuran';
            $data['list_kunjungan'] = $this->Kunjungan_model->get_all();

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pengukuran/ubah_pengukuran', $data);
            $this->load->view('template/footer');
        } else {
            $this->_ubah_pengukuran($id);
        }
    }

    private function _ubah_pengukuran($id)
    {
        $data = [
            'id_kunjungan' => $this->input->post('id_kunjungan'),
            'tgl_ukur'     => $this->input->post('tgl_ukur'),
            'bb'           => $this->input->post('bb'),
            'tb'           => $this->input->post('tb'),
            'lk'           => $this->input->post('lk'),
            'vaksin'       => $this->input->post('vaksin'),
            'status_gizi'  => $this->input->post('status_gizi')
        ];

        $this->Pengukuran_model->ubah($data, $id);

        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data pengukuran berhasil diubah</div>'
        );

        redirect('pengukuran');
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        $this->Pengukuran_model->hapus($id);

        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data pengukuran berhasil dihapus</div>'
        );

        redirect('pengukuran');
    }
}