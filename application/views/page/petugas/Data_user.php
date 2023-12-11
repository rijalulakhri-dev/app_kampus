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
								<th>NIP</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Jenis Kelamin</th>
								<th>Jurusan</th>
								<th>Level Akses</th>
								<th>Lainnya</th>
							</tr>
							</thead>
							<tbody>
							<?php $no = 1;
							foreach ($data as $d) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $d->nip ?></td>
									<td><?= $d->nama_user ?></td>
									<td><?= $d->username ?></td>
									<td><?= $d->jk_user ?></td>
									<td><?= $d->jurusan_user ?></td>
									<td><?= $d->level ?></td>
									<td></td>
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
