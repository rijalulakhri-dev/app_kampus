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
