<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan_model extends CI_Model {

    private $table = 'kunjungan';

    // ================= GET ALL =================
    public function get_all()
    {
        $this->db->select('
            kunjungan.*,
            anak.id_anak,
            anak.name AS nama_anak,
            ortu.name_ibu,
            ortu.name_ayah
        ');
        $this->db->from($this->table);
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak', 'left');
        $this->db->join('ortu', 'ortu.id_ortu = anak.id_ortu', 'left');

        return $this->db->get()->result();
    }

    // ================= GET BY ID =================
    public function get_by_id($id)
    {
        $this->db->select('
            kunjungan.*,
            anak.id_anak,
            anak.name AS nama_anak,
            ortu.id_ortu,
            ortu.name_ibu,
            ortu.name_ayah
        ');
        $this->db->from($this->table);
        $this->db->join('anak', 'anak.id_anak = kunjungan.id_anak', 'left');
        $this->db->join('ortu', 'ortu.id_ortu = anak.id_ortu', 'left');
        $this->db->where('kunjungan.id_kunjungan', $id);

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
            ->where('id_kunjungan', $id)
            ->update($this->table, $data);
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        return $this->db
            ->delete($this->table, ['id_kunjungan' => $id]);
    }
}
