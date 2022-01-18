<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->library('Mailer');
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

	public function reset()
	{
		$new_password = strtotime('now')+rand(1000,9999);
		$this->User->update(['password'=>md5($new_password)],['id'=>1]);
		$this->mailer->send('Admin PPDB Baitun Naim','rizkyfebry09@gmail.com','Reset Password Admin','Password Baru Anda adalah '.$new_password);
		$this->mailer->send('Admin PPDB Baitun Naim','hamzahfauzy97@gmail.com','Reset Password Admin','Password Baru Anda adalah '.$new_password);
		$this->session->set_flashdata('reset_password', "Reset Password Berhasil! Password baru sudah dikirimkan ke email admin");
		redirect('auth/login');
		return;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
