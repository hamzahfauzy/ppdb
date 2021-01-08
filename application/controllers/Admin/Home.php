<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->authenticated->check();
	}

	public function index()
	{
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/home/index');
		$this->load->view('layouts/bottom');
	}
}
