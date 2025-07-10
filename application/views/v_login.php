<?php

$usr_val = "";
$password = "";

if ($this->session->flashdata('validation_err')) {
  $values = $this->session->flashdata('validation_err');
  $usr_val = $values['username'];
  $password = $values['password'];
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Pelanggan - PowerPay</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #FFD700;
      /* A vibrant yellow */
    }

    .login-card {
      background-color: #ffffff;
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

  <div class="min-h-screen flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-md">
      <div class="text-center mb-8">
        <div class="flex items-center justify-center mb-2">
          <svg class="w-10 h-10 text-gray-900 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
          </svg>
          <h1 class="text-3xl font-bold text-gray-900">PowerPay</h1>
        </div>
        <h2 class="text-xl text-gray-700">Selamat datang kembali!</h2>
      </div>

      <div class="login-card p-8 rounded-lg shadow-lg">
        <?php $this->load->view('layouts/flashdata'); ?>
        <form id="login-form" action="<?php echo base_url('pelanggan/post-masuk'); ?>" method="POST">
          <!-- Customer Username Input -->
          <div class="mb-4">
            <label for="customer-id" class="block text-sm font-medium text-gray-700 mb-1">Username</label>
            <input type="text" type="text" id="username" name="username" name="customer-id" placeholder="Masukan username Anda" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none" value="<?= $usr_val ?>" required>
          </div>
          <?= form_error('username', '<small class="text-danger">', '</small>'); ?>

          <!-- Password Input -->
          <div class="mb-4">
            <div class="flex justify-between items-center">
              <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
              <a href="<?= base_url("pelanggan/lupa-sandi") ?>" class="text-sm text-yellow-600 hover:text-yellow-700">Lupa kata sandi?</a>
            </div>
            <input type="password" id="password" name="password" placeholder="••••••••" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none" value="<?= $password ?>" required>
          </div>
          <?= form_error('password', '<small class="text-danger">', '</small> <br>'); ?>

          <!-- Captcha Section -->
          <div class="mb-4">
            <label ...>Berapakah hasil dari <span id="captcha-question" class="font-bold"><?= $captcha_question ?></span>?</label>
            <input type="number" id="captcha-input" name="captcha" class="w-full p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none" placeholder="Masukkan jawaban" required>
            <p id="captcha-error" class="text-red-500 text-xs mt-1 hidden">Jawaban salah, silakan coba lagi.</p>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-gray-900 text-white font-semibold py-3 px-6 rounded-lg cta-button">
            Masuk
          </button>
        </form>

        <!-- Sign up link -->
        <p class="text-center text-sm text-gray-600 mt-4">
          Belum punya akun? <a href="<?= base_url("/pelanggan/daftar") ?>" class="font-medium text-yellow-600 hover:text-yellow-700">Daftar di sini</a>
        </p>
      </div>

      <div class="text-center mt-2">
        <a href="<?= base_url("Home") ?>" class="text-sm text-gray-800 hover:text-black">&larr; Kembali ke Halaman Utama</a>
      </div>
    </div>

  </div>

  <!-- <script>
    // --- CAPTCHA Logic ---
    const captchaQuestionEl = document.getElementById('captcha-question');
    const captchaInputEl = document.getElementById('captcha-input');
    const captchaErrorEl = document.getElementById('captcha-error');
    const loginForm = document.getElementById('login-form');

    let captchaAnswer = 0;

    function generateCaptcha() {
      const num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
      const num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
      captchaAnswer = num1 + num2;
      captchaQuestionEl.textContent = `${num1} + ${num2}`;
      captchaInputEl.value = ''; // Clear previous input
      captchaErrorEl.classList.add('hidden'); // Hide error message
    }

    function validateCaptcha() {
      const userAnswer = parseInt(captchaInputEl.value, 10);
      if (userAnswer === captchaAnswer) {
        captchaErrorEl.classList.add('hidden');
        return true;
      } else {
        captchaErrorEl.classList.remove('hidden');
        generateCaptcha();
        return false;
      }
    }
    window.onload = generateCaptcha;
  </script> -->

</body>

</html>