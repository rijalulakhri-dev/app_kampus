<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<?php $this->load->view('partials/breadcumb'); ?>
			<div class="row">
				<div class="col-sm-8">
					<div class="card">
						<div class="card-body">
							<form method="POST" action="<?= base_url($action); ?>" class="needs-validation"
								id="mataKuliahForm">
								<div class="row g-3 mb-3">
									<div class="col-md-4">
										<label class="form-label text-dark" for="jurusan_matkul">Jurusan/Prodi</label>
										<select class="form-select digits" name="jurusan_matkul" id="jurusan_matkul"
											onchange="updateMataKuliahOptions()" required>
											<option value="" selected>-- Pilih --</option>
											<option value="tata boga">Tata Boga</option>
											<option value="seni rupa">Seni Rupa</option>
											<option value="seni tari">Seni Tari</option>
											<option value="seni musik">Seni Musik</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="nama_matkul">Mata Kuliah</label>
										<select class="form-select digits" name="nama_matkul" id="nama_matkul" required>
											<option value="" selected>-- Pilih --</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="kode_matkul">Kode Mata Kuliah</label>
										<input class="form-control" name="kode_matkul" type="text" required>
										<div class="form-text text-danger"></div>
									</div>
								</div>

								<div class="row g-3">
									<div class="col-md-4">
										<label class="form-label text-dark" for="sks">SKS</label>
										<input class="form-control" name="sks" type="number" required>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
										<label class="form-label text-dark" for="dosen_nip">NIP Dosen</label>
										<select class="form-select digits" name="dosen_nip" id="dosen_nip" required>
											<option value="" selected>-- Pilih --</option>

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
</div>


<script>
	const mataKuliahOptions = {
		"tata boga": ["Mikrobiologi Pangan", "Teknologi Pangan"],
		"seni rupa": ["Pengantar Seni Rupa", "Desain Grafis"],
		"seni tari": ["Antropologi Tari", "Manajemen Tari"],
		"seni musik": ["Sejarah Musik", "Minor Vokal"]
	};

	function updateMataKuliahOptions() {
		const jurusanSelect = document.getElementById("jurusan_matkul");
		const mataKuliahSelect = document.getElementById("nama_matkul");
		const selectedJurusan = jurusanSelect.value;

		mataKuliahSelect.innerHTML = "<option value='' disabled selected>-- Pilih --</option>";

		if (selectedJurusan in mataKuliahOptions) {
			mataKuliahOptions[selectedJurusan].forEach(mataKuliah => {
				const option = document.createElement("option");
				option.text = mataKuliah;
				mataKuliahSelect.add(option);
			});
		}

		// Mendapatkan nilai terpilih dari jurusan_matkul
		var selectedJurusan = document.getElementById("jurusan_matkul").value;

		// Mengambil elemen select untuk dosen_nip
		var dosenNipSelect = document.getElementById("dosen_nip");

		// Mengosongkan opsi sebelum menambahkan yang baru
		dosenNipSelect.innerHTML = '<option value="" selected>-- Pilih --</option>';

		// Memeriksa apakah jurusan terpilih tidak kosong
		if (selectedJurusan !== "") {
			// Menggunakan URL untuk mencari dosen berdasarkan jurusan
			var url = "<?= base_url('cari_dosen/'); ?>" + encodeURIComponent(selectedJurusan);

			// Mengambil data dari server menggunakan AJAX
			// Anda bisa menggunakan library seperti jQuery atau fetch API
			fetch(url)
				.then(response => response.json())
				.then(data => {
					// Menambahkan opsi ke elemen select
					data.forEach(function (dosen) {
						var option = document.createElement("option");
						option.value = dosen.nip_dosen;
						option.text = dosen.nama_dosen;
						dosenNipSelect.appendChild(option);
					});
				})
				.catch(error => console.error('Error:', error));
		}
	}

	document.addEventListener("DOMContentLoaded", updateMataKuliahOptions);
</script>


