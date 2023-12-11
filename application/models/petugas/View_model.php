<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model {

	function getMhs() 
	{
		$this->db->select('*');
		$this->db->join('tb_trx', 'tb_trx.id_trx = tb_mhs.mhs_id');
		$this->db->where('jurusan_mhs', $this->session->userdata('jurusan'));
		return $this->db->get('tb_mhs');
		
	}

	function getAllDataMhs($id)
	{
		$this->db->join('tb_trx', 'tb_trx.id_trx = tb_mhs.mhs_id');
		$this->db->where('tb_mhs.mhs_id', $id);
		return $this->db->get('tb_mhs');
		
	}

	function getUser() 
	{
		return $this->db->get('tb_user');
	}

	function getDosenByJurusan($jurusan)
	{
		$this->db->where('jurusan_user', $jurusan);
		$this->db->where('level', 3);
		$this->db->join('tb_dosen', 'tb_dosen.nip_dosen = tb_user.nip');
		return $this->db->get('tb_user');
	}

	function getMatkul() 
	{
		return $this->db->get('tb_matkul');
	}
	
	function joinDosenM()
	{
		$this->db->select('*');
		$this->db->join('tb_user', 'tb_user.nip = tb_matkul.dosen_nip');
		return $this->db->get('tb_matkul');

	}

}

/* End of file View_model.php */
?>
