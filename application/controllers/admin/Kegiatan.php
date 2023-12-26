<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kegiatan', 'kegiatan');
    }
    public function data_kegiatan()
    {
        $data['data'] = $this->kegiatan->lihat_kegiatan();
        $data['title'] = 'Kegiatan PKS';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_kegiatan', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_tambah_kegiatan()
    {
        $data['title'] = 'Tambah Kegiatan PKS';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_tambah_kegiatan', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_edit_kegiatan($id)
    {
        $data['title'] = 'Edit Kegiatan PKS';
        $data['data'] = $this->kegiatan->lihat_kegiatan($id);
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_edit_kegiatan', $data);
        $this->load->view('operator_templates/footer');
    }
    public function detail_kegiatan($id)
    {
        $data['title'] = 'Detail Kegiatan PKS';
        $data['data'] = $this->kegiatan->lihat_kegiatan($id);
        $data['gambar'] = $this->kegiatan->lihat_galery($id);
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_detail_kegiatan', $data);
        $this->load->view('operator_templates/footer');
    }

    //CRUD
    public function tambah_kegiatan()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul_k', 'judul_kegiatan', 'required|trim');
        $this->form_validation->set_rules('tanggal_k', 'tanggal_kegiatan', 'required|trim');
        $this->form_validation->set_rules('gambar_k', 'gambar', 'required|trim');

        $data = array(
            'id_kegiatan' => '',
            'judul_kegiatan' => $_POST['judul_k'],
            'tanggal_kegiatan' => $_POST['tanggal_k'],
            'id_operator' => $_POST['id_operator'],

        );
        $this->kegiatan->proses_tambah_kegiatan($data);
        $id_kegiatan = $this->db->insert_id();


        $hit = count($_FILES['gambar_k']['name']);
        for ($i = 0; $i < $hit; $i++) {
            $nama_file = $_FILES['gambar_k']['name'][$i];
            $tmp_file = $_FILES['gambar_k']['tmp_name'][$i];
            $path = "./file/" . $nama_file;
            move_uploaded_file($tmp_file, $path);

            $foto = array(
                'gambar' => $nama_file,
                'id_kegiatan' => $id_kegiatan

            );
            $this->kegiatan->proses_tambah_foto_kegiatan($foto);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Kegiatan Berhasil Ditambahkan</div>');
        redirect(base_url('admin/kegiatan/data_kegiatan'));
    }

    function edit_kegiatan()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('edit_judul', 'judul_kegiatan', 'required|trim');
        $this->form_validation->set_rules('edit_tanggal', 'tanggal_kegiatan', 'required|trim');
        // $this->form_validation->set_rules('edit_gambar', 'gambar', 'required|trim');
        $id_kegiatan = $_POST['id_kegiatan'];
        $edit_data = array(
            'judul_kegiatan' => $_POST['edit_judul'],
            'tanggal_kegiatan' => $_POST['edit_tanggal'],
        );
        $this->kegiatan->proses_edit_kegiatan($edit_data, $id_kegiatan);


        // $hit = count($_FILES['edit_gambar']['name']);
        // for ($i = 0; $i < $hit; $i++) {
        //     $nama_file = $_FILES['edit_gambar']['name'][$i];
        //     $tmp_file = $_FILES['edit_gambar']['tmp_name'][$i];
        //     $path = "./file/" . $nama_file;
        //     move_uploaded_file($tmp_file, $path);

        //     $edit_foto = array(
        //         'gambar' => $nama_file,
        //     );
        //     $this->kegiatan->proses_edit_foto_kegiatan($edit_foto, $id_kegiatan);
        // }
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Kegiatan Berhasil Diedit</div>');
        redirect(base_url('admin/kegiatan/data_kegiatan'));
    }
    public function hapus_kegiatan($id)
    {
        $this->kegiatan->hapus_galery($id);
        $this->kegiatan->hapus_kegiatan($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Kegiatan Berhasil Dihapus</div>');
        redirect(base_url('admin/kegiatan/data_kegiatan'));
    }
}
