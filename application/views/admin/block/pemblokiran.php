<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong><?= $title ?></strong></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                
                <?php $this->load->view('layouts/flashdata'); ?>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Daftar Pelanggan</h5>
                        <h6 class="card-subtitle text-muted">Kelola status pemblokiran untuk setiap pelanggan.</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Alamat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customers as $customer) : ?>
                                    <tr>
                                        <td><?= $customer->id_pelanggan; ?></td>
                                        <td><?= $customer->nama_pelanggan; ?></td>
                                        <td><?= $customer->username; ?></td>
                                        <td><?= $customer->alamat; ?></td>
                                        <td>
                                            <?php if ($customer->blokir == '1') : ?>
                                                <span class="badge bg-danger">Terblokir</span>
                                            <?php else : ?>
                                                <span class="badge bg-success">Aktif</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if ($customer->blokir == '1') : ?>
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#konfirmasiModal" 
                                                    data-url="<?= site_url('administrator/pemblokiran/unblock/' . $customer->id_pelanggan) ?>" 
                                                    data-pesan="Anda yakin ingin membuka blokir pelanggan '<?= $customer->nama_pelanggan ?>'?">
                                                    <i class="align-middle" data-feather="check-circle"></i> Buka Blokir
                                                </button>
                                            <?php else : ?>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#konfirmasiModal" 
                                                    data-url="<?= site_url('administrator/pemblokiran/block/' . $customer->id_pelanggan) ?>" 
                                                    data-pesan="Anda yakin ingin memblokir pelanggan '<?= $customer->nama_pelanggan ?>'?">
                                                    <i class="align-middle" data-feather="x-circle"></i> Blokir Akun
                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Tindakan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="pesan-modal">Apakah Anda yakin?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="#" id="btn-lanjutkan" class="btn btn-danger">Ya, Lanjutkan</a>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var konfirmasiModal = document.getElementById('konfirmasiModal');
    konfirmasiModal.addEventListener('show.bs.modal', function(event) {
        // Tombol yang memicu modal
        var button = event.relatedTarget;

        // Ambil data dari atribut data-*
        var url = button.getAttribute('data-url');
        var pesan = button.getAttribute('data-pesan');

        // Update konten modal
        var modalBodyP = konfirmasiModal.querySelector('.modal-body p');
        var modalContinueBtn = konfirmasiModal.querySelector('#btn-lanjutkan');

        modalBodyP.textContent = pesan;
        modalContinueBtn.setAttribute('href', url);

        // Sesuaikan warna tombol "Lanjutkan"
        if (pesan.includes('membuka blokir')) {
            modalContinueBtn.classList.remove('btn-danger');
            modalContinueBtn.classList.add('btn-success');
        } else {
            modalContinueBtn.classList.remove('btn-success');
            modalContinueBtn.classList.add('btn-danger');
        }
    });
});
</script>