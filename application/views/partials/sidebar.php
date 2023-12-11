            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-apps">Navigation</li>

							<?php if ($this->session->userdata('level') == 1) { ?>
								<li>
									<a href="javascript: void(0);" class="has-arrow">
										<i data-feather="file"></i>
										<span data-key="t-ecommerce">Mata Kuliah</span>
									</a>
									<ul class="sub-menu" aria-expanded="false">
										<li><a href="<?= base_url('petugas/tambah_matkul'); ?>" key="t-products">Tambah Mata Kuliah</a></li>
										<li><a href="<?= base_url('petugas/data_matkul'); ?>" data-key="t-product-detail">Daftar Mata Kuliah</a></li>
									</ul>
								</li>

								<li>
									<a href="javascript: void(0);" class="has-arrow">
										<i data-feather="users"></i>
										<span data-key="t-ecommerce">Mahasiswa</span>
									</a>
									<ul class="sub-menu" aria-expanded="false">
										<li><a href="<?= base_url('petugas/tambah_mhs'); ?>" key="t-products">Tambah Mahasiswa</a></li>
										<li><a href="<?= base_url('petugas/data_mhs'); ?>" data-key="t-product-detail">Daftar Mahasiswa</a></li>
									</ul>
								</li>
							<li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="user"></i>
                                    <span data-key="t-ecommerce">Petugas</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?= base_url('petugas/tambah_user'); ?>" key="t-products">Tambah Petugas</a></li>
                                    <li><a href="<?= base_url('petugas/daftar_user'); ?>" data-key="t-product-detail">Daftar Petugas</a></li>
                                </ul>
                            </li>
							<?php } ?>

							<?php if ($this->session->userdata('level') == 3) { ?>
								<li>
									<a href="<?= base_url('dosen/data_mhs'); ?>" >
										<i data-feather="users"></i>
										<span data-key="t-ecommerce">Daftar Mahasiswa</span>
									</a>
								</li>
							<?php } ?>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
