<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_controllers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['anak_model', 'ortu_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['list_anak'] = $this->anak_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('anak/index', $data);
        $this->load->view('template/footer');
    }

    // ================= TAMBAH =================
    public function tambah_anak()
    {
        $this->form_validation->set_rules('name', 'Nama Anak', 'required');
        $this->form_validation->set_rules('id_ortu', 'Name_ayah', 'required|integer');

        if ($this->form_validation->run() == FALSE) {
            $data['title']     = 'Tambah Data Anak';
            $data['list_ortu'] = $this->ortu_model->get_all();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('anak/tambah_anak', $data);
            $this->load->view('template/footer');
        } else {
            $this->_simpan_anak();
        }
    }

    private function _simpan_anak()
    {
        $data = [
            'id_ortu'   => $this->input->post('id_ortu'),
            'name'      => $this->input->post('name'),
            'nik'       => $this->input->post('nik'),
            'jk'        => $this->input->post('jk'),
            'bb_lahir'  => $this->input->post('bb_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tb_lahir'  => $this->input->post('tb_lahir'),
            'goldar'    => $this->input->post('goldar'),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $this->anak_model->tambah($data);
        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data berhasil ditambahkan</div>');
        redirect('anak');
    }

    // ================= UBAH =================
    public function ubah_anak($id)
    {
        $data['anak'] = $this->anak_model->get_by_id($id);
        if (!$data['anak']) redirect('anak');

        $this->form_validation->set_rules('name', 'Nama Anak', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title']     = 'Ubah Data Anak';
            $data['list_ortu'] = $this->ortu_model->get_all();
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('anak/ubah_anak', $data);
            $this->load->view('template/footer');
        } else {
            $this->_ubah_anak($id);
        }
    }

    private function _ubah_anak($id)
    {
        $data = [
            'id_ortu'   => $this->input->post('id_ortu'),
            'name'      => $this->input->post('name'),
            'nik'       => $this->input->post('nik'),
            'jk'        => $this->input->post('jk'),
            'bb_lahir'  => $this->input->post('bb_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tb_lahir'  => $this->input->post('tb_lahir'),
            'goldar'    => $this->input->post('goldar')
        ];

        $this->anak_model->ubah($data, $id);
        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data berhasil diubah</div>');
        redirect('anak');
    }

    // ================= HAPUS =================
    public function hapus_anak($id)
    {
        $this->anak_model->hapus($id);
        $this->session->set_flashdata('message',
            '<div class="alert alert-success">Data berhasil dihapus</div>');
        redirect('anak');
    }
}
