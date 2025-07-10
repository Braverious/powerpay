<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Pelanggan - PowerPay</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #FFD700;
      /* Warna kuning dominan */
    }

    .register-card {
      background-color: #ffffff;
    }

    .cta-button {
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .cta-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }

    /* Menyesuaikan warna pesan error dari PHP */
    .text-danger {
      color: #ef4444;
      /* Tailwind's red-500 */
    }
  </style>
</head>

<body class="text-gray-800">

  <?php
  // Blok PHP untuk mengambil nilai flashdata jika ada error validasi
  // Logika ini tidak diubah
  $nama_val = "";
  $usr_val = "";
  $no_kwh = "";
  $alamat = "";
  $tarif = "";

  if ($this->session->flashdata('validation_err')) {
    $values = $this->session->flashdata('validation_err');
    $nama_val = $values['nama'];
    $usr_val = $values['username'];
    $no_kwh = $values['nomor_kwh'];
    $alamat = $values['alamat'];
    $tarif =  $values["id_tarif"];
  }
  ?>

  <main class="w-full min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-3xl">
      <div class="text-center mb-8">
        <div class="flex items-center justify-center mb-2">
          <svg class="w-10 h-10 text-gray-900 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
          <h1 class="text-3xl font-bold text-gray-900">PowerPay</h1>
        </div>
        <h2 class="text-2xl font-bold text-gray-800">Buat Akun Baru Anda</h2>
        <p class="text-gray-700">Daftar sekarang untuk memulai pembayaran yang lebih mudah.</p>
      </div>

      <div class="register-card p-8 rounded-lg shadow-lg">
        <form action="<?php echo base_url('pelanggan/post-daftar'); ?>" method="post">

          <div class="text-center mb-4">
            <?php $this->load->view('layouts/flashdata'); ?>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
            <!-- Nama Lengkap -->
            <div>
              <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
              <input type="text" id="nama" name="nama" value="<?= $nama_val ?>" placeholder="Masukkan nama lengkap" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Username -->
            <div>
              <label for="username" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
              <input type="text" id="username" name="username" value="<?= $usr_val ?>" placeholder="Buat username unik" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Kata Sandi -->
            <div>
              <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
              <input type="password" id="password" name="password" placeholder="Minimal 6 karakter" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Ulangi Kata Sandi -->
            <div>
              <label for="password2" class="block text-sm font-medium text-gray-700 mb-1">Ulangi Kata Sandi</label>
              <input type="password" id="password2" name="password2" placeholder="Ketik ulang kata sandi" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Nomor KWH -->
            <div>
              <label for="nomor_kwh" class="block text-sm font-medium text-gray-700 mb-1">Nomor KWH</label>
              <input type="text" id="nomor_kwh" name="nomor_kwh" value="<?= $no_kwh ?>" placeholder="Contoh: 51234567890" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('nomor_kwh', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Alamat -->
            <div>
              <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
              <input type="text" id="alamat" name="alamat" value="<?= $alamat ?>" placeholder="Masukkan alamat lengkap" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
              <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
            </div>

            <!-- Pilih Tarif -->
            <div class="md:col-span-2">
              <label for="id_tarif" class="block text-sm font-medium text-gray-700 mb-1">Pilih Tarif Daya</label>
              <select id="id_tarif" name="id_tarif" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none">
                <option selected value="">Pilih Tarif Anda</option>
                <?php foreach ($tariffs as $tr) : ?>
                  <option value="<?= $tr["id_tarif"] ?>" <?php echo ($tarif == $tr["id_tarif"]) ? 'selected' : '' ?>>
                    <?= $tr["daya"] ?> VA (<?= "Rp " . number_format($tr["tarif_perkwh"], 0, ",", "."); ?> / kWh)
                  </option>
                <?php endforeach; ?>
              </select>
              <?= form_error('id_tarif', '<small class="text-danger">', '</small>'); ?>
            </div>
          </div>
          <div class="mt-4 text-center">
            <button type="submit" class="w-full md:w-auto bg-gray-900 text-white font-semibold py-3 px-8 rounded-lg cta-button">
              Daftar Sekarang
            </button>
            <p class="text-sm text-gray-600 mt-4">
              Sudah punya akun? <a href="<?= base_url("/pelanggan/masuk") ?>" class="font-medium text-yellow-600 hover:text-yellow-700">Masuk di sini</a>
            </p>
          </div>


        </form>
      </div>
    </div>
  </main>

</body>

</html>