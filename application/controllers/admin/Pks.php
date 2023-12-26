<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pks extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pks', 'pks');
    }
    public function index()
    {
        $data['title'] = 'Tentang PKS';
        $data['data'] = $this->pks->lihat_pks();
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_pks', $data);
        $this->load->view('operator_templates/footer');
    }
    public function form_edit_pks($id_pks)
    {
        $data['title'] = 'Edit Tentang PKS';
        $data['data'] = $this->pks->lihat_pks($id_pks);
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_edit_pks', $data);
        $this->load->view('operator_templates/footer');
    }
    public function edit_pks()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('edit_visi', 'visi', 'required|trim');
        $this->form_validation->set_rules('edit_misi', 'misi', 'required|trim');
        $this->form_validation->set_rules('sejarah', 'sejarah', 'required|trim');
        $this->form_validation->set_rules('edit_alamat', 'alamat', 'required|trim');
        $id_pks = $_POST['id_pks']; 

        $edit_data = array(
            'visi' => $_POST['edit_visi'],
            'misi' => $_POST['edit_misi'],
            'sejarah' => $_POST['sejarah'],
            'alamat' => $_POST['edit_alamat'],
        );
        $this->pks->proses_edit_pks($edit_data, $id_pks);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
        redirect(base_url('admin/pks'));
    }
    public function lihat_sejarah()
    {
        $data['data'] = $this->pks->lihat_pks();
        // var_dump($data);
        $this->load->view('front/sejarah',$data);
    }
}