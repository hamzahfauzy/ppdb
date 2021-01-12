<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Student');
		$this->load->model('StudentAchievement');
		$this->load->model('StudentFile');
		$this->load->model('StudentHealth');
		$this->load->model('StudentParent');
		$this->load->model('StudentSchool');
		$this->load->model('StudentSibling');

		$config['upload_path']          = './public/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1024;
		$this->load->library('upload', $config);
		$this->load->library('phpqrcode/qrlib');
		$this->load->library('Pdf');
		$this->load->library('Mailer');
	}

	function index($step = 1)
	{
		$request = $this->input->post();
		
		if($step == 2)
		{
			$data_jenjang = "";
			if(isset($request['data_jenjang']))
				$data_jenjang = $request['data_jenjang'];
			elseif(isset($_SESSION['daftar']['data_jenjang']))
				$data_jenjang = $_SESSION['daftar']['data_jenjang'];
			elseif(isset($_GET['jenjang']))
				$data_jenjang = $_GET['jenjang'];

			$_SESSION['daftar']['data_jenjang'] = $data_jenjang;
		}
		elseif($step > 2)
		{
			$new_data = array_merge($_SESSION['daftar'],$_POST);
			$_SESSION['daftar'] = $new_data;
		}
		if($step > 1 && (!isset($_SESSION['daftar']['data_jenjang']) || $_SESSION['daftar']['data_jenjang'] == ""))
		{
			redirect(base_url('daftar/index'));
			return;
		}
		if($step == 5)
		{
			// echo "<pre>";
			// print_r($_SESSION['daftar']['data_saudara']);
			// echo "</pre>";
		}
		if($step == 6)
		{
			$this->db->trans_start();

			$daftar = $_SESSION['daftar'];

			$nomor_urut = $this->Student->num_row()+1 < 10 ? '0'.($this->Student->num_row()+1) : $this->Student->num_row()+1;
			$nomor_pendaftaran = $daftar['data_jenjang'].'.'.$nomor_urut.'.'.date('dmY');
			$daftar['data_pribadi']['register_number'] = $nomor_pendaftaran;
			$daftar['data_pribadi']['status'] = 'Daftar';
			$daftar['data_pribadi']['registered_at'] = date('Y-m-d H:i:s');
			$student = $this->Student->insert($daftar['data_pribadi']);
			if(isset($daftar['asal_sekolah']))
			{
				$daftar['asal_sekolah']['student_id'] = $student->id;
				$this->StudentSchool->insert($daftar['asal_sekolah']);
			}

			foreach($daftar['data_orang_tua'] as $key => $value)
			{
				if($key == 'wali' && $value['name'] == "") continue;
				$value['student_id'] = $student->id;
				$value['parent_type'] = $key;
				$this->StudentParent->insert($value);
			}

			$saudara = [];
			foreach($daftar['data_saudara']['name'] as $key => $value)
			{
				$saudara[] = [
					'student_id' => $student->id,
					'name' => $daftar['data_saudara']['name'][$key],
					'study_stage' => $daftar['data_saudara']['study_stage'][$key],
					'school_name' => $daftar['data_saudara']['school_name'][$key],
					'majors' => $daftar['data_saudara']['majors'][$key],
				];
			}
			$this->db->insert_batch("student_siblings",$saudara);

			$prestasi_akademis = [];
			foreach($daftar['prestasi']['akademik']['name'] as $key => $value)
			{
				$prestasi_akademis[] = [
					'student_id' => $student->id,
					'name' => $daftar['prestasi']['akademik']['name'][$key],
					'position' => $daftar['prestasi']['akademik']['position'][$key],
					'level' => $daftar['prestasi']['akademik']['level'][$key],
					'organizer' => $daftar['prestasi']['akademik']['organizer'][$key],
					'type' => 'Akademis'
				];
			}

			$prestasi_non_akademis = [];
			foreach($daftar['prestasi']['non-akademik']['name'] as $key => $value)
			{
				$prestasi_non_akademis[] = [
					'student_id' => $student->id,
					'name' => $daftar['prestasi']['non-akademik']['name'][$key],
					'position' => $daftar['prestasi']['non-akademik']['position'][$key],
					'level' => $daftar['prestasi']['non-akademik']['level'][$key],
					'organizer' => $daftar['prestasi']['non-akademik']['organizer'][$key],
					'type' => 'Non-Akademis'
				];
			}

			$daftar['kesehatan']['student_id'] = $student->id;
			$this->StudentHealth->insert($daftar['kesehatan']);

			$this->db->insert_batch("student_achievements",$prestasi_akademis);
			$this->db->insert_batch("student_achievements",$prestasi_non_akademis);

			foreach($_FILES as $key => $value)
			{
				$this->upload->do_upload($key);
				$this->StudentFile->insert([
					'student_id' => $student->id,
					'file_url'   => 'public/uploads/'.$value['name'],
					'file_type'   => $key,
				]);
			}

			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE)
			{
				echo "Error";
			}
			else
			{
				$ringkasan = $this->ringkasan($student->id);
				$this->mailer->send($student->name,$student->email,"PPDB Baitun Naim - Pendaftaran Baru",$ringkasan);
				unset($_SESSION['daftar']);
				redirect(base_url('daftar/selesai/'.$student->id));
			}
		}
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
		$this->load->view('daftar/index',[
			'step' => $step,
			'labels' => $labels
		]);
	}

	function selesai($id)
	{
		$ringkasan = $this->ringkasan($id);
		$siswa = $this->Student->find(['id'=>$id]);
		// $this->mailer->send($siswa->name,$siswa->email,"PPDB Baitun Naim - Pendaftaran Baru",$ringkasan);
		$this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = $siswa->register_number.".pdf";
		$this->pdf->load_string($ringkasan);
	}

	function ringkasan($id)
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

		QRcode::png($siswa->register_number,'public/qrcode/'.$siswa->register_number.'.png');
		$path = 'public/qrcode/'.$siswa->register_number.'.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		return $this->load->view('daftar/selesai',[
			'qrcode' => $base64,
			'siswa' => $siswa,
			'saudara' => $saudara,
			'orangtua' => $orangtua,
			'prestasi_akademis' => $prestasi_akademis,
			'prestasi_non_akademis' => $prestasi_non_akademis,
			'kesehatan' => $kesehatan,
			'labels' => $labels,
		],TRUE);
	}

}
