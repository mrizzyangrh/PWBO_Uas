<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
    }

    // =========================
    // LAPORAN KUNJUNGAN
    // =========================
public function kunjungan()
{
    $bulan = $this->input->get('bulan');
    $tahun = $this->input->get('tahun');

    $data['bulan'] = $bulan;
    $data['tahun'] = $tahun;

    if ($bulan && $tahun) {
        $data['periode'] = $this->Laporan_model->get_rekap_kunjungan($bulan, $tahun);
    } else {
        $data['periode'] = [];
    }

    $this->load->view('template/header');
    $this->load->view('template/sidebar');
    $this->load->view('laporan/kunjungan', $data);
    $this->load->view('template/footer');
}


    // =========================
    // LAPORAN PENGUKURAN
    // =========================
   public function pengukuran()
{
    $bulan = $this->input->get('bulan');
    $tahun = $this->input->get('tahun');

    $data['bulan'] = $bulan;
    $data['tahun'] = $tahun;

    if ($bulan && $tahun) {
        $data['periode'] = $this->Laporan_model
            ->get_rekap_pengukuran($bulan, $tahun);
    } else {
        $data['periode'] = [];
    }

    $data['title'] = 'Laporan Pengukuran';

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar');
    $this->load->view('laporan/pengukuran', $data);
    $this->load->view('template/footer');
}



// =========================
// CETAK KUNJUNGAN
// =========================
public function cetak_kunjungan($bulan, $tahun)
{

    $data['bulan']   = $bulan;
    $data['tahun']   = $tahun;
    $data['laporan'] = $this->Laporan_model->laporan_kunjungan($bulan, $tahun);

    $this->load->view('laporan/cetak_kunjungan', $data);
}

// =========================
// CETAK PENGUKURAN
// =========================
public function cetak_pengukuran($bulan, $tahun)
{
    
    $data['bulan']   = $bulan;
    $data['tahun']   = $tahun;
    $data['laporan'] = $this->Laporan_model
        ->laporan_pengukuran($bulan, $tahun);

    $this->load->view('laporan/cetak_pengukuran', $data);
}

}