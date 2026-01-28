<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak_model extends CI_Model {

    private $table = 'anak';

    public function get_all()
    {
        $this->db->select('anak.*, ortu.id_ortu, ortu.name_ibu, ortu.name_ayah');
        $this->db->join('ortu', 'ortu.id_ortu = anak.id_ortu', 'left');
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id_anak' => $id])->row();
    }

    public function tambah($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function ubah($data, $id)
    {
        return $this->db->where('id_anak', $id)->update($this->table, $data);
    }

    public function hapus($id)
    {
        return $this->db->delete($this->table, ['id_anak' => $id]);
    }
}
