<style>
.btn-kuning {
  color: #000;
  background-color: #ffd700;
  border-color: #ffd700;
}

.btn-kuning:hover {
  color: #000;
  background-color: #e6c300; /* Warna kuning sedikit lebih gelap untuk efek hover */
  border-color: #d9b800;
}
</style>
<nav class="navbar navbar-expand navbar-light navbar-bg">
	<a class="sidebar-toggle js-sidebar-toggle">
		<i class="hamburger align-self-center"></i>
	</a>
	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">

			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
					<span class="text-dark text-capitalize ">Hi, <?= $user_auth->username ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-end">
					<a class="dropdown-item" href="<?= base_url("pelanggan/profile") ?>"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?= base_url("pelanggan/logout") ?>">Log out</a>
				</div>
			</li>
		</ul>
	</div>
</nav>