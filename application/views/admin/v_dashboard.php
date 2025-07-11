<main class="content">
	<div class="container-fluid p-0">
		<div class="row mb-2 mb-xl-3">
			<div class="col-auto d-none d-sm-block">
				<h3><strong>Dashboard</strong></h3>
			</div>
			<div class="col-auto ms-auto text-end mt-n1">
				<a href="<?= base_url("administrator/tagihan") ?>" class="btn btn-kuning">
					<i data-feather="file" class="my-auto mb-1"></i> Cek Tagihan
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php if ($this->session->flashdata('message_welcome')) : ?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						<strong>Hai <span class="text-capitalize"><?= $user_auth->nama_admin ?></span>!</strong> Selamat datang di halaman dashboard administrasi <strong>Aplikasi Pembayaran Listrik Pascabayar</strong>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Penghasilan</h5>
							</div>
							<div class="col-auto">
								<div class="stat text-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
										<line x1="12" y1="1" x2="12" y2="23"></line>
										<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
									</svg>
								</div>
							</div>
						</div>
						<h1 class="mt-1 mb-3 text-nowrap text-truncate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?= Rupiah($payment_recap) ?>"><?= Rupiah($payment_recap) ?></h1>
						<div class="mb-0">
							<span class="text-muted">Bulan Ini</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Pelanggan</h5>
							</div>
							<div class="col-auto">
								<div class="stat text-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-middle">
										<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
										<circle cx="9" cy="7" r="4"></circle>
										<path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
										<path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
									</svg>
								</div>
							</div>
						</div>
						<h1 class="mt-1 mb-3"><?= $count_cs ?></h1>
						<div class="mb-0">
							<span class="text-muted">Terdaftar</span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Tagihan</h5>
							</div>
							<div class="col-auto">
								<div class="stat text-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-middle">
										<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
										<polyline points="14 2 14 8 20 8"></polyline>
										<line x1="16" y1="13" x2="8" y2="13"></line>
										<line x1="16" y1="17" x2="8" y2="17"></line>
										<polyline points="10 9 9 9 8 9"></polyline>
									</svg>
								</div>
							</div>
						</div>
						<h1 class="mt-1 mb-0"><?= $count_biils["count_unpaid_bills"] ?></h1>
						<small class="mb-3 text-muted text-capitalize fst-italic">dari <?= $count_biils["count_bills"] ?> tagihan</small>
						<div class="mb-0">
							<span class="text-muted">Periode <?= MonthToString($count_biils["month"]) . " " . $count_biils["year"] ?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Pendapatan</h5>
							</div>
							<div class="col-auto">
								<div class="stat text-primary">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up align-middle">
										<polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
										<polyline points="17 6 23 6 23 12"></polyline>
									</svg>
								</div>
							</div>
						</div>
						<h1 class="mt-1 mb-3 text-nowrap text-truncate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?= Rupiah($total_revenue) ?>"><?= Rupiah($total_revenue) ?></h1>
						<div class="mb-0">
							<span class="text-muted">Tahun <?= date("Y") ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Grafik Pendapatan Tahun 2025</h5>
						<h6 class="card-subtitle text-muted">Total pendapatan yang diterima per bulan sepanjang tahun 2025.</h6>
					</div>
					<div class="card-body">
						<div class="chart">
							<canvas id="chartjs-line-revenue"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 d-flex">
				<div class="card flex-fill">
					<div class="card-header">
						<h5 class="card-title mb-0">Rekapitulasi Status Tagihan</h5>
						<h6 class="card-subtitle text-muted">Jumlah tagihan yang sudah dan belum lunas.</h6>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="chart">
								<canvas id="donut-chart-status"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 d-flex">
				<div class="card flex-fill">
					<div class="card-header">
						<h5 class="card-title mb-0">Distribusi Daya Pelanggan</h5>
						<h6 class="card-subtitle text-muted">Jumlah pelanggan berdasarkan jenis daya listrik.</h6>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-center w-100">
							<div class="chart">
								<canvas id="donut-chart-daya"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-xxl-9 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<h5 class="card-title mb-0">Tagihan Terbaru</h5>
					</div>
					<div class="card-body px-4">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Detail</th>
										<th>ID Tagihan</th>
										<th>Pelanggan</th>
										<th>Periode</th>
										<th class="text-nowrap">Jumlah Meter</th>
										<th>Jumlah Bayar</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($latest_bills as $b) : ?>
										<tr>
											<td class="text-nowrap">
												<div class="d-flex gap-2">
													<a href="<?php echo site_url('administrator/tagihan/' . $b->id_tagihan) ?>" class="btn btn-primary btn-sm d-flex align-items-center gap-2">
														<i class="btn-icon-prepend" data-feather="info"></i> Detail
													</a>
												</div>
											</td>
											<td><?= $b->id_tagihan; ?></td>
											<td>
												<span><?= $b->id_pelanggan; ?></span>
												<div class="fst-italic text-dark">(<?= $b->nama_pelanggan ?>)</div>
											</td>
											<td class="text-nowrap"><?= MonthToString($b->bulan); ?> <?= $b->tahun; ?></td>
											<td><?= $b->jumlah_meter; ?></td>
											<td class="text-nowrap"><?= Rupiah($b->tarif_perkwh * $b->jumlah_meter) ?></td>
											<td>
												<div>
													<?php if ($b->status === "PAID") { ?>
														<span class="badge bg-success rounded-0 px-3 py-2">Lunas</span>
													<?php } else { ?>
														<span class="badge rounded-0 bg-danger px-3 py-2">Belum Lunas</span>
													<?php } ?>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-xxl-3 d-flex">
				<div class="card flex-fill w-100">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5 class="card-title mb-0">Pelanggan Terbaru</h5>
						<a href="<?= base_url("administrator/pelanggan") ?>" class="btn btn-link p-0 shadow-none"><small>Lebih lanjut <i data-feather="arrow-right"></i></small></a>
					</div>
					<div class="card-body d-flex">
						<div class="align-self-start w-100">
							<div class="py-2">
								<table class="table table-hover">
									<thead class="thead-light">
										<tr>
											<th>ID Pelanggan</th>
											<th class="text-nowrap">Nama Pelanggan</th>
											<th>Username</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($latest_cs as $c) : ?>
											<tr>
												<td><?php echo $c->id_pelanggan ?></td>
												<td class="text-nowrap"><?php echo $c->nama_pelanggan ?></td>
												<td><?php echo $c->username ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Data dari controller
		const revenueData = <?= json_encode($revenue_grafik_2025); ?>;
		const labels = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];

		new Chart(document.getElementById("chartjs-line-revenue"), {
			type: "line",
			data: {
				labels: labels,
				datasets: [{
					label: "Pendapatan (Rp)",
					fill: true,
					backgroundColor: "rgba(255, 204, 0, 0.2)", // Warna area di bawah garis (kuning transparan)
					borderColor: "rgb(255, 204, 0)", // Warna garis (kuning)
					data: revenueData,
					tension: 0.2
				}]
			},
			options: {
				maintainAspectRatio: false,
				responsive: true,
				plugins: {
					legend: {
						display: false
					},
					tooltip: {
						callbacks: {
							label: function(context) {
								let label = context.dataset.label || '';
								if (label) {
									label += ': ';
								}
								if (context.parsed.y !== null) {
									label += new Intl.NumberFormat('id-ID', {
										style: 'currency',
										currency: 'IDR',
										minimumFractionDigits: 0
									}).format(context.parsed.y);
								}
								return label;
							}
						}
					}
				},
				scales: {
					y: {
						beginAtZero: true,
						ticks: {
							callback: function(value, index, values) {
								if (value >= 1000000) {
									return 'Rp ' + (value / 1000000) + ' Jt';
								} else if (value >= 1000) {
									return 'Rp ' + (value / 1000) + ' Rb';
								}
								return 'Rp ' + value;
							}
						}
					}
				}
			}
		});
	});
	document.addEventListener("DOMContentLoaded", function() {
		// ... (kode untuk grafik garis pendapatan yang sudah ada) ...

		// Data dari controller untuk diagram donat
		const billsStatusData = <?= json_encode($bills_status_summary); ?>;
		const customerPowerData = <?= json_encode($customer_power_summary); ?>;

		// --- Inisialisasi Diagram Donat 1: Status Tagihan ---
		new Chart(document.getElementById("donut-chart-status"), {
			type: "doughnut",
			data: {
				labels: ["Lunas (PAID)", "Belum Lunas (UNPAID)"],
				datasets: [{
					data: [billsStatusData.PAID, billsStatusData.UNPAID],
					backgroundColor: [
						"rgb(40, 167, 69)", // Warna Hijau untuk PAID
						"rgb(220, 53, 69)" // Warna Merah untuk UNPAID
					],
					borderColor: "transparent"
				}]
			},
			options: {
				maintainAspectRatio: false,
				cutoutPercentage: 65,
				plugins: {
					legend: {
						display: true,
						position: 'bottom'
					}
				}
			}
		});

		// --- Inisialisasi Diagram Donat 2: Distribusi Daya ---
		new Chart(document.getElementById("donut-chart-daya"), {
			type: "doughnut",
			data: {
				labels: customerPowerData.labels,
				datasets: [{
					data: customerPowerData.data,
					backgroundColor: [
						"rgb(255, 193, 7)", // Kuning
						"rgb(0, 123, 255)", // Biru
						"rgb(253, 126, 20)", // Oranye
						"rgb(111, 66, 193)", // Ungu
						"rgb(23, 162, 184)" // Teal
					],
					borderColor: "transparent"
				}]
			},
			options: {
				maintainAspectRatio: false,
				cutoutPercentage: 65,
				plugins: {
					legend: {
						display: true,
						position: 'bottom'
					}
				}
			}
		});
	});
</script>