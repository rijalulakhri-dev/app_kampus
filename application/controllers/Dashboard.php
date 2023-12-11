<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'pages' => 'page/dashboard',
			'pageTitle' => 'Dashboard'
		);

		$this->load->view('main', $data);
		
	}

}

/* End of file DashboardController.php */
?>
