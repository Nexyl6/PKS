<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita', 'berita');
        if ($this->uri->segment(3) == 'hapus' && $this->uri->segment(4) == '') {
            show_404();
        }
    }

    public function data_berita()
    {
        $data['title'] = 'Berita PKS';
        $data['data'] = $this->berita->lihat_berita();
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_berita', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_tambah_berita()
    {
        $data['title'] = 'Tambah Berita PKS';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_tambah_berita', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_edit_berita($id_berita)
    {
        $data['title'] = 'Edit Berita PKS';
        $data['data'] = $this->berita->lihat_berita($id_berita);
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_edit_berita', $data);
        $this->load->view('operator_templates/footer');
    }
    public function detail_berita($id)
    {
        $data['title'] = 'Detail Berita PKS';
        $data['data'] = $this->berita->lihat_berita($id);
        // var_dump($data['data']);
        // exit;
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_detail_berita', $data);
        $this->load->view('operator_templates/footer');
    }
    public function tambah_berita()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('judul_berita', 'Judul_berita', 'required|trim');
        $this->form_validation->set_rules('artikel', 'Artikel', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        // $this->form_validation->set_rules('foto', 'Foto', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>');
            redirect(base_url('admin/berita/tambah_berita'));
        } else {
            $nama_file = $_FILES['foto']['name'];
            $tmp_file = $_FILES['foto']['tmp_name'];
            $path = "./file/" . $nama_file;
            move_uploaded_file($tmp_file, $path);

            $data = array(
                'id_berita' => '',
                'judul_berita' => $_POST['judul_berita'],
                'artikel' => $_POST['artikel'],
                'tanggal_berita' => $_POST['tanggal'],
                'foto' => $nama_file,
                'id_operator' => $_POST['id_operator'],
            );

            $this->berita->proses_tambah_berita($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil Ditambahkan</div>');
            redirect(base_url('admin/berita/data_berita'));
        }
    }
    function edit_berita()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('edit_judul_berita', 'Judul_berita', 'required|trim');
        $this->form_validation->set_rules('edit_artikel', 'Artikel', 'required|trim');
        $this->form_validation->set_rules('edit_tanggal', 'Tanggal', 'required|trim');
        // $this->form_validation->set_rules('edit_foto', 'Foto', 'required|trim');

        $id_berita = $_POST['id_berita'];

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">' . validation_errors() . '</div>');
            redirect(base_url('admin/berita/edit_berita'));
        } else {
            $nama_file = $_FILES['edit_foto']['name'];
            $tmp_file = $_FILES['edit_foto']['tmp_name'];
            $path = "./file/" . $nama_file;
            move_uploaded_file($tmp_file, $path);

            $data_edit = array(
                'judul_berita' => $_POST['edit_judul_berita'],
                'artikel' => $_POST['edit_artikel'],
                'tanggal_berita' => $_POST['edit_tanggal'],
                'foto' => $nama_file,
            );

            $this->berita->proses_edit_berita($data_edit, $id_berita);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita Berhasil Diedit</div>');
            redirect(base_url('admin/berita/data_berita'));
        }
    }
    public function hapus_berita($id)
    {

        $this->berita->hapus_berita($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berita Berhasil Dihapus</div>');
        redirect(base_url('admin/berita/data_berita'));
    }
}
