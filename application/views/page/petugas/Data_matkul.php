<div class="main-content">

<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<?php $this->load->view('partials/breadcumb'); ?>
		<!-- end page title -->

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Default Datatable</h4>
						<p class="card-title-desc">DataTables has most features enabled by
							default, so all you need to do to use it with your own tables is to call
							the construction function: <code>$().DataTable();</code>.
						</p>
					</div>
					<div class="card-body">

						<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
							<thead>
							<tr>
								<th>No</th>
								<th>Jurusan</th>
								<th>Nama Mata Kuliah</th>
								<th>Jumlah SKS</th>
								<th>Nip Dosen</th>
							</tr>
							</thead>
							<tbody>
							<?php $no = 1;
							foreach ($data as $d) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $d->jurusan_matkul ?></td>
									<td><?= $d->nama_matkul ?></td>
									<td><?= $d->sks ?></td>
									<td><?= $d->dosen_nip ?></td>
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
