<?php
class M_pks extends CI_Model {

    public function lihat_pks ($id_pks ="") {
        if($id_pks==""){
            return $this->db->query("SELECT * FROM pks")->result();
        }
        else{
            return $this->db->query("SELECT * FROM pks WHERE id_pks='$id_pks'")->row();
        }
    }
    public function proses_edit_pks($edit_data, $id_pks)
    {
        $this->db->where('id_pks', $id_pks);
        $this->db->update('pks', $edit_data);
    }
}
?>