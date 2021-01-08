<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		$this->authenticated->auth_check();
		$request = $this->input->post();
		if(isset($request['action']) && $request['action']=='login')
		{
			// do login here
			unset($request['action']);
			$request['user_id'] = 1;
			$request['level'] = 'Admin';
			$this->session->set_userdata($request);
			redirect('admin');
			return;
		}
		$this->load->view('auth/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
