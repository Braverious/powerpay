<main class="content">

  <div class="container-fluid p-0">
    <div class="row mb-2 mb-xl-3">
      <div class="col-auto d-none d-sm-block">
        <h3><strong><?= $title ?></strong></h3>
      </div>
      <div class="col-auto ms-auto text-end mt-n1 gap-4 ">
        <a href="<?= base_url("pelanggan/tagihan") ?>" class="btn btn-kuning  me-2">Kembali Ke Halaman Tagihan</a>
      </div>
    </div>
    <div class="row">
      <?php if ($error) { ?>
        <div class="col-12">
          <div class="alert alert-danger" role="alert">
            Data tagihan dengan ID <strong><?= $req_id ?></strong> tidak dapat ditemukan
          </div>
        </div>
      <?php } else { ?>

        <?php if ($bill) : ?>
          <div class="col-md-12">
            <?php $this->load->view('layouts/flashdata'); ?>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-header  pt-4 pb-0 ">
                <div class="bill-tittle">
                  <h3 class="d-flex">Tagihan Pascabayar <strong class="ms-auto"><?= $bill->id_tagihan ?></strong></h3>
                  <small class="d-flex ">Postpaid billing</small>
                </div>
                <hr>
              </div>
              <div class="card-body pt-0 ">
                <table class="table  pt-0 mt-0">
                  <tr>
                    <td>
                      <h5>Nama Pelanggan</h5>
                    </td>
                    <td>
                      <h5 class=" text-capitalize "><?= $bill->nama_pelanggan ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Nomor KWH</h5>
                    </td>
                    <td>
                      <h5><?= $bill->nomor_kwh ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Periode</h5>
                    </td>
                    <td>
                      <h5><?= MonthToString($bill->bulan) ?> <?= $bill->tahun ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Jumlah Meter</h5>
                    </td>
                    <td>
                      <h5><?= $bill->jumlah_meter ?></h5>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <h5>Total Tagihan</h5>
                    </td>
                    <td>
                      <h5><?= $total_bill ?></h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Biaya Admin</h5>
                    </td>
                    <td>
                      <h5><?= $admin_fee ?></h5>
                    </td>
                  </tr>
                  </tr>
                  <tr>
                    <td>
                      <h5>Status</h5>
                    </td>
                    <td> <?php if ($bill->status === "PAID") { ?>
                        <h5 class=" text-success fw-bolder     ">Lunas</h5>
                      <?php } elseif ($bill->status === "PROCESSED") { ?>
                        <h5 class=" text-warning fw-bolder     ">Diproses</h5>
                      <?php } else { ?>
                        <h5 class=" text-danger fw-bolder  ">Belum Lunas</h5>
                      <?php } ?>
                    </td>
                  </tr>
                  <tfoot>
                    <tr>
                      <td>
                        <h4 class=" fw-bold text-primary">Total Pembayaran</h4>
                      </td>
                      <td>
                        <h4 class=" fw-bold text-primary "><?= $total_pay ?></h4>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="card-footer pt-0 pb-4 d-grid gap-3 ">
                <?php if ($show_pay_button) : ?>
                  <a href="<?= base_url('pelanggan/tagihan/print_bill/' . $bill->id_tagihan) ?>" target="_blank" class="btn btn-success px-4 py-2 ">Cetak tagihan</a> <a href="<?= base_url('pelanggan/tagihan/' . $bill->id_tagihan . "/bayar") ?>" class="btn btn-primary px-4 py-2 ">Bayar Sekarang</a>
                  <a href="<?= base_url("administrator/tagihan") ?>" class="btn btn-link">Kembali</a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php } ?>
    </div>
  </div>
</main>