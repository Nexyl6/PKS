<?php
class M_berita extends CI_Model
{

    public function lihat_berita($id_berita = "")
    {
        if ($id_berita == "") {
            return $this->db->query("SELECT * FROM berita ORDER BY tanggal_berita DESC")->result();
        } else {
            return $this->db->query("SELECT * FROM berita WHERE id_berita='$id_berita'")->row();
        }
    }
    public function proses_tambah_berita($data)
    {
        $this->db->insert('berita', $data);
    }
    public function proses_edit_berita($data_edit, $id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->update('berita', $data_edit);
    }
    public function hapus_berita($id)
    {
        $this->db->query("DELETE FROM berita where id_berita='$id'");
    }

    public function record_count()
    {
        return $this->db->count_all("berita");
    }

    public function fetch_berita($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->order_by('tanggal_berita', 'DESC');
        $query = $this->db->get('berita');

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return array();
    }
}
