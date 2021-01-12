<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->authenticated->check();
		$this->authenticated->admin_rule();
	}

	public function index()
	{
		$users = $this->User->get();
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/pengguna/index',[
			'users' => $users
		]);
		$this->load->view('layouts/bottom');
	}

	public function create()
	{
		$request = $this->input->post();
		if(isset($request['action']) && $request['action']=='create')
		{
			unset($request['action']);
			$request['password'] = md5($request['password']);
			if($this->User->insert($request))
			{
				$this->session->set_flashdata('create_user_success', "Berhasil membuat pengguna.");
				redirect('admin/pengguna');
				return;
			}
		}
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/pengguna/create');
		$this->load->view('layouts/bottom');
	}

	public function edit($id)
	{
		$request = $this->input->post();
		if(isset($request['action']) && $request['action']=='create')
		{
			unset($request['action']);
			if(empty($request['password']))
				unset($request['password']);
			else
				$request['password'] = md5($request['password']);
			if($this->User->update($request,['id'=>$id]))
			{
				$this->session->set_flashdata('create_user_success', "Berhasil update pengguna.");
				redirect('admin/pengguna');
				return;
			}
		}
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/pengguna/edit',[
			'user' => $this->User->first(['id'=>$id])
		]);
		$this->load->view('layouts/bottom');
	}

	public function delete($id)
	{
		$this->User->delete(['id'=>$id]);
		$this->session->set_flashdata('create_user_success', "Berhasil menghapus pengguna.");
		redirect('admin/pengguna');
	}
}
