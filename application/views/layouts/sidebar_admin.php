<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="<?= base_url("administrator") ?>">
      <span>PowerPay</span>
      <br>
      <span class="sidebar-brand-subtitle">Dasbor Petugas</span>
    </a>
    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Dashboard
      </li>
      <li class="sidebar-item ">
        <a class="sidebar-link" href="<?= base_url("administrator") ?>">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/profile") ?>">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
        </a>
      </li>
      <li class="sidebar-header">
        User
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/pelanggan") ?>">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
        </a>
      </li>
      <?php
      if ("ADMIN" === $user_auth->level) : ?>
        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url("administrator/petugas") ?>">
            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Petugas</span>
          </a>
        </li>
      <?php endif; ?>
      <li class="sidebar-header">
        Listrik
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/tagihan") ?>">
          <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Tagihan</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/tarif") ?>">
          <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Tarif</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/penggunaan") ?>">
          <i class="align-middle" data-feather="zap"></i> <span class="align-middle">Penggunaan</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/pembayaran") ?>">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Pembayaran</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/pemblokiran") ?>">
          <i class="align-middle" data-feather="slash"></i> <span class="align-middle">Pemblokiran</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url("administrator/terbaik") ?>">
          <i class="align-middle" data-feather="award"></i> <span class="align-middle">Petugas terbaik</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
<div class="main">