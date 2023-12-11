<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/Insert_model', 'ins');
		$this->load->model('petugas/View_model', 'view');
		
	}
	

	public function index()
	{
		$load = $this->view->getUser()->result();
		$data = array(
			'title' => 'Data User',
			'pageTitle' => 'Data User',
			'dataTables' => TRUE,
			'pages' => 'page/petugas/Data_user',
			'data' => $load
		);
		$this->load->view('main', $data);
		
	}

	public function addUser()
	{
		$data = array(
			'title' => 'Tambah User',
			'pageTitle' => 'Tambah User',
			'pages' => 'page/petugas/tambah_user',
			'action' => 'petugas/tambah_user/process'
		);

		$this->load->view('main', $data);	
	}

	public function pro_add_user()
	{
	
		$data = array(
			'nip'  		   => $this->input->post('nip'),
			'nama_user'    => $this->input->post('nama_user'),
			'username' 	   => $this->input->post('username'),
			'password'     => password_hash($this->input->post('password',TRUE),PASSWORD_DEFAULT),	
			'jurusan_user' => $this->input->post('jurusan_user'),
			'level'  	   => $this->input->post('level'),
			'jk_user' 	   => $this->input->post('jk_user')
		);

		$this->ins->insertUser($data);
		redirect('petugas/daftar_user');
		
	
	}

	public function setMhs() 
	{
		$data = array(
			'title' => 'Tambah Data Mahasiswa',
			'pageTitle' => 'Tambah Data Mahasiswa',
			'pages' => 'page/mahasiswa/add_mhs',
			'action' => 'petugas/process/tambah_mhs'
		);	

		$this->load->view('main', $data);
		
	}

	public function process_set_mhs()
	{
		$mhsId = 'mhs-' . time().date('Y');
		$data = array(
			"mhs_id" 	   => $mhsId,
			"nama_mhs" 	   => $this->input->post('nama_mhs'),
			"nim_mhs" 	   => $this->input->post('nim_mhs'),
			"jurusan_mhs"  => $this->input->post('jurusan_mhs'),
			"jk_mhs" 	   => $this->input->post('jk_mhs'),
			"noHp_mhs"     => $this->input->post('no_hp'),
			
		);

		$dataTwo = array(
			'id_trx' => $mhsId,
			'matkul_kode' => $this->input->post('nama_matkul'),
			'mhs_nim' => $this->input->post('nim_mhs')
			
		);
		
		// echo "<pre>";
		// var_dump($data, $dataTwo);
		// echo "</pre>";
		// die();
		$this->ins->insertMhs($data, $dataTwo);
		redirect('petugas/data_mhs');
	}

	public function viewMhs() 
	{
		$load = $this->view->getMhsAdmin()->result();
		$data = array(
			'title' => 'Data Mahasiswa',
			'pageTitle' => 'Data Mahasiswa',
			'pages' => 'page/mahasiswa/Data_mhs',
			'data' => $load
		);	

		$this->load->view('main', $data);
		
	}

	public function setMatkul() 
	{
		$data = array(
			'title' => 'Tambah Data Mata Kuliha',
			'pageTitle' => 'Tambah Data Mata Kuliah',
			'pages' => 'page/petugas/tambah_matkul',
			'action' => 'petugas/process/tambah_matkul'
		);	

		$this->load->view('main', $data);
		
	}

	public function process_set_matkul()
	{
		$data = array(
			"nama_matkul" 	  => $this->input->post('nama_matkul'),
			"jurusan_matkul"  => $this->input->post('jurusan_matkul'),
			"kode_matkul"     => $this->input->post('kode_matkul'),
			"sks"  			  => $this->input->post('sks'),
			"dosen_nip"  	  => $this->input->post('dosen_nip'),
			
		);
		
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die();
		$this->ins->insertMatkul($data);
		redirect('petugas/data_matkul');
	}

	public function viewMatkul() 
	{
		$load = $this->view->joinDosenM()->result();
		// echo "<pre>";
		// var_dump($load);
		// echo "</pre>";
		// die();
		$data = array(
			'title' => 'Daftar Mata Kuliah',
			'pageTitle' => 'Daftar Mata Kuliah',
			'pages' => 'page/petugas/Data_matkul',
			'data' => $load
		);	

		$this->load->view('main', $data);
		
	}

	public function viewKajur()
	{
		$load = $this->view->cetak_mhs()->result();
		
		echo "<pre>";
		var_dump($load);
		echo "</pre>";
		die();
		

		$data = array(
			'title' => 'Daftar Mahasiswa',
			'pageTitle' => 'Daftar Mahasiswa',
			'pages' => 'page/kajur/Data_kajur',
			'data' => $load 
		);

		$this->load->view('main', $data);
		
	}

	public function tesDosen($val)
	{
		$val = str_replace('%20', ' ', $val);
		$testing = $this->view->getDosenByJurusan($val)->result();

		// Mengubah data ke format yang diinginkan
		$result = array();
		foreach ($testing as $row) {
			$result[] = array(
				'jurusan_dosen' => $row->jurusan_dosen,
				'nip_dosen' => $row->nip_dosen,
				'nama_dosen' => $row->nama_dosen,
			);
		}

		// Mengembalikan data JSON
		header('Content-Type: application/json');
		echo json_encode($result);
	}

}

?>
