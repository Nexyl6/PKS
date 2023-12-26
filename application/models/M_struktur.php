<?php
class M_struktur extends CI_Model {

    public function lihat_struktur ($id_struktur ="") {
        if($id_struktur==""){
            return $this->db->query("SELECT * FROM struktur")->result();
        }
        else{
            return $this->db->query("SELECT * FROM struktur WHERE id_struktur='$id_struktur'")->row();
        }
    }

    public function proses_edit_struktur($edit_data, $id_struktur)
    {
        $this->db->where('id_struktur', $id_struktur);
        $this->db->update('struktur', $edit_data);
    }
}

?>