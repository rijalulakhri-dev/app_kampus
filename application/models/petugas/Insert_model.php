<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_model extends CI_Model {

	function insertUser($data) {
		if ($data['level'] == 3) {
			$dataDosen = array(
				'nama_dosen' => $data['nama_user'],
				'nip_dosen' => $data['nip'],
				'jurusan_dosen' => $data['jurusan_user']
			);
			$this->db->insert('tb_dosen', $dataDosen);
			
		}
		$this->db->insert('tb_user', $data);
	}

	function insertMhs($data, $dataTwo) {
		$this->db->insert('tb_mhs', $data);
		$this->db->insert('tb_trx', $dataTwo);
	}

	function insertMatkul($data) {
		$this->db->insert('tb_matkul', $data);
	}

	function login($username,$password)
    {
		$this->db->select('password');
        $this->db->where('username', $username);
        $data = $this->db->get('tb_user')->row_array();
        if (password_verify($password, $data['password'])) {
            $this->db->where('username', $username);
            $this->db->limit(1);
            return $this->db->get('tb_user');
        }
    }

	function updateNilai($data) 
	{
		$this->db->where('id_trx', $data['id_trx']);
		$this->db->update('tb_trx', $data);
	}
	

}

/* End of file Insert_model.php */
?>
