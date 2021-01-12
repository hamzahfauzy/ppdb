<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->authenticated->check();
		$this->load->model('Student');
		$this->load->library('phpqrcode/qrlib');
	}

	public function index($status = "Daftar")
	{
		if($status == "verified")
		{
			if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status !='=>'Daftar','status !='=>'Ditolak']);
		}
		elseif($status == "actioned")
		{
			if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status !='=>'Daftar']);
		}
		elseif($status == "reregistered")
		{
			if(!in_array($this->session->userdata('level'),['admin','panitia'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status'=>'Daftar Ulang']);
		}
		else
		{
			if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status'=>$status]);
		}
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/siswa/index',[
			'students' => $students
		]);
		$this->load->view('layouts/bottom');
	}

	public function verifikasi($id)
	{
		if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
			redirect('admin');
			return;
		}
		$this->Student->update([
			'status'=>'Terverifikasi',
			'verification_by' => $this->session->userdata('id')
		],['id'=>$id]);
		$this->session->set_flashdata('success', "Berhasil verifikasi calon siswa.");
		redirect('admin/siswa');
		return;
	}

	public function tolak($id)
	{
		if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
			redirect('admin');
			return;
		}
		$this->Student->update([
			'status'=>'Ditolak',
			'verification_by' => $this->session->userdata('id')
		],['id'=>$id]);
		$this->session->set_flashdata('success', "Berhasil tolak calon siswa.");
		redirect('admin/siswa');
		return;
	}

	public function reregister($id)
	{
		if(!in_array($this->session->userdata('level'),['admin','panitia'])){
			redirect('admin');
			return;
		}
		$this->Student->update([
			'status'=>'Daftar Ulang',
			're_registered_by' => $this->session->userdata('id')
		],['id'=>$id]);
		$this->session->set_flashdata('success', "Berhasil daftar ulang calon siswa.");
		redirect('admin/siswa');
		return;
	}

	public function detail($id)
	{
		$siswa = $this->Student->find(['id'=>$id]);
		$saudara = $this->Student->siblings(['student_id'=>$id]);
		$orangtua = $this->Student->parents(['student_id'=>$id]);
		$prestasi_akademis = $this->Student->achievements(['student_id'=>$id,'type'=>'Akademis']);
		$prestasi_non_akademis = $this->Student->achievements(['student_id'=>$id,'type'=>'Non-Akademis']);
		$kesehatan = $this->Student->health(['student_id'=>$id]);
		$labels = [
			'data_pribadi' => [
				'name' => 'Nama Lengkap',
				'nickname' => 'Nama Panggilan',
				'gender' => 'Jenis Kelamin',
				'birthplace' => 'Tanggal Lahir',
				'birthdate' => 'Tempat Lahir',
				'religion' => 'Agama',
				'address' => 'Alamat',
				'language' => 'Bahasa Sehari-hari',
				'phone' => 'No HP',
				'email' => 'Email',
				'life_with' => 'Tinggal Dengan',
				'birth_order' => 'Anak Ke',
				'num_of_siblings' => 'Jumlah Saudara Kandung',
			],
			'kesehatan' => [
				'weight' => 'Berat Badan',
				'hight' => 'Tinggi Badan',
				'blood_type' => 'Golongan Darah',
				'imudity' => 'Imunisasi',
				'tht_problem_description' => 'Masalah THT',
				'alergi_description' => 'Alergi',
				'opname_description' => 'Perawatan Rumah Sakit',
				'went_to_doctor_description' => 'Pergi ke Dokter',
			]
		];

		$verifikator = $this->Student->user(['id'=>$siswa->verification_by]);
		$reregistered = $this->Student->user(['id'=>$siswa->re_registered_by]);

		$path = 'public/qrcode/'.$siswa->register_number.'.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$this->load->view('layouts/top');
		$this->load->view('layouts/left');
		$this->load->view('admin/siswa/detail',[
			'qrcode' => $base64,
			'siswa' => $siswa,
			'saudara' => $saudara,
			'orangtua' => $orangtua,
			'prestasi_akademis' => $prestasi_akademis,
			'prestasi_non_akademis' => $prestasi_non_akademis,
			'kesehatan' => $kesehatan,
			'verifikator' => $verifikator,
			'reregistered' => $reregistered,
			'labels' => $labels,
		]);
		$this->load->view('layouts/bottom');
	}
}
