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
											required>
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
    const baseUrl = "<?= base_url(); ?>";
    const mataKuliahOptions = {
        "tata boga": ["Mikrobiologi Pangan", "Teknologi Pangan"],
        "seni rupa": ["Pengantar Seni Rupa", "Desain Grafis"],
        "seni tari": ["Antropologi Tari", "Manajemen Tari"],
        "seni musik": ["Sejarah Musik", "Minor Vokal"]
    };
    const dosenOptions = {};

    function updateMataKuliahOptions() {
      const jurusanSelect = document.getElementById("jurusan_matkul");
      const mataKuliahSelect = document.getElementById("nama_matkul");
      const dosenSelect = document.getElementById("dosen_nip");
      const selectedJurusan = jurusanSelect.value;

      mataKuliahSelect.innerHTML = "<option value='' disabled selected>-- Pilih --</option>";
      dosenSelect.innerHTML = "<option value='' disabled selected>-- Pilih --</option>";

      if (selectedJurusan in mataKuliahOptions) {
        const uniqueNips = {}; // Object to track unique NIPs

        mataKuliahOptions[selectedJurusan].forEach(mataKuliah => {
          const option = document.createElement("option");
          option.text = mataKuliah;
          mataKuliahSelect.add(option);
        });

        // Check if dosenOptions already loaded
        if (Object.keys(dosenOptions).length === 0 || !dosenOptions[selectedJurusan]) {
          // Fetch data dosen from server only if dosenOptions is empty or not available for the selectedJurusan
          fetch(`${baseUrl}/cari_dosen/${selectedJurusan}`)
            .then(response => {
              if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
              }
              return response.text();
            })
            .then(data => {
              // Handling PHP serialized data
              if (data.startsWith('array') || data.startsWith('a:')) {
                // Assuming the data is serialized, attempting to unserialize
                try {
                  data = JSON.parse(data.replace(/(\w+):/g, '"$1":').replace(/(\w+)=>/g, '"$1":'));
                } catch (error) {
                  throw new Error('Error parsing PHP serialized data');
                }
              }

              // If data is already JSON, parse it
              const parsedData = typeof data === 'string' ? JSON.parse(data) : data;

              dosenOptions[selectedJurusan] = parsedData;

              dosenOptions[selectedJurusan].forEach(dosen => {
                // Check if NIP is already in uniqueNips object before adding it to the dropdown
                if (!uniqueNips[dosen.nip_dosen]) {
                  uniqueNips[dosen.nip_dosen] = true;

                  const option = document.createElement("option");
                  option.value = dosen.nip_dosen;
                  option.text = dosen.nama_dosen;
                  dosenSelect.add(option);
                }
              });
            })
            .catch(error => console.error("Error fetching data:", error.message));
        } else {
          // Use cached dosenOptions if available
          dosenOptions[selectedJurusan].forEach(dosen => {
            // Check if NIP is already in uniqueNips object before adding it to the dropdown
            if (!uniqueNips[dosen.nip_dosen]) {
              uniqueNips[dosen.nip_dosen] = true;

              const option = document.createElement("option");
              option.value = dosen.nip_dosen;
              option.text = dosen.nama_dosen;
              dosenSelect.add(option);
            }
          });
        }
      }
    }

    // document.addEventListener("DOMContentLoaded", updateMataKuliahOptions);
    document.getElementById("jurusan_matkul").addEventListener("click", updateMataKuliahOptions);
</script>
