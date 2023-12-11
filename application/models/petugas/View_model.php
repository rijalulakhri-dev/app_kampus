<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model {

	function getMhs() 
	{
		$this->db->select('*');
		$this->db->join('tb_trx', 'tb_trx.id_trx = tb_mhs.mhs_id');
		$this->db->where('matkul_kode', $this->session->userdata('kode_matkul'));
		return $this->db->get('tb_mhs');
		
	}

	function getMhsAdmin() 
	{
		$this->db->select('*');
		$this->db->join('tb_trx', 'tb_trx.id_trx = tb_mhs.mhs_id');
		return $this->db->get('tb_mhs');
		
	}

	function getAllDataMhs($id)
	{
		$this->db->join('tb_trx', 'tb_trx.id_trx = tb_mhs.mhs_id');
		$this->db->where('tb_mhs.mhs_id', $id);
		return $this->db->get('tb_mhs');
		
	}

	function dosenAuthBind($nip)
	{
		$this->db->join('tb_matkul', 'tb_matkul.dosen_nip = tb_user.nip');
		$this->db->limit(1);
		$this->db->where('tb_user.nip', $nip);
		return $this->db->get('tb_user');
		
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

	function cetak_mhs()
	{
		$this->db->select('*');
		$this->db->join('tb_matkul', 'tb_matkul.kode_matkul = tb_trx.matkul_kode');
		$this->db->join('tb_mhs', 'tb_mhs.nim_mhs = tb_trx.mhs_nim');
		return $this->db->get('tb_trx');
			
	}
}

/* End of file View_model.php */
?>
