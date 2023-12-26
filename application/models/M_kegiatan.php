<?php
class M_kegiatan extends CI_Model
{
    public function lihat_kegiatan($id_kegiatan = "")
    {
        if ($id_kegiatan == "") {
            // Jika $id_kegiatan kosong, lakukan SELECT dari kedua tabel dengan INNER JOIN
            $query = $this->db->query("SELECT kegiatan.*, 
            (SELECT gambar FROM galery WHERE galery.id_kegiatan = kegiatan.id_kegiatan LIMIT 1) AS gambar 
            FROM kegiatan 
            ORDER BY tanggal_kegiatan DESC")->result();
         } else {
            // Jika $id_kegiatan tidak kosong, lakukan SELECT dari kedua tabel dengan INNER JOIN berdasarkan $id_kegiatan
            $query = $this->db->query(" SELECT kegiatan.*, galery.gambar FROM kegiatan INNER JOIN galery ON kegiatan.id_kegiatan = galery.id_kegiatan
                                        WHERE kegiatan.id_kegiatan = '$id_kegiatan'")->row();
        
        }
        return $query;
    }  
    public function lihat_detail_kegiatan()
    {
     
            // Jika $id_kegiatan kosong, lakukan SELECT dari kedua tabel dengan INNER JOIN
            $query = $this->db->query("SELECT * FROM galery order by id_galery desc limit 4")->result();
         
        return $query;
    }   
    public function lihat_detail_kegiatan2()
    {
     
            // Jika $id_kegiatan kosong, lakukan SELECT dari kedua tabel dengan INNER JOIN
            $hit = $this->db->query("SELECT * FROM galery")->num_rows();
            $query = $this->db->query("SELECT * FROM galery order by id_galery desc limit 4,$hit")->result();
            // var_dump($query);exit;
         
        return $query;
    } 
    public function lihat_galery($id_kegiatan = "")
    {
        if ($id_kegiatan == "") {
            // Jika $id_kegiatan kosong, lakukan SELECT dari kedua tabel dengan INNER JOIN
            $query = $this->db->query("SELECT kegiatan.*, (SELECT gambar FROM galery where galery.id_kegiatan=kegiatan.id_kegiatan limit 1) as gambar FROM kegiatan")->result();
            } else {
                return $this->db->query("SELECT * FROM galery WHERE id_kegiatan='$id_kegiatan'")->result();
        
        }
        return $query;
    }    

    public function proses_tambah_kegiatan($data)
    {
        $this->db->insert('kegiatan', $data);
    }

    public function proses_tambah_foto_kegiatan($foto)
    {
        $this->db->insert('galery', $foto);
    }

    public function proses_edit_kegiatan($edit_data, $id_kegiatan)
    {
        $this->db->where('id_kegiatan', $id_kegiatan);
        $this->db->update('kegiatan', $edit_data);
    }
    // public function proses_edit_foto_kegiatan($edit_foto, $id_kegiatan)
    // {
    //     $this->db->where('id_kegiatan', $id_kegiatan);
    //     $this->db->update('galery', $edit_foto);
    // }
    public function hapus_kegiatan($id)
    {
        $this->db->query("DELETE FROM kegiatan where id_kegiatan='$id'");
    }
    public function hapus_galery($id)
    {
        $this->db->query("DELETE FROM galery where id_kegiatan='$id'");
    }
}
