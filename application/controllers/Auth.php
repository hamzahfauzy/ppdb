<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function login()
	{
		$this->authenticated->auth_check();
		$request = $this->input->post();
		if(isset($request['action']) && $request['action']=='login')
		{
			// do login here
			$user = $this->User->login($request['username'],md5($request['password']));
			if($user->num_rows())
			{
				$user = $user->result_array();
				$this->session->set_userdata($user[0]);
				redirect('admin');
			}
			else
			{
				$this->session->set_flashdata('login_error', "Login Gagal! Username atau Password Salah");
				redirect('auth/login');
			}
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
