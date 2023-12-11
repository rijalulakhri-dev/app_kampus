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
										<select class="form-select digits" name="jurusan_mhs" id="jurusan_mhs" onchange="updateMataKuliahOptions()" >
											<option value="" default>-- Pilih --</option>
											<option value="tata boga">Tata Boga</option>
											<option value="seni rupa">Seni Rupa</option>
											<option value="seni tari">Seni Tari</option>
											<option value="seni musik">Seni Musik</option>
										</select>
										<div class="form-text text-danger"></div>
									</div>
									<div class="col-md-4">
                                            <label class="form-label text-dark" for="nama_matkul">Mata Kuliah</label>
                                            <select class="form-select digits" name="nama_matkul" id="nama_matkul"
                                                required>
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
	<script>
        // Data mata kuliah untuk setiap jurusan
        const mataKuliahOptions = {
            "tata boga": [
                { kode: "dik101", nama: "Mikrobiologi Pangan" },
                { kode: "dik102", nama: "Teknologi Pangan" }
            ],
            "seni rupa": [
                { kode: "dik201", nama: "Pengantar Seni Rupa" },
                { kode: "dik202", nama: "Desain Grafis" }
            ],
            "seni tari": [
                { kode: "dik301", nama: "Antropologi Tari" },
                { kode: "dik302", nama: "Manajemen Tari" }
            ],
            "seni musik": [
                { kode: "dik401", nama: "Sejarah Musik" },
                { kode: "dik402", nama: "Minor Vokal" }
            ]
        };

        // Fungsi untuk memperbarui opsi mata kuliah berdasarkan jurusan yang dipilih
        function updateMataKuliahOptions() {
            const jurusanSelect = document.getElementById("jurusan_mhs");
            const mataKuliahSelect = document.getElementById("nama_matkul");
            const selectedJurusan = jurusanSelect.value;

            // Menghapus opsi sebelumnya
            mataKuliahSelect.innerHTML = "<option value='' disabled selected>-- Pilih --</option>";

            // Menambahkan opsi baru berdasarkan jurusan yang dipilih
            mataKuliahOptions[selectedJurusan].forEach(mataKuliah => {
                const option = document.createElement("option");
                option.value = mataKuliah.kode;
                option.text = mataKuliah.nama;
                mataKuliahSelect.add(option);
            });

            // Hapus nilai kode mata kuliah jika belum memilih mata kuliah
            kodeMatkulInput.value = "";
        }



        // Panggil fungsi updateMataKuliahOptions saat halaman dimuat untuk menginisialisasi opsi mata kuliah
        document.addEventListener("DOMContentLoaded", updateMataKuliahOptions);

        // Panggil fungsi setKodeMatkul saat memilih mata kuliah
        document.getElementById("nama_matkul").addEventListener("change", setKodeMatkul);
    </script>
