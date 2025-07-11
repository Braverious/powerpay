<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Halaman Tidak Ditemukan - PowerPay</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url("assets/listrik.png") ?>" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #FFD700;
      /* Warna kuning dominan */
    }

    .cta-button {
      transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .cta-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>

<body class="text-gray-800">
  <div class="min-h-screen flex flex-col items-center justify-center text-center p-4">
    <div class="max-w-md w-full">
      <div class="mb-4">
        <svg class="w-24 h-24 mx-auto text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" opacity="0.3"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 18.364a9 9 0 11-12.728-12.728m12.728 12.728a9 9 0 00-12.728-12.728m12.728 12.728L6 6"></path>
        </svg>
      </div>

      <h1 class="text-8xl md:text-9xl font-black text-gray-900">404</h1>
      <h2 class="text-2xl font-bold text-gray-800 mt-2">Halaman Tidak Ditemukan</h2>
      <p class="text-gray-700 mt-4 max-w-xs mx-auto">
        Maaf, halaman yang Anda cari mungkin telah dihapus atau tidak pernah ada.
      </p>
      <div class="mt-8">
        <a href="<?= base_url($dash_page) ?>" class="bg-gray-900 text-white font-semibold py-3 px-8 rounded-lg cta-button inline-block">
          Kembali ke Halaman Utama
        </a>
      </div>
      <div class="mt-12 text-center">
        <div class="flex items-center justify-center">
          <svg class="w-6 h-6 text-gray-800 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
          <span class="text-xl font-bold text-gray-800">PowerPay</span>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/') ?>js/app.js"></script>
</body>

</html>