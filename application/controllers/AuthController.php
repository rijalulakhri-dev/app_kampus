<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/Insert_model', 'ins');
		
	}
	

	public function login()
	{
		$data = array(
			'title' => 'login',
			'action' => 'login/process'
		);

		$this->load->view('page/auth/login', $data);
		
	}

	public function pro_login()
    {
		$username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        
        $validasi = $this->ins->login($username, $password);
        if ($validasi != NULL) {
            $data = $validasi->row_array();
            switch ($data['level']) {
                case '1': // administrasi
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'username' => $data['username'],
						'nama_user' => $data['nama_user'],
                        'password' => $data['password'],
                        'level' => '1',
                    ));
                    redirect('Dashboard');
                    break;

                case '2': //kajur
                    $this->session->set_userdata(array(
                        'masuk' => TRUE,
                        'username' => $data['username'],
						'nama_user' => $data['nama_user'],
                        'password' => $data['password'],
                        'level' => '2',
                    ));
                    redirect('Dashboard');
                    break;

                case '3': // dosen
                    $this->session->set_userdata(array(
						'masuk' => TRUE,
                        'username' => $data['username'],
						'nama_user' => $data['nama_user'],
                        'password' => $data['password'],
						'jurusan' => $data['jurusan_user'],
						'nip' => $data['nip'],
                        'level' => '3',
                    ));
                    redirect('Dashboard');
                    break;

                case '4': // mahasiswa
                    $this->session->set_userdata(array(
						'masuk' => TRUE,
                        'username' => $data['username'],
						'nama_user' => $data['nama_user'],
                        'password' => $data['password'],
                        'level' => '3',
                    ));
                    redirect('Dashboard');
                    break;

                default:                

               
                    break;
            }

        }else {
            redirect('login');
        }
    }

	function logout() 
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}

/* End of file MainController.php */
?>
