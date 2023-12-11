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

		$nama = $data['nama_mhs'];
		// Mengambil 7 karakter dari $nama, jika kurang dari 7 ambil semuanya
		$nama_username = substr($nama, 0, 7);
		$nama_username = str_replace(' ', '', $nama_username);

		// Menangani kasus jika panjang karakter $nama kurang dari 7
		if (strlen($nama) < 7) {
			$nama_username = str_replace(' ', '', $nama); // Ambil semuanya dan hapus spasi
		}

		// Mengambil 3 angka di awal dan 3 angka di akhir dari $nim
		$nim_username = substr($data['nim_mhs'], 0, 3) . substr($data['nim_mhs'], -3);

		// Menggabungkan $nama_username dan $nim_username untuk membentuk username
		$username = $nama_username . $nim_username;
		$password = password_hash($data['nim_mhs'],PASSWORD_DEFAULT);

		$dataUser = array(
			'nama_user'    => $data['nama_mhs'],
			'username' 	   => $username,
			'password' 	   => $password,
			'jurusan_user' => $data['jurusan_mhs'],
			'level'  	   => 4,
			'jk_user' 	   => $data['jk_mhs']
		);

		$this->db->insert('tb_user', $dataUser);
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
