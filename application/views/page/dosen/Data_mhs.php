<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<?php $this->load->view('partials/breadcumb'); ?>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>NIM</th>
								<th>Jenis Kelamin</th>
								<th>No Hp</th>
								<th>Jurusan/Prodi</th>
								<th>Lainnya</th>
							</tr>
							</thead>
							<tbody>
							<?php $no = 1;
							foreach ($data as $d) { ?>

								<tr>
									<td><?= $no++ ?></td>
									<td><?= ucwords($d->nama_mhs); ?></td>
									<td><?= $d->nim_mhs; ?></td>
									<td><?= ucfirst($d->jk_mhs); ?></td>
									<td><?= strtoupper($d->noHp_mhs); ?></td>
									<td><?= strtoupper($d->jurusan_mhs); ?></td>
									<td>
										<?php 
											$nilaiLink = base_url('dosen/input_nilai/') . $d->mhs_id;
											$selesaiButton = '<button class="btn btn-soft-success waves-effect waves-light"><i class="bx bx-check font-size-16 align-middle me-2"></i> Selesai</button>';
											if (empty($d->tugas) && empty($d->uts) && empty($d->uas)) {
												echo '<a href="' . $nilaiLink . '" class="btn btn-soft-primary waves-effect waves-light"><i class="bx bx-edit font-size-16 align-middle me-2"></i> Nilai</a>';
											} else {
												echo $selesaiButton;
											}
										?>									
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->

	</div> <!-- container-fluid -->
</div>
