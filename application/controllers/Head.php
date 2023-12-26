<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Head extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita', 'berita');
		$this->load->model('M_kegiatan', 'kegiatan');
    }
        public function index()
	    {
			$data['data'] = $this->berita->lihat_berita();
			$data['kegiatan'] = $this->kegiatan->lihat_detail_kegiatan();
			$data['kegiatan2'] = $this->kegiatan->lihat_detail_kegiatan2();
			// var_dump($data['kegiatan2']);
		    $this->load->view('front/head',$data);
	    }
}