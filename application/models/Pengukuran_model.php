<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengukuran_model extends CI_Model {

    private $table = 'pengukuran';

    // ================= GET ALL =================
    public function get_all()
    {
        $this->db->select('
            pengukuran.*,
            kunjungan.id_kunjungan,
            kunjungan.tgl_kunjungan,
            anak.id_anak,
            anak.name AS nama_anak
        ');
        $this->db->from($this->table);
        $this->db->join('kunjungan', 'kunjungan.id_kunjungan = pengukuran.id_kunjungan', 'left');
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak', 'left');

        return $this->db->get()->result();
    }

    // ================= GET BY ID =================
    public function get_by_id($id)
    {
        $this->db->select('
            pengukuran.*,
            kunjungan.id_kunjungan,
            kunjungan.tgl_kunjungan,
            anak.id_anak,
            anak.name AS nama_anak
        ');
        $this->db->from($this->table);
        $this->db->join('kunjungan', 'kunjungan.id_kunjungan = pengukuran.id_kunjungan', 'left');
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak', 'left');
        $this->db->where('pengukuran.id_ukur', $id);

        return $this->db->get()->row();
    }

    // ================= TAMBAH =================
    public function tambah($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // ================= UBAH =================
    public function ubah($data, $id)
    {
        return $this->db
            ->where('id_ukur', $id)
            ->update($this->table, $data);
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        return $this->db
            ->delete($this->table, ['id_ukur' => $id]);
    }
}