<main class="content">
  <div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
      <div class="col-auto d-none d-sm-block">
        <h3><strong><?= $title ?></strong></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-12 py-2">
        <?php $this->load->view('layouts/flashdata'); ?>
      </div>
      <div class="col-md-4 col-lg-12">
        <div class="card">
          <div class="card-body">
              Tarif harus mengikuti kebijakan yang berlaku pada Dirjen ESDM
          </div>
        </div>
      </div>
      <div class="col-md-7 col-lg-8">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover" id="data-submenu">
                <thead>
                  <tr>
                    <th class="pt-0">#</th>
                    <th class="pt-0">Daya</th>
                    <th class="pt-0">Tarif</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($tarifs as $tr) : ?>
                    <tr>
                      <th><?= $tr['id_tarif'] ?></th>
                      <td><?= $tr['daya']; ?></td>
                      <td><?= $tr['tarif_perkwh']; ?></td>
                      <td>
                        <div class="text-wrap d-flex gap-3 justify-content-center">
                          <a class="btn btn-sm btn-primary" href="<?= base_url('administrator/tarif/update/') . $tr['id_tarif']; ?>"><span class="">Ubah</span>
                          </a>
                          <a id="" class="btn btn-sm btn-danger" href="<?= base_url('administrator/tarif/delete/') . $tr['id_tarif']; ?>">
                            Hapus
                          </a>
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

      <!-- Kolom Formulir (sekarang di sebelah kanan tabel) -->
      <div class="col-md-5 col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Tambah Tarif</h5>
            <form class="g-3" action="<?= base_url("administrator/tarif/create") ?>" method="post">
              <div class="form-group mb-3">
                <label for="daya" class="form-label">Daya</label>
                <input type="text" class="form-control" id="daya" name="daya" placeholder="Contoh: 900VA">
                <?= form_error('daya', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group mb-3">
                <label for="tarif_perkwh" class="form-label">Tarif per-KWH</label>
                <input type="number" class="form-control" id="tarif_perkwh" name="tarif_perkwh" placeholder="Contoh: 1352">
                <?= form_error('tarif_perkwh', '<small class="text-danger">', '</small>'); ?>
              </div>
              <div class="form-group d-flex">
                <button type="submit" class="btn btn-primary w-100">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>