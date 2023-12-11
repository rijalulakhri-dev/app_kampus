<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_controller extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/View_model', 'view');
		$this->load->model('petugas/Insert_model', 'ins');
		
		
	}
	

	public function set_nilai($id)
	{
		$load = $this->view->getAllDataMhs($id)->row_array();
		// var_dump($load);
		// die();
		$data = array(
			'title' => 'Input Nilai Mahasiswa',
			'pageTitle' => 'Input Nilai Mahasiswa',
			'pages' => 'page/dosen/input_nilai',
			'data' => $load
		);

		$this->load->view('main', $data);
	}

	function input_process_nilai($id)
	{
		$data = array(
			'id_trx' => $id,
			'tugas' => $this->input->post('tugas'),
			'uts' => $this->input->post('uts'),
			'uas' => $this->input->post('uas'),
			
		);	

		
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die();
		$this->ins->updateNilai($data);
		redirect('dosen/data_mhs');
	}

	public function data_mhs()
	{
		$load = $this->view->getMhs()->result();
		$data = array(
			'title' => 'Data Mahasiswa',
			'pageTitle' => 'Data Mahasiswa',
			'pages' => 'page/dosen/Data_mhs',
			'data' => $load
		);	

		$this->load->view('main', $data);
	}

}

/* End of file View_controller.php */
?>
