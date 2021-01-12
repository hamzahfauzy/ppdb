<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->authenticated->check();
		$this->load->model('Student');
	}

	public function index()
	{
		$pendaftar = count($this->Student->get());
		$terverifikasi = count($this->Student->get(['status'=>'Terverifikasi']));
		$ditolak = count($this->Student->get(['status'=>'Ditolak']));
		$daftar_ulang = count($this->Student->get(['status'=>'Daftar Ulang']));
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/home/index',[
			'terverifikasi' => $terverifikasi,
			'ditolak' => $ditolak,
			'daftar_ulang' => $daftar_ulang,
			'pendaftar' => $pendaftar,
		]);
		$this->load->view('layouts/bottom');
	}
}
