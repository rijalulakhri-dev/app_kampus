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
										<label class="form-label text-dark" for="">NIP</label>
										<input class="form-control" name="nip" type="number">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Nama</label>
										<input class="form-control" name="nama_user" type="nama_user">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">Username</label>
										<input class="form-control" name="username" id="username" type="text">
										<div class="form-text text-danger"></div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Password</label>
										<input class="form-control" name="password" id="password" type="password">
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="">Jurusan/Prodi</label>
										<select class="form-select digits" name="jurusan_user" id="jurusan_user">
											<option value="" default>-- Pilih --</option>
											<option value="tata boga">Tata Boga</option>
											<option value="seni rupa">Seni Rupa</option>
											<option value="seni tari">Seni Tari</option>
											<option value="akustik">Akustik</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">Level Akses</label>
										<select class="form-select digits" name="level" id="level">
											<option value="" default>-- Pilih --</option>
											<option value="1">Administrasi</option>
											<option value="2">Ketua Jurusan</option>
											<option value="3">Dosen</option>
											<option value="4">Mahasiswa</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
								</div>
								<div class="row g-3">
									<div class="col-md-4 mb-3">
										<label class="form-label text-dark" for="">Jenis Kelamin</label>
										<select class="form-select digits" name="jk_user" id="jk_user">
											<option value="" default>-- Pilih --</option>
											<option value="laki-laki">Laki-Laki</option>
											<option value="perempuan">Perempuan</option>
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
