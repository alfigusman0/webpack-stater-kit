<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?= base_url('assets/img/avatar.png'); ?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?= $this->jwt->nama; ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header text-center"><?= $this->jwt->level ?></li>
			<li><a href="<?= base_url('Dashboard/'); ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

			<?php if ($this->jwt->level == 'DEVELOPMENT') : ?>
				<!-- Cronejob -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Cronejob</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Daftar -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder">&nbsp;</i>
								<span>Daftar</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu"></ul>
						</li>
						<!-- Internasional -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder">&nbsp;</i>
								<span>Internasional</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Cronejob/CJ6/'); ?>"><i class="fa fa-circle-o"></i>Biodata Internasional</a></li>
							</ul>
						</li>
						<!-- Pradaftar -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder">&nbsp;</i>
								<span>Pradaftar</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Cronejob/CJ12/'); ?>"><i class="fa fa-circle-o"></i>Akumulasi Penilaian</a></li>
								<li><a href="<?= base_url('Cronejob/CJ5/'); ?>"><i class="fa fa-circle-o"></i>Biodata Mandiri</a></li>
								<li><a href="<?= base_url('Cronejob/CJ9/'); ?>"><i class="fa fa-circle-o"></i>Distribusi Portofolio</a></li>
								<li><a href="<?= base_url('Cronejob/CJ10/'); ?>"><i class="fa fa-circle-o"></i>Distribusi Prestasi</a></li>
								<li><a href="<?= base_url('Cronejob/CJ7/'); ?>"><i class="fa fa-circle-o"></i>Distribusi Rapor</a></li>
								<li><a href="<?= base_url('Cronejob/CJ8/'); ?>"><i class="fa fa-circle-o"></i>Nilai Rapor</a></li>
								<li><a href="<?= base_url('Cronejob/CJ1/'); ?>"><i class="fa fa-circle-o"></i>Normalisasi Users</a></li>
								<li><a href="<?= base_url('Cronejob/CJ11/'); ?>"><i class="fa fa-circle-o"></i>Perhitungan Bobot</a></li>
								<li><a href="<?= base_url('Cronejob/CJ4/'); ?>"><i class="fa fa-circle-o"></i>Verifikasi Pembayaran</a></li>
							</ul>
						</li>
						<!-- Settings -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-folder">&nbsp;</i>
								<span>Settings</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Cronejob/CJ2/'); ?>"><i class="fa fa-circle-o"></i>Quota SMTP</a></li>
								<li><a href="<?= base_url('Cronejob/CJ3/'); ?>"><i class="fa fa-circle-o"></i>Quota Tipe Ujian</a></li>
							</ul>
						</li>
					</ul>
				</li>

				<!-- Daftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Daftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Daftar/PDDIKTI/'); ?>"><i class="fa fa-circle-o"></i>PDDIKTI</a></li>
								<li><a href="<?= base_url('Export/Daftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Daftar/Biodata/'); ?>"><i class="fa fa-circle-o"></i>Biodata</a></li>
								<li><a href="<?= base_url('Export/Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Daftar/Form/'); ?>"><i class="fa fa-circle-o"></i>Form</a></li>
								<li><a href="<?= base_url('Export/Daftar/Resume/'); ?>"><i class="fa fa-circle-o"></i>Resume</a></li>
								<li><a href="<?= base_url('Export/Daftar/Pemberkasan/'); ?>"><i class="fa fa-circle-o"></i>Pemberkasan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Daftar/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
								<li><a href="<?= base_url('Import/Daftar/StatusBayar/'); ?>"><i class="fa fa-circle-o"></i>Status Bayar</a></li>
								<!-- Import -->
								<li class="treeview">
									<a href="#">
										<i class="fa fa-circle-o"></i>
										<span>Penyesuaian</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('Import/Daftar/Penyesuaian/PenyesuaianUsers'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
										<li><a href="<?= base_url('Import/Daftar/Penyesuaian/PenyesuaianUKT'); ?>"><i class="fa fa-circle-o"></i>UKT</a></li>
										<li><a href="<?= base_url('Import/Daftar/Penyesuaian/PenyesuaianPddikti'); ?>"><i class="fa fa-circle-o"></i>PDDIKTI</a></li>
										<li><a href="<?= base_url('Import/Daftar/Penyesuaian/PenyesuaianExtra'); ?>"><i class="fa fa-circle-o"></i>Extra</a></li>
										<li><a href="<?= base_url('Import/Daftar/Penyesuaian/PenyesuaianGambar'); ?>"><i class="fa fa-circle-o"></i>Gambar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="<?= base_url('Daftar/Statistik/'); ?>"><i class="fa fa-circle-o"></i>Statistik</a></li>
						<li><a href="<?= base_url('Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						<li><a href="<?= base_url('Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
					</ul>
				</li>

				<!-- Internasional -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder">&nbsp;</i>
						<span>Internasional</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<i class="fa fa-circle-o">&nbsp;</i>
										<span>Users</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('Internasional/ExportExcel/'); ?>"><i class="fa fa-circle-o"></i>Semua</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/SudahBayar/'); ?>"><i class="fa fa-circle-o"></i>Sudah Bayar</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/BelumBayar/'); ?>"><i class="fa fa-circle-o"></i>Belum Bayar</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('Export/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Internasional/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Internasional/Statistik/'); ?>"><i class="fa fa-line-chart"></i>Statistik</a></li>
						<li><a href="<?= base_url('Internasional/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Internasional/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
					</ul>
				</li>

				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Pradaftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Pradaftar/ABHP/'); ?>"><i class="fa fa-circle-o"></i>ABHP dan Berita Acara</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Jadwal/'); ?>"><i class="fa fa-circle-o"></i>Jadwal</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Rapor/'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Portofolio/'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/TemporaryUsers/'); ?>"><i class="fa fa-circle-o"></i>Temporary Users</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Wilayah/'); ?>"><i class="fa fa-circle-o"></i>Wilayah</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/SSE/'); ?>"><i class="fa fa-circle-o"></i>SSE</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Ruang/'); ?>"><i class="fa fa-circle-o"></i>Ruang</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Peserta/'); ?>"><i class="fa fa-circle-o"></i>Peserta</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
								<li><a href="<?= base_url('Import/Pradaftar/ReuseUsers/'); ?>"><i class="fa fa-circle-o"></i>Reuse Users</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-id-card-o">&nbsp;</i>
								<span>Penilaian</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Pradaftar/Users/Portofolio'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Prestasi'); ?>"><i class="fa fa-circle-o"></i>Prestasi</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Rapor'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Pradaftar/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Pradaftar/Statistik/'); ?>"><i class="fa fa-line-chart"></i>Statistik</a></li>
						<li><a href="<?= base_url('Pradaftar/TmpUsers/'); ?>"><i class="fa fa-users"></i>Temporary Users</a></li>
						<li><a href="<?= base_url('Pradaftar/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>

					</ul>
				</li>

				<!-- Kelulusan -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Kelulusan</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Kelulusan/Jurusan/'); ?>"><i class="fa fa-circle-o"></i>Jurusan</a></li>
								<li><a href="<?= base_url('Export/Kelulusan/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Kelulusan/Pilihan/'); ?>"><i class="fa fa-circle-o"></i>Ujian</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Kelulusan/Afirmasi/'); ?>"><i class="fa fa-circle-o"></i>Afirmasi</a></li>
								<li><a href="<?= base_url('Import/Kelulusan/CekKelulusan/'); ?>"><i class="fa fa-circle-o"></i>Cek Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Kelulusan/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Kelulusan/Nilai/'); ?>"><i class="fa fa-circle-o"></i>Nilai</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Kelulusan/Afirmasi/'); ?>"><i class="fa fa-circle-o"></i>Afirmasi Eksekutif</a></li>
						<li><a href="<?= base_url('Kelulusan/GenerateGrade/'); ?>"><i class="fa fa-circle-o"></i>Generate Grade Jurusan</a></li>
						<li><a href="<?= base_url('Kelulusan/GenerateKelulusan/'); ?>"><i class="fa fa-circle-o"></i>Generate Kelulusan</a></li>
						<li><a href="<?= base_url('Kelulusan/GenerateNilai/'); ?>"><i class="fa fa-circle-o"></i>Generate Nilai</a></li>
					</ul>
				</li>

				<!-- Uang Kuliah Tunggal -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder"></i> <span>Uang Kuliah Tunggal</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<!--<li><a href="<?/*=base_url('Export/Pradaftar/ABHP/');*/ ?>"><i class="fa fa-circle-o"></i>ABHP</a></li>-->
							</ul>
						</li>
						<!-- Histori -->
						<li class="treeview">
							<a href="#"><i class="fa fa-table"></i> <span>Histori</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('UKT/Histori/BobotNilaiUkt/'); ?>"><i class="fa fa-circle-o"></i>Bobot Nilai UKT</a></li>
								<li><a href="<?= base_url('UKT/Histori/BobotRangeUkt/'); ?>"><i class="fa fa-circle-o"></i>Bobot Range UKT</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/UKT/PenetapanUKT/'); ?>"><i class="fa fa-circle-o"></i>Penetapan UKT</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('UKT/Generate/'); ?>"><i class="fa fa-circle-o"></i>Generate</a></li>
						<li><a href="<?= base_url('UKT/ResetGenerate/'); ?>"><i class="fa fa-circle-o"></i>Reset Generate</a></li>
						<li><a href="<?= base_url('UKT/UKTJurusan/'); ?>"><i class="fa fa-circle-o"></i>Statistik Jurusan</a></li>
						<li><a href="<?= base_url('UKT/UKTRekapNilai/'); ?>"><i class="fa fa-circle-o"></i>Rekap Nilai</a></li>
					</ul>
				</li>

				<!-- Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Penyesuaian/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Penyesuaian</a></li>
						<li><a href="<?= base_url('Internasional/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Internasional</a></li>
						<li><a href="<?= base_url('Pradaftar/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Pradaftar</a></li>
					</ul>
				</li>

				<!-- Advanced Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Advanced Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Admin -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Admin</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Bank/'); ?>"><i class="fa fa-gear">&nbsp;</i>Bank</a></li>
								<li><a href="<?= base_url('Settings/Fakultas/'); ?>"><i class="fa fa-gear">&nbsp;</i>Fakultas</a></li>
								<li><a href="<?= base_url('Settings/Jurusan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan</a></li>
								<li><a href="<?= base_url('Settings/SMTP/'); ?>"><i class="fa fa-gear">&nbsp;</i>SMTP</a></li>
								<li><a href="<?= base_url('Settings/Users/'); ?>"><i class="fa fa-gear">&nbsp;</i>Users</a></li>
								<li><a href="<?= base_url('Settings/Vicon/'); ?>"><i class="fa fa-gear">&nbsp;</i>Vicon</a></li>
							</ul>
						</li>
						<!-- Biodata -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Biodata</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Agama/'); ?>"><i class="fa fa-gear">&nbsp;</i>Agama</a></li>
								<li><a href="<?= base_url('Settings/AlatTransportasi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Alat Transportasi</a></li>
								<li><a href="<?= base_url('Settings/Hubungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Hubungan</a></li>
								<li><a href="<?= base_url('Settings/JenisSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JurusanSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JalurMasuk/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jalur Masuk</a></li>
								<li><a href="<?= base_url('Settings/JenisPendaftaran/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Pendaftaran</a></li>
								<li><a href="<?= base_url('Settings/JenisTinggal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Tinggal</a></li>
								<li><a href="<?= base_url('Settings/Pekerjaan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pekerjaan</a></li>
								<li><a href="<?= base_url('Settings/PembayaranListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran Listrik</a></li>
								<li><a href="<?= base_url('Settings/PembayaranPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran PBB</a></li>
								<li><a href="<?= base_url('Settings/Pendidikan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pendidikan</a></li>
								<li><a href="<?= base_url('Settings/Penghasilan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Penghasilan</a></li>
								<li><a href="<?= base_url('Settings/RekeningListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening Listrik</a></li>
								<li><a href="<?= base_url('Settings/RekeningPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening PBB</a></li>
								<li><a href="<?= base_url('Settings/Rumpun/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rumpun</a></li>
								<li><a href="<?= base_url('Settings/Tanggungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tanggungan</a></li>
								<li><a href="<?= base_url('Settings/TipeFile/'); ?>"><i class="fa fa-gear"> </i>Tipe File</a></li>

							</ul>
						</li>
						<!-- Daerah -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Daerah</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/JenisDaerah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Daerah</a></li>
								<li><a href="<?= base_url('Settings/Provinsi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Provinsi</a></li>
								<li><a href="<?= base_url('Settings/Kabupaten/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kabupaten</a></li>
								<li><a href="<?= base_url('Settings/Kecamatan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kecamatan</a></li>
								<li><a href="<?= base_url('Settings/Kelurahan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kelurahan</a></li>
							</ul>
						</li>
						<!-- Pradaftar -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o">&nbsp;</i> <span>Pradaftar</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Kampus/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kampus</a></li>
								<li><a href="<?= base_url('Settings/Gedung/'); ?>"><i class="fa fa-gear">&nbsp;</i>Gedung</a></li>
								<li><a href="<?= base_url('Settings/Ruangan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Ruangan</a></li>
								<li><a href="<?= base_url('Settings/TipeUjian/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tipe Ujian</a></li>
								<li><a href="<?= base_url('Settings/Jadwal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jadwal</a></li>
							</ul>
						</li>
						<!-- UKT -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>UKT</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/BobotUkt/'); ?>"><i class="fa fa-gear">&nbsp;</i>Bobot UKT</a></li>
								<li><a href="<?= base_url('Settings/BobotRange/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rentang UKT</a></li>
							</ul>
						</li>
					</ul>
				</li>
			<?php elseif ($this->jwt->level == 'ADMIN') : ?>
				<!-- Daftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Daftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Daftar/PDDIKTI/'); ?>"><i class="fa fa-circle-o"></i>PDDIKTI</a></li>
								<li><a href="<?= base_url('Export/Daftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Daftar/Biodata/'); ?>"><i class="fa fa-circle-o"></i>Biodata</a></li>
								<li><a href="<?= base_url('Export/Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Daftar/Form/'); ?>"><i class="fa fa-circle-o"></i>Form</a></li>
								<li><a href="<?= base_url('Export/Daftar/Resume/'); ?>"><i class="fa fa-circle-o"></i>Resume</a></li>
								<li><a href="<?= base_url('Export/Daftar/Pemberkasan/'); ?>"><i class="fa fa-circle-o"></i>Pemberkasan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Daftar/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
								<li><a href="<?= base_url('Import/Daftar/StatusBayar/'); ?>"><i class="fa fa-circle-o"></i>Status Bayar</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Daftar/Statistik/'); ?>"><i class="fa fa-circle-o"></i>Statistik</a></li>
						<li><a href="<?= base_url('Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						<li><a href="<?= base_url('Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
					</ul>
				</li>

				<!-- Internasional -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder">&nbsp;</i>
						<span>Internasional</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<i class="fa fa-circle-o">&nbsp;</i>
										<span>Users</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('Internasional/ExportExcel/'); ?>"><i class="fa fa-circle-o"></i>Semua</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/SudahBayar/'); ?>"><i class="fa fa-circle-o"></i>Sudah Bayar</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/BelumBayar/'); ?>"><i class="fa fa-circle-o"></i>Belum Bayar</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('Export/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Internasional/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
							</ul>
						</li>
						<!-- Statistik -->
						<li class="treeview">
							<a href="#"><i class="fa fa-line-chart">&nbsp;</i>
								<span>Statistik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Internasional/Statistik/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PemilihanJurusan/'); ?>"><i class="fa fa-circle-o"></i>Pemilihan Jurusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PerNegara/'); ?>"><i class="fa fa-circle-o"></i>Per Negara</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Internasional/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Internasional/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
					</ul>
				</li>

				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Pradaftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">

						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Pradaftar/ABHP/'); ?>"><i class="fa fa-circle-o"></i>ABHP dan Berita Acara</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Jadwal/'); ?>"><i class="fa fa-circle-o"></i>Jadwal</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Rapor/'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Portofolio/'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/TemporaryUsers/'); ?>"><i class="fa fa-circle-o"></i>Temporary Users</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Wilayah/'); ?>"><i class="fa fa-circle-o"></i>Wilayah</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/SSE/'); ?>"><i class="fa fa-circle-o"></i>SSE</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Ruang/'); ?>"><i class="fa fa-circle-o"></i>Ruang</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Peserta/'); ?>"><i class="fa fa-circle-o"></i>Peserta</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
								<li><a href="<?= base_url('Import/Pradaftar/ReuseUsers/'); ?>"><i class="fa fa-circle-o"></i>Reuse Users</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-id-card-o">&nbsp;</i>
								<span>Penilaian</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Pradaftar/Users/Portofolio'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Prestasi'); ?>"><i class="fa fa-circle-o"></i>Prestasi</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Rapor'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Pradaftar/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Pradaftar/Statistik/'); ?>"><i class="fa fa-line-chart"></i>Statistik</a></li>
						<li><a href="<?= base_url('Pradaftar/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
						<li><a href="<?= base_url('Pradaftar/TmpUsers/'); ?>"><i class="fa fa-users"></i>Temporary Users</a></li>

					</ul>
				</li>

				<!-- Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Penyesuaian/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Penyesuaian</a></li>
						<li><a href="<?= base_url('Internasional/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Internasional</a></li>
						<li><a href="<?= base_url('Pradaftar/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Pradaftar</a></li>
					</ul>
				</li>

				<!-- Advanced Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Advanced Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Admin -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Admin</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Bank/'); ?>"><i class="fa fa-gear">&nbsp;</i>Bank</a></li>
								<li><a href="<?= base_url('Settings/Fakultas/'); ?>"><i class="fa fa-gear">&nbsp;</i>Fakultas</a></li>
								<li><a href="<?= base_url('Settings/Jurusan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan</a></li>
								<li><a href="<?= base_url('Settings/Users/'); ?>"><i class="fa fa-gear">&nbsp;</i>Users</a></li>
							</ul>
						</li>
						<!-- Biodata -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Biodata</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Agama/'); ?>"><i class="fa fa-gear">&nbsp;</i>Agama</a></li>
								<li><a href="<?= base_url('Settings/AlatTransportasi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Alat Transportasi</a></li>
								<li><a href="<?= base_url('Settings/Hubungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Hubungan</a></li>
								<li><a href="<?= base_url('Settings/JenisSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JurusanSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JalurMasuk/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jalur Masuk</a></li>
								<li><a href="<?= base_url('Settings/JenisPendaftaran/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Pendaftaran</a></li>
								<li><a href="<?= base_url('Settings/JenisTinggal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Tinggal</a></li>
								<li><a href="<?= base_url('Settings/Pekerjaan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pekerjaan</a></li>
								<li><a href="<?= base_url('Settings/PembayaranListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran Listrik</a></li>
								<li><a href="<?= base_url('Settings/PembayaranPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran PBB</a></li>
								<li><a href="<?= base_url('Settings/Pendidikan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pendidikan</a></li>
								<li><a href="<?= base_url('Settings/Penghasilan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Penghasilan</a></li>
								<li><a href="<?= base_url('Settings/RekeningListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening Listrik</a></li>
								<li><a href="<?= base_url('Settings/RekeningPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening PBB</a></li>
								<li><a href="<?= base_url('Settings/Rumpun/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rumpun</a></li>
								<li><a href="<?= base_url('Settings/Tanggungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tanggungan</a></li>
								<li><a href="<?= base_url('Settings/TipeFile/'); ?>"><i class="fa fa-gear"> </i>Tipe File</a></li>

							</ul>
						</li>
						<!-- Daerah -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Daerah</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/JenisDaerah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Daerah</a></li>
								<li><a href="<?= base_url('Settings/Provinsi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Provinsi</a></li>
								<li><a href="<?= base_url('Settings/Kabupaten/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kabupaten</a></li>
								<li><a href="<?= base_url('Settings/Kecamatan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kecamatan</a></li>
								<li><a href="<?= base_url('Settings/Kelurahan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kelurahan</a></li>
							</ul>
						</li>
						<!-- Pradaftar -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o">&nbsp;</i> <span>Pradaftar</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Kampus/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kampus</a></li>
								<li><a href="<?= base_url('Settings/Gedung/'); ?>"><i class="fa fa-gear">&nbsp;</i>Gedung</a></li>
								<li><a href="<?= base_url('Settings/Ruangan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Ruangan</a></li>
								<li><a href="<?= base_url('Settings/TipeUjian/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tipe Ujian</a></li>
								<li><a href="<?= base_url('Settings/Jadwal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jadwal</a></li>
								<li><a href="<?= base_url('Settings/Vicon/'); ?>"><i class="fa fa-gear">&nbsp;</i>Vicon</a></li>
							</ul>
						</li>
						<!-- UKT -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>UKT</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/BobotUkt/'); ?>"><i class="fa fa-gear">&nbsp;</i>Bobot UKT</a></li>
								<li><a href="<?= base_url('Settings/BobotRange/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rentang UKT</a></li>
							</ul>
						</li>
					</ul>
				</li>
			<?php elseif ($this->jwt->level == 'AKADEMIK') : ?>
				<!-- Daftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Daftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Daftar/PDDIKTI/'); ?>"><i class="fa fa-circle-o"></i>PDDIKTI</a></li>
								<li><a href="<?= base_url('Export/Daftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Daftar/Biodata/'); ?>"><i class="fa fa-circle-o"></i>Biodata</a></li>
								<li><a href="<?= base_url('Export/Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Daftar/Form/'); ?>"><i class="fa fa-circle-o"></i>Form</a></li>
								<li><a href="<?= base_url('Export/Daftar/Resume/'); ?>"><i class="fa fa-circle-o"></i>Resume</a></li>
								<li><a href="<?= base_url('Export/Daftar/Pemberkasan/'); ?>"><i class="fa fa-circle-o"></i>Pemberkasan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Daftar/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Daftar/Statistik/'); ?>"><i class="fa fa-circle-o"></i>Statistik</a></li>
						<li><a href="<?= base_url('Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						<li><a href="<?= base_url('Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
					</ul>
				</li>

				<!-- Internasional -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder">&nbsp;</i>
						<span>Internasional</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<i class="fa fa-circle-o">&nbsp;</i>
										<span>Users</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('Internasional/ExportExcel/'); ?>"><i class="fa fa-circle-o"></i>Semua</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/SudahBayar/'); ?>"><i class="fa fa-circle-o"></i>Sudah Bayar</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/BelumBayar/'); ?>"><i class="fa fa-circle-o"></i>Belum Bayar</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('Export/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Internasional/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
							</ul>
						</li>
						<!-- Statistik -->
						<li class="treeview">
							<a href="#"><i class="fa fa-line-chart">&nbsp;</i>
								<span>Statistik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Internasional/Statistik/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PemilihanJurusan/'); ?>"><i class="fa fa-circle-o"></i>Pemilihan Jurusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PerNegara/'); ?>"><i class="fa fa-circle-o"></i>Per Negara</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Internasional/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Internasional/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
					</ul>
				</li>

				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Pradaftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Pradaftar/ABHP/'); ?>"><i class="fa fa-circle-o"></i>ABHP dan Berita Acara</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Akademik/'); ?>"><i class="fa fa-circle-o"></i>Akademik</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Jadwal/'); ?>"><i class="fa fa-circle-o"></i>Jadwal</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Rapor/'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Export/Pradaftar/TemporaryUsers/'); ?>"><i class="fa fa-circle-o"></i>Temporary Users</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Pradaftar/ReuseUsers/'); ?>"><i class="fa fa-circle-o"></i>Reuse Users</a></li>
							</ul>
						</li>
						<!-- Penilaian -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-id-card-o">&nbsp;</i>
								<span>Penilaian</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Pradaftar/Users/Portofolio'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Prestasi'); ?>"><i class="fa fa-circle-o"></i>Prestasi</a></li>
								<li><a href="<?= base_url('Pradaftar/Users/Rapor'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Pradaftar/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Pradaftar/Statistik/'); ?>"><i class="fa fa-line-chart"></i>Statistik</a></li>
						<li><a href="<?= base_url('Pradaftar/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
						<li><a href="<?= base_url('Pradaftar/TmpUsers/'); ?>"><i class="fa fa-users"></i>Temporary Users</a></li>
					</ul>
				</li>

				<!-- Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Penyesuaian/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Penyesuaian</a></li>
						<li><a href="<?= base_url('Internasional/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Internasional</a></li>
						<li><a href="<?= base_url('Pradaftar/Setting'); ?>"><i class="fa fa-gear">&nbsp;</i>Pradaftar</a></li>
					</ul>
				</li>

				<!-- Advanced Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Advanced Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Admin -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Admin</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Fakultas/'); ?>"><i class="fa fa-gear">&nbsp;</i>Fakultas</a></li>
								<li><a href="<?= base_url('Settings/Jurusan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan</a></li>
							</ul>
						</li>
						<!-- Biodata -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Biodata</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Agama/'); ?>"><i class="fa fa-gear">&nbsp;</i>Agama</a></li>
								<li><a href="<?= base_url('Settings/AlatTransportasi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Alat Transportasi</a></li>
								<li><a href="<?= base_url('Settings/Hubungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Hubungan</a></li>
								<li><a href="<?= base_url('Settings/JenisSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JurusanSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JalurMasuk/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jalur Masuk</a></li>
								<li><a href="<?= base_url('Settings/JenisPendaftaran/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Pendaftaran</a></li>
								<li><a href="<?= base_url('Settings/JenisTinggal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Tinggal</a></li>
								<li><a href="<?= base_url('Settings/Pekerjaan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pekerjaan</a></li>
								<li><a href="<?= base_url('Settings/PembayaranListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran Listrik</a></li>
								<li><a href="<?= base_url('Settings/PembayaranPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran PBB</a></li>
								<li><a href="<?= base_url('Settings/Pendidikan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pendidikan</a></li>
								<li><a href="<?= base_url('Settings/Penghasilan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Penghasilan</a></li>
								<li><a href="<?= base_url('Settings/RekeningListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening Listrik</a></li>
								<li><a href="<?= base_url('Settings/RekeningPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening PBB</a></li>
								<li><a href="<?= base_url('Settings/Rumpun/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rumpun</a></li>
								<li><a href="<?= base_url('Settings/Tanggungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tanggungan</a></li>
								<li><a href="<?= base_url('Settings/TipeFile/'); ?>"><i class="fa fa-gear"> </i>Tipe File</a></li>

							</ul>
						</li>
						<!-- Daerah -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Daerah</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/JenisDaerah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Daerah</a></li>
								<li><a href="<?= base_url('Settings/Provinsi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Provinsi</a></li>
								<li><a href="<?= base_url('Settings/Kabupaten/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kabupaten</a></li>
								<li><a href="<?= base_url('Settings/Kecamatan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kecamatan</a></li>
								<li><a href="<?= base_url('Settings/Kelurahan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kelurahan</a></li>
							</ul>
						</li>
						<!-- Pradaftar -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o">&nbsp;</i> <span>Pradaftar</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Kampus/'); ?>"><i class="fa fa-gear">&nbsp;</i>Kampus</a></li>
								<li><a href="<?= base_url('Settings/Gedung/'); ?>"><i class="fa fa-gear">&nbsp;</i>Gedung</a></li>
								<li><a href="<?= base_url('Settings/Ruangan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Ruangan</a></li>
								<li><a href="<?= base_url('Settings/TipeUjian/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tipe Ujian</a></li>
								<li><a href="<?= base_url('Settings/Jadwal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jadwal</a></li>
								<li><a href="<?= base_url('Settings/Vicon/'); ?>"><i class="fa fa-gear">&nbsp;</i>Vicon</a></li>
							</ul>
						</li>
					</ul>
				</li>

			<?php elseif ($this->jwt->level == 'KEUANGAN') : ?>
				<!-- Daftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Daftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Daftar/StatusBayar/'); ?>"><i class="fa fa-circle-o"></i>Status Bayar</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Daftar/Statistik/'); ?>"><i class="fa fa-circle-o"></i>Statistik</a></li>
						<li><a href="<?= base_url('Daftar/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
						<li><a href="<?= base_url('Daftar/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
					</ul>
				</li>

				<!-- Internasional -->
				<li class="treeview">
					<a href="#">
						<i class="fa fa-folder">&nbsp;</i>
						<span>Internasional</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li class="treeview">
									<a href="#">
										<i class="fa fa-circle-o">&nbsp;</i>
										<span>Users</span>
										<span class="pull-right-container">
											<i class="fa fa-angle-left pull-right"></i>
										</span>
									</a>
									<ul class="treeview-menu">
										<li><a href="<?= base_url('Internasional/ExportExcel/'); ?>"><i class="fa fa-circle-o"></i>Semua</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/SudahBayar/'); ?>"><i class="fa fa-circle-o"></i>Sudah Bayar</a></li>
										<li><a href="<?= base_url('Internasional/ExportExcel/BelumBayar/'); ?>"><i class="fa fa-circle-o"></i>Belum Bayar</a></li>
									</ul>
								</li>
								<li><a href="<?= base_url('Export/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Internasional/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Import/Internasional/NIM/'); ?>"><i class="fa fa-circle-o"></i>NIM</a></li>
							</ul>
						</li>
						<!-- Statistik -->
						<li class="treeview">
							<a href="#"><i class="fa fa-line-chart">&nbsp;</i>
								<span>Statistik</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Internasional/Statistik/Users/'); ?>"><i class="fa fa-circle-o"></i>Users</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/Kelulusan/'); ?>"><i class="fa fa-circle-o"></i>Kelulusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PemilihanJurusan/'); ?>"><i class="fa fa-circle-o"></i>Pemilihan Jurusan</a></li>
								<li><a href="<?= base_url('Internasional/Statistik/PerNegara/'); ?>"><i class="fa fa-circle-o"></i>Per Negara</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Internasional/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Internasional/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
					</ul>
				</li>

				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Pradaftar</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Export/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/Pradaftar/Pembayaran/'); ?>"><i class="fa fa-circle-o"></i>Pembayaran</a></li>
								<li><a href="<?= base_url('Import/Pradaftar/ReuseUsers/'); ?>"><i class="fa fa-circle-o"></i>Reuse Users</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Pradaftar/Pembayaran/'); ?>"><i class="fa fa-money"></i>Pembayaran</a></li>
						<li><a href="<?= base_url('Pradaftar/Statistik/'); ?>"><i class="fa fa-line-chart"></i>Statistik</a></li>
						<li><a href="<?= base_url('Pradaftar/TmpUsers/'); ?>"><i class="fa fa-users"></i>Temporary Users</a></li>
						<li><a href="<?= base_url('Pradaftar/Users/'); ?>"><i class="fa fa-users"></i>Users</a></li>
					</ul>
				</li>

				<!-- Uang Kuliah Tunggal -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder"></i> <span>Uang Kuliah Tunggal</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Export -->
						<li class="treeview">
							<a href="#"><i class="fa fa-download">&nbsp;</i>
								<span>Export</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<!--<li><a href="<?/*=base_url('Export/Pradaftar/ABHP/');*/ ?>"><i class="fa fa-circle-o"></i>ABHP</a></li>-->
							</ul>
						</li>
						<!-- Histori -->
						<li class="treeview">
							<a href="#"><i class="fa fa-table"></i> <span>Histori</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('UKT/Histori/BobotNilaiUkt/'); ?>"><i class="fa fa-circle-o"></i>Bobot Nilai UKT</a></li>
								<li><a href="<?= base_url('UKT/Histori/BobotRangeUkt/'); ?>"><i class="fa fa-circle-o"></i>Bobot Range UKT</a></li>
							</ul>
						</li>
						<!-- Import -->
						<li class="treeview">
							<a href="#">
								<i class="fa fa-upload">&nbsp;</i>
								<span>Import</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Import/UKT/PenetapanUKT/'); ?>"><i class="fa fa-circle-o"></i>Penetapan UKT</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('UKT/Generate/'); ?>"><i class="fa fa-circle-o"></i>Generate</a></li>
						<li><a href="<?= base_url('UKT/ResetGenerate/'); ?>"><i class="fa fa-circle-o"></i>Reset Generate</a></li>
						<li><a href="<?= base_url('UKT/UKTJurusan/'); ?>"><i class="fa fa-circle-o"></i>Statistik Jurusan</a></li>
						<li><a href="<?= base_url('UKT/UKTRekapNilai/'); ?>"><i class="fa fa-circle-o"></i>Rekap Nilai</a></li>
					</ul>
				</li>

				<!-- Advanced Settings -->
				<li class="treeview">
					<a href="#"><i class="fa fa-gears"></i> <span>Advanced Settings</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<!-- Biodata -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>Biodata</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/Agama/'); ?>"><i class="fa fa-gear">&nbsp;</i>Agama</a></li>
								<li><a href="<?= base_url('Settings/AlatTransportasi/'); ?>"><i class="fa fa-gear">&nbsp;</i>Alat Transportasi</a></li>
								<li><a href="<?= base_url('Settings/Hubungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Hubungan</a></li>
								<li><a href="<?= base_url('Settings/JenisSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JurusanSekolah/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jurusan Sekolah</a></li>
								<li><a href="<?= base_url('Settings/JalurMasuk/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jalur Masuk</a></li>
								<li><a href="<?= base_url('Settings/JenisPendaftaran/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Pendaftaran</a></li>
								<li><a href="<?= base_url('Settings/JenisTinggal/'); ?>"><i class="fa fa-gear">&nbsp;</i>Jenis Tinggal</a></li>
								<li><a href="<?= base_url('Settings/Pekerjaan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pekerjaan</a></li>
								<li><a href="<?= base_url('Settings/PembayaranListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran Listrik</a></li>
								<li><a href="<?= base_url('Settings/PembayaranPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pembayaran PBB</a></li>
								<li><a href="<?= base_url('Settings/Pendidikan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Pendidikan</a></li>
								<li><a href="<?= base_url('Settings/Penghasilan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Penghasilan</a></li>
								<li><a href="<?= base_url('Settings/RekeningListrik/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening Listrik</a></li>
								<li><a href="<?= base_url('Settings/RekeningPbb/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rekening PBB</a></li>
								<li><a href="<?= base_url('Settings/Rumpun/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rumpun</a></li>
								<li><a href="<?= base_url('Settings/Tanggungan/'); ?>"><i class="fa fa-gear">&nbsp;</i>Tanggungan</a></li>
								<li><a href="<?= base_url('Settings/TipeFile/'); ?>"><i class="fa fa-gear"> </i>Tipe File</a></li>

							</ul>
						</li>
						<!-- UKT -->
						<li class="treeview">
							<a href="#"><i class="fa fa-folder-o"></i> <span>UKT</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">
								<li><a href="<?= base_url('Settings/BobotUkt/'); ?>"><i class="fa fa-gear">&nbsp;</i>Bobot UKT</a></li>
								<li><a href="<?= base_url('Settings/BobotRange/'); ?>"><i class="fa fa-gear">&nbsp;</i>Rentang UKT</a></li>
							</ul>
						</li>
					</ul>
				</li>

			<?php elseif ($this->jwt->level == 'AFIRMASI') : ?>
				<li><a href="<?= base_url('Kelulusan/Afirmasi/'); ?>"><i class="fa fa-circle-o"></i>Afirmasi</a></li>
			<?php elseif ($this->jwt->level == 'RAPOR') : ?>
				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Penilaian</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Pradaftar/Rapor'); ?>"><i class="fa fa-circle-o"></i>Rapor</a></li>
					</ul>
				</li>
			<?php elseif ($this->jwt->level == 'PORTOFOLIO') : ?>
				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Penilaian</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Pradaftar/Portofolio'); ?>"><i class="fa fa-circle-o"></i>Portofolio</a></li>
					</ul>
				</li>
			<?php elseif ($this->jwt->level == 'PRESTASI') : ?>
				<!-- Pradaftar -->
				<li class="treeview">
					<a href="#"><i class="fa fa-folder">&nbsp;</i>
						<span>Penilaian</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= base_url('Pradaftar/Prestasi'); ?>"><i class="fa fa-circle-o"></i>Prestasi</a></li>
					</ul>
				</li>
			<?php endif; ?>

			<li><a href="<?= base_url('Auth/Logout'); ?>"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
		</ul>
	</section>
</aside>