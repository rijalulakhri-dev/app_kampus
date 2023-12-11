<?php 

require_once FCPATH . 'vendor/autoload.php';

class Cetak extends CI_Controller {

	public function index()
	{
		$this->load->model('petugas/View_model', 'view');
				
		$data['data'] = $this->view->cetak_mhs()->result();
		
		// echo "<pre>";
		// var_dump($data['data']);
		// echo "</pre>";
		// die();
		$mpdf = new \Mpdf\Mpdf();

		$html = '<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Data Mahasiswa</title>
			<style>
				table {
					border-collapse: collapse;
					width: 100%;
				}
		
				th, td {
					border: 1px solid #ddd;
					padding: 8px;
					text-align: left;
				}
		
				th {
					background-color: #f2f2f2;
				}
			</style>
		</head>
		<body>
		
		<h2>Data Mahasiswa</h2>
		
		<table>
			<thead>
				<tr>
					<th rowspan="2">No</th>
					<th rowspan="2">Nama</th>
					<th rowspan="2">NIM</th>
					<th rowspan="2">Jurusan</th>
					<th rowspan="2">Mata Kuliah</th>
					<th rowspan="2">NIP Dosen</th>
					<th colspan="3">NILAI</th>
				</tr>
				<tr>
					<th>Tugas</th>
					<th>UTS</th>
					<th>UAS</th>
				</tr>
			</thead>
			<tbody>';

		$no = 1;
		foreach ($data['data'] as $d) {
			$html .= '<tr>
				<td>' . $no++ . '</td>
				<td>' . $d->nama_mhs . '</td>
				<td>' . $d->mhs_nim . '</td>
				<td>' . $d->jurusan_matkul . '</td>
				<td>' . $d->nama_matkul . '</td>
				<td>' . $d->dosen_nip . '</td>
				<td>' . $d->tugas . '</td>
				<td>' . $d->uts . '</td>
				<td>' . $d->uas . '</td>
			</tr>';
		}

		$html .= '</tbody>
		</table>
		</body>
		</html>';

		 // Tulis konten HTML ke PDF
		 $mpdf->WriteHTML($html);
		 // Output PDF ke browser atau simpan ke file
		 $mpdf->Output('hello_world.pdf', 'I'); // 'I' untuk menampilkan PDF di browser
		 
	}

}

/* End of file Cetak.php */
?>
