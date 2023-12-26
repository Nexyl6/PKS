<?php
defined('BASEPATH') or exit('No script acceses allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); //memanggil library form_validation.php
        $this->load->library('session'); // Pastikan Anda memuat library session
    }

    public function index()
    {
        if ($this->session->userdata('username')) { //jika sudah login
            redirect('admin/operator/dashboard'); //dialihkkan ke controller_admin/beranda.php
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim'); //membuat rules untuk form username 
        $this->form_validation->set_rules('password', 'Password', 'required|trim'); //membuat rules untuk form password

        if ($this->form_validation->run() == false) { //jika form validation gagal
            $data['title'] = 'login';
            $this->load->view('operator_templates/auth_header', $data);
            $this->load->view('login');
            $this->load->view('operator_templates/auth_footer');
        } else { //jika form validation berhasil
            $this->_login(); //memanggil method _login()
        }
    }

    private function _login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $username =  $this->input->post('username');
            $password =  md5($this->input->post('password'));

            $user = $this->db->get_where('operator', ['username' => $username])->row_array();

            if ($user) {
                // Check password
                if ($password == $user['password']) {
                    $data = [
                        'username' => $user['username'],
                        'id_operator' => $user['id_operator'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'is_active' => $user['is_active']
                    ];
                    $this->session->set_userdata($data);
                    if ($data['is_active'] == 1) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Datang  ' . $this->session->userdata('nama') . '</div>');
                        redirect('admin/operator/dashboard');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_operator');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Logout</div>');
        redirect(base_url('auth'));
    }
}
