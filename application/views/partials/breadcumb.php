<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18"><?= $pageTitle ?></h4>

			<div class="page-title-right">
			<?php if ($this->uri->segment(1) != NULL) {?>
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
					<li class="breadcrumb-item active"><?= ucwords($this->uri->segment(1)) ?></li>
				</ol>
			<?php } ?>
			</div>

		</div>
	</div>
</div>
