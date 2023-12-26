<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_berita', 'berita');
		$this->load->library('pagination');
	}
	public function index($page = 0)
	{
		// $data['total_pages']=3;
		$config = array();
		$config["base_url"] = base_url() . "berita/index";
		$config["total_rows"] = $this->berita->record_count();
		// var_dump( $config["total_rows"]);exit;
		$config["per_page"] = 3; // Number of items per page

		// Bootstrap 4 pagination style
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$this->pagination->initialize($config);

		$data["berita"] = $this->berita->fetch_berita($config["per_page"], $page);
		// var_dump($data['berita']);exit;
		$data["total_pages"] = ceil($config["total_rows"] / $config["per_page"]);
		$data["current_page"] = $page;
		$data["next_page"] = $page + 1;
		$data["prev_page"] = $page - 1;

		// $data['berita'] = $this->berita->lihat_berita();
		$this->load->view('front/berita', $data);
	}
	public function detail($id)
	{
		$data['berita'] = $this->berita->lihat_berita($id);
		$this->load->view('back/detail', $data);
	}
}
