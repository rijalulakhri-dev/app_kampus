<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<?php $this->load->view('partials/breadcumb'); ?>

			<div class="row">
				<div class="col-sm-8">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="<?= base_url('dosen/input_nilai/pro/' . $data['id_trx']); ?>" class="needs-validation">
								<div class="row g-3">
									<div class="col-md-6">
										<label class="form-label text-dark" for="">Nama Mahasiswa <code>*bagian ini terisi otomatis</code></label>
										<input class="form-control" name="nama_mhs" id="nama_mhs" type="text" value="<?= ucwords($data['nama_mhs'])?>" disabled readonly>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-6 mb-3">
										<label class="form-label text-dark" for="">NIM <code>*bagian ini terisi otomatis</code></label>
										<input class="form-control" name="nama_mhs" id="nama_mhs" type="text" value="<?= $data['nim_mhs']?>" disabled readonly>
										<div class="form-text text-danger"></div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Tugas</label>
										<input class="form-control" name="tugas" id="tugas" type="text">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="">NIM</label>
										<input class="form-control" name="uts" id="uts" type="text">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">UAS</label>
										<input class="form-control" name="uas" id="uas" type="text">
										<div class="form-text text-danger"></div>
									</div>
								</div>

								<button type="submit" class="btn btn-success waves-effect waves-light mt-3">
									<i class=" bx bx-navigation font-size-16 align-middle me-2"></i> Tambah Nilai
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- container-fluid -->
	</div>
