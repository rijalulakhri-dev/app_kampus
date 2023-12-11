<div class="main-content">

	<div class="page-content">
		<div class="container-fluid">

			<?php $this->load->view('partials/breadcumb'); ?>

			<div class="row">
				<div class="col-sm-8">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="<?= base_url($action); ?>" class="needs-validation">
								<div class="row g-3">
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Nama Mahasiswa</label>
										<input class="form-control" name="nama_mhs" id="nama_mhs" type="text">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="">NIM</label>
										<input class="form-control" name="nim_mhs" id="nim_mhs" type="text">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">No Hp</label>
										<input class="form-control" name="no_hp" id="no_hp" type="number">
										<div class="form-text text-danger"></div>
									</div>
								</div>

								<div class="row g-3">
								<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">Jenis Kelamin</label>
										<select class="form-select digits" name="jk_mhs" id="jk_mhs">
											<option value="" default>-- Pilih --</option>
											<option value="laki-laki">Laki-Laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Jurusan/Prodi</label>
										<select class="form-select digits" name="jurusan_mhs" id="jurusan_mhs">
											<option value="" default>-- Pilih --</option>
											<option value="tata boga">Tata Boga</option>
											<option value="seni rupa">Seni Rupa</option>
											<option value="seni tari">Seni Tari</option>
											<option value="seni musik">Seni Musik</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light mt-3">
									<i class=" bx bx-navigation font-size-16 align-middle me-2"></i> Tambah
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- container-fluid -->
	</div>
