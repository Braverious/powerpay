<main class="content">

  <div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
      <div class="col-auto d-none d-sm-block">
        <h3><strong><?= $title ?></strong></h3>
      </div>

      <div class="col-auto ms-auto text-end mt-n1">
        <!-- <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a> -->
        <a href="<?= base_url("pelanggan/penggunaan/input") ?>" class="btn btn-kuning"> <i data-feather="file-plus" class="my-auto mb-1"></i> Input Penggunaan</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?php $this->load->view('layouts/flashdata'); ?>
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID Penggunaan</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Meter Awal</th>
                  <th>Meter Akhir</th>
                  <th>Daya</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($usages as $u) : ?>
                  <tr>
                    <td><?php echo $u->id_penggunaan ?></td>
                    <td><?php echo MonthToString($u->bulan) ?></td>
                    <td><?php echo $u->tahun ?></td>
                    <td><?php echo $u->meter_awal ?></td>
                    <td><?php echo $u->meter_akhir ?></td>
                    <td><?php echo $u->daya ?></td>
                    <td>
                      <div class="d-flex gap-2">
                         
                        <a href="<?php echo site_url('pelanggan/penggunaan/hapus/' . $u->id_penggunaan) ?>" class="btn btn-danger btn-sm">Hapus</a>

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

  </div>
</main>