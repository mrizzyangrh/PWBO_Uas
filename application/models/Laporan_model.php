<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    // LAPORAN KUNJUNGAN
    public function laporan_kunjungan($bulan, $tahun)
    {
        $this->db->select('
            anak.name AS nama_anak,
            ortu.name_ayah,
            ortu.name_ibu,
            kunjungan.*
        ');
        $this->db->from('kunjungan');
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak');
        $this->db->join('ortu', 'ortu.id_ortu = anak.id_ortu');
        $this->db->where('MONTH(kunjungan.tgl_kunjungan)', $bulan);
        $this->db->where('YEAR(kunjungan.tgl_kunjungan)', $tahun);

        return $this->db->get()->result();
    }

    // LAPORAN PENGUKURAN
    public function laporan_pengukuran($bulan, $tahun)
    {
        $this->db->select('
            anak.name AS nama_anak,
            ortu.name_ayah,
            ortu.name_ibu,
            pengukuran.*
        ');
        $this->db->from('pengukuran');
        $this->db->join('kunjungan', 'kunjungan.id_kunjungan = pengukuran.id_kunjungan');
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak');
        $this->db->join('ortu', 'ortu.id_ortu = anak.id_ortu');
        $this->db->where('MONTH(pengukuran.tgl_ukur)', $bulan);
        $this->db->where('YEAR(pengukuran.tgl_ukur)', $tahun);

        return $this->db->get()->result();
    }

     // REKAP KUNJUNGAN (agar dijadikan satu baris per bulan)
  public function get_rekap_kunjungan($bulan, $tahun)
{
    return $this->db->query("
        SELECT 
            MONTH(tgl_kunjungan) AS bulan,
            YEAR(tgl_kunjungan) AS tahun,
            COUNT(*) AS total
        FROM kunjungan
        WHERE MONTH(tgl_kunjungan) = ?
          AND YEAR(tgl_kunjungan) = ?
        GROUP BY YEAR(tgl_kunjungan), MONTH(tgl_kunjungan)
    ", [$bulan, $tahun])->result();
}


// REKAP PENGUKURAN BULANAN

public function get_rekap_pengukuran($bulan, $tahun)
{
    return $this->db->query("
        SELECT 
            MONTH(tgl_ukur) AS bulan,
            YEAR(tgl_ukur) AS tahun,
            COUNT(*) AS total
        FROM pengukuran
        WHERE MONTH(tgl_ukur) = ?
          AND YEAR(tgl_ukur) = ?
        GROUP BY YEAR(tgl_ukur), MONTH(tgl_ukur)
    ", [$bulan, $tahun])->result();
}

}