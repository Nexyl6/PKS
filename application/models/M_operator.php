<?php
class M_operator extends CI_Model
{

    public function lihat_operator($id_operator = "")
    {
        if ($id_operator == "") {
            return $this->db->query("SELECT nama,username,password,email FROM operator")->result();
        } else {
            return $this->db->query("SELECT nama,username,password,email FROM operator WHERE id_operator='$id_operator")->row();
        }
    }

    public function proses_tambah_data($data)
    {

        $this->db->insert('operator', $data);
    }
    public function proses_edit_data($edit_data)
    {
        $this->db->where('id_operator', $this->session->userdata('id_operator'));
        $this->db->update('operator', $edit_data);
    }
}
