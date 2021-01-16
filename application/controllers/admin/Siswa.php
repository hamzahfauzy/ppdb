<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller { 

	public $labels = [
		'data_pribadi' => [
			'NIK' => 'NIK',
			'name' => 'Nama Lengkap',
			'nickname' => 'Nama Panggilan',
			'gender' => 'Jenis Kelamin',
			'birthplace' => 'Tempat Lahir',
			'birthdate' => 'Tanggal Lahir',
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

	function __construct()
	{
		parent::__construct();
		$this->authenticated->check();
		$this->load->model('Student');
		$this->load->library('phpqrcode/qrlib');
		$this->load->library('Mailer');
	}

	public function index($status = "Daftar")
	{
		$judul = "Data Calon Siswa";
		if($status == "verified")
		{
			if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status != "Daftar" AND status !='=>'Tolak']);
			$judul = "Data Calon Siswa Lulus";
		}
		elseif($status == "actioned")
		{
			if(!in_array($this->session->userdata('level'),['admin','verifikator'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status !='=>'Daftar']);
			$judul = "Data Calon Siswa";
		}
		elseif($status == "reregistered")
		{
			if(!in_array($this->session->userdata('level'),['admin','panitia'])){
				redirect('admin');
				return;
			}
			$students = $this->Student->get(['status'=>'Daftar Ulang']);
			$judul = "Data Calon Siswa Daftar Ulang";
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
			'students' => $students,
			'judul' => $judul
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
		$student = $this->Student->find(['id'=>$id]);
		$ringkasan = $this->load->view('mail/aksi',['siswa'=>$student,'labels'=>$this->labels,'aksi'=>'Terverifikasi'],TRUE);
		$this->mailer->send($student->name,$student->email,"PPDB Baitun Naim - Pendaftaran Terverifikasi",$ringkasan);
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
		$student = $this->Student->find(['id'=>$id]);
		$ringkasan = $this->load->view('mail/aksi',['siswa'=>$student,'labels'=>$this->labels,'aksi'=>'Ditolak'],TRUE);
		$this->mailer->send($student->name,$student->email,"PPDB Baitun Naim - Pendaftaran Ditolak",$ringkasan);
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
		$student = $this->Student->find(['id'=>$id]);
		$ringkasan = $this->load->view('mail/aksi',['siswa'=>$student,'labels'=>$this->labels,'aksi'=>'Daftar Ulang'],TRUE);
		$this->mailer->send($student->name,$student->email,"PPDB Baitun Naim - Pendaftaran Ulang",$ringkasan);
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
				'NIK' => 'NIK',
				'name' => 'Nama Lengkap',
				'nickname' => 'Nama Panggilan',
				'gender' => 'Jenis Kelamin',
				'birthplace' => 'Tempat Lahir',
				'birthdate' => 'Tanggal Lahir',
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
		$files = $this->Student->files(['student_id'=>$siswa->id]);

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
			'files' => $files,
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

	function hapus($id)
	{
		$this->Student->delete(['id'=>$id]);
		$this->session->set_flashdata('success', "Berhasil menghapus data calon siswa.");
		redirect('admin/siswa');
		return;
	}
}
