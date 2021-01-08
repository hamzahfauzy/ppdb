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
		if($this->CI->session->userdata('user_id'))
			redirect('admin');
	}

	public function check()
	{
		if(!$this->CI->session->userdata('user_id'))
			redirect('auth/login');
	}
}