<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Operator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_operator', 'operator');
    }
    public function dashboard()
    {
        //parent::__construct();
        $this->load->library('form_validation'); //memanggil library form_validation.php
        $this->load->library('session');
        $data['title'] = 'Profil Saya';
        //$data['operator'] = $this->db->get_where('operator', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/dashboard', $data);
        $this->load->view('operator_templates/footer');
    }

    public function form_edit_profil()
    {
        $data['title'] = 'Edit Profil';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar', $data);
        $this->load->view('operator/v_edit_profil', $data);
        $this->load->view('operator_templates/footer');
    }

    public function operator()
    {
        $data['data'] = $this->operator->lihat_operator();
        $data['title'] = 'Data Operator';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/data_operator', $data);
        $this->load->view('operator_templates/footer');
    }

    //UNTUK KELOLA OPERATOR (CRUD)

    public function form_tambah_data()
    {
        $data['operator'] = $this->db->get_where('operator', ['username' => $this->session->set_userdata('username')])->row_array();
        $data['title'] = 'Tambah Data Operator';
        $this->load->view('operator_templates/header', $data);
        $this->load->view('operator_templates/navbar');
        $this->load->view('operator_templates/sidebar');
        $this->load->view('operator/v_tambah_operator', $data);
        $this->load->view('operator_templates/footer');
    }
    public function tambah_data()
    {
        $this->load->library('form_validation');

        $data = array(
            'id_operator' => '',
            'nama' => $_POST['nama'],
            'username' => $_POST['username'],
            'password' => md5($_POST['password']),
            'email' => $_POST['email'],
            'is_active' => '1'
        );

        $cek_username = $this->db->get_where('operator', array('username' => $data['username']))->row();

        if (!$cek_username) {
            $this->operator->proses_tambah_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
            redirect(base_url('admin/operator/operator'));
            return;
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username already exists. Please choose another username.</div>');
            redirect(base_url('admin/operator/tambah_data'));
            return;
        }
    }

    public function edit_profil()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('edit_nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('edit_username', 'username', 'required|trim');
        $this->form_validation->set_rules('new_password', 'password', 'required|trim');

        $edit_data = array(
            'nama' => $_POST['edit_nama'],
            'username' => $_POST['edit_username'],
            'password' => md5($_POST['new_password']),
        );
        $this->operator->proses_edit_data($edit_data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Profile Successfully Updated</div>');
        redirect(base_url('admin/operator/dashboard'));
    }
}
