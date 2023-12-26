<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_struktur', 'struktur');
    }
    public function data_struktur()
    {
        $data['data'] = $this->struktur->lihat_struktur();
        $data['title'] = 'Data Kepengurusan';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_struktur', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_edit_struktur($id_struktur)
    {
        $data['title'] = 'Edit Data Pengurus';
        $data['data'] = $this->struktur->lihat_struktur($id_struktur);
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_edit_struktur', $data);
        $this->load->view('operator_templates/footer');
    }

    function edit_struktur()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('edit_nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('edit_nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('edit_jabatan', 'Jabatan', 'required|trim');
        $id_struktur = $_POST['id_struktur'];

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>');
            redirect(base_url('admin/struktur/data_struktur'));
        } else {
            $nama_file = $_FILES['edit_foto']['name'];
            $tmp_file = $_FILES['edit_foto']['tmp_name'];
            $path = "./file/" . $nama_file;
            move_uploaded_file($tmp_file, $path);

            $edit_data = array(
                'nama' => $_POST['edit_nama'],
                'nik' => $_POST['edit_nik'],
                'jabatan' => $_POST['edit_jabatan'],
                'foto' => $nama_file,
            );

            $this->struktur->proses_edit_struktur($edit_data, $id_struktur);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Kepengurusan Berhasil Diedit</div>');
            redirect(base_url('admin/struktur/data_struktur'));
        }
    }
    public function lihat_struktur()
    {
        $data['data'] = $this->struktur->lihat_struktur();
        // var_dump($data);
        $this->load->view('front/strukturorganisasi', $data);
    }
}
