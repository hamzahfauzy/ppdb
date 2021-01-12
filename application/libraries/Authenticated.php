<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticated
{
	private $CI;
	public function __construct()
	{
		$this->CI = &get_instance();
	}

	public function auth_check()
	{
		if($this->CI->session->userdata('id'))
			redirect('admin');
	}

	public function check()
	{
		if(!$this->CI->session->userdata('id'))
			redirect('auth/login');
	}

	public function admin_rule()
	{
		if(!in_array($this->CI->session->userdata('level'),['admin'])){
			redirect('admin');
			return;
		}
	}
}