<style>
	.sidebar {
		background-color: #ffd700;
	}
</style>
<nav id="sidebar" class="sidebar js-sidebar" style="background-color: #ffd700;">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="#">
			<span>PowerPay</span>
			<br>
			<span class="sidebar-brand-subtitle">Dasbor Pelanggan</span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Dashboard
			</li>

			<li class="sidebar-item ">
				<a class="sidebar-link" href="<?= base_url("pelanggan") ?>">

					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="<?= base_url("pelanggan/profile") ?>">
					<i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
				</a>
			</li>
			<li class="sidebar-header">
				Informasi
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="<?= base_url("pelanggan/penggunaan") ?>">
					<i class="align-middle" data-feather="zap"></i> <span class="align-middle">Penggunaan</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="<?= base_url("pelanggan/tagihan") ?>">
					<i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Tagihan</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="<?= base_url("pelanggan/pembayaran") ?>">
					<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Pembayaran</span>
				</a>
			</li>

			<li class="sidebar-header">
				Pengaturan
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="<?= base_url("pelanggan/logout") ?>">
					<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
				</a>
			</li>


	</div>
</nav>

<div class="main">