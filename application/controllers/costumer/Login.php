<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Class Login Customer
 *
 * @description Controller untuk halaman login pelanggan
 *
 * @package      Customer Controller
 * @subpackage   Login Customer
 * @category     Controller
 */
class Login extends CI_Controller
{
  /**
   * @description Login constructor.
   */
  public function __construct()
  {
    parent::__construct();
    // Pastikan session library sudah di-load, bisa di autoload.php atau di sini
    $this->load->library('session');
    $this->load->model('M_customer'); // Pastikan model di-load
  }

  /**
   * @description Menampilkan halaman login pelanggan dan membuat soal Captcha
   */
  public function index()
  {
    // --- GENERATE CAPTCHA ---
    // 1. Buat dua angka acak
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);

    // 2. Simpan jawaban yang benar ke dalam session
    $this->session->set_userdata('captcha_answer', $num1 + $num2);

    // 3. Kirim soalnya ke view
    $data["captcha_question"] = "$num1 + $num2";
    // --- END GENERATE CAPTCHA ---

    $data["title"] = "Masuk";
    $this->load->view('layouts/auth/head', $data);
    $this->load->view('v_login', $data);
    $this->load->view('layouts/auth/end', $data);
  }


  /**
   * @description Menyimpan data login dan melakukan validasi
   */
  public function create()
  {
    // Menetapkan aturan validasi untuk form
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|alpha_dash');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');
    // Tambahkan aturan validasi untuk captcha menggunakan callback
    $this->form_validation->set_rules('captcha', 'Captcha', 'required|callback_validate_captcha');


    // Mengambil data dari form
    $username = $this->input->post('username', TRUE); // filter input dengan fungsi xss_clean
    $password = $this->input->post('password', TRUE); // filter input dengan fungsi xss_clean

    // Menambahkan pesan error yang jelas
    $this->form_validation->set_message('required', '{field} harus diisi');
    $this->form_validation->set_message('min_length', '{field} minimal {param} karakter');
    $this->form_validation->set_message('max_length', '{field} maksimal {param} karakter');
    $this->form_validation->set_message('alpha_dash', '{field} hanya boleh berisi huruf, angka, underscore, atau dash');
    
    // Mendefinisikan data untuk diteruskan pada saat ada error validasi
    $validation_err = array(
      'username' => $username,
      'password' => $password,
    );

    // Mengecek apakah form validasi sudah benar
    if ($this->form_validation->run() == FALSE) {
      // Menyimpan data error validasi pada session
      $this->session->set_flashdata('validation_err', $validation_err);
      $this->session->set_flashdata('message_error', validation_errors());

      // Redirect kembali ke halaman login
      redirect('pelanggan/masuk');
    } else {
      // Mencari data customer berdasarkan username
      $customer = $this->M_customer->get_customer_by_username($username);
      // Mengecek apakah customer tersebut ada
      if ($customer) {
        // Mengecek apakah password yang diinput sesuai dengan password pelanggan
        if (password_verify($password, $customer->password)) {
          // Menyimpan data pelanggan pada session
          $session = [
            'id_pelanggan' => $customer->id_pelanggan,
            'nama' => $customer->nama_pelanggan,
            'username' => $customer->username,
            'logged_in' => TRUE,
            "role" => "CUSTOMER",
          ];

          $this->session->set_userdata($session);
          $this->session->set_flashdata('message_welcome', TRUE);
          // Redirect ke halaman pelanggan
          redirect('pelanggan');
        } else {
          // Menyimpan data error dan pesan error pada session
          $this->session->set_flashdata('validation_err', $validation_err);
          $this->session->set_flashdata('message_error', 'Username atau Kata Sandi yang anda masukan salah!');

          // Redirect ke halaman login
          redirect('pelanggan/masuk');
        }
      } else {
        // Menyimpan data error dan pesan error pada session
        $this->session->set_flashdata('validation_err', $validation_err);
        $this->session->set_flashdata('message_error', 'Username atau Kata Sandi yang anda masukan salah!');
        // Redirect ke halaman login
        redirect('pelanggan/masuk');
      }
    }
  }

  /**
   * @description Fungsi callback untuk memvalidasi captcha
   * @param string $input Jawaban captcha dari pengguna
   * @return bool
   */
  public function validate_captcha($input)
  {
    $correct_answer = $this->session->userdata('captcha_answer');

    // Hapus session captcha setelah diperiksa untuk keamanan
    $this->session->unset_userdata('captcha_answer');

    if ($input == $correct_answer) {
      return TRUE;
    } else {
      $this->form_validation->set_message('validate_captcha', 'Jawaban Captcha salah.');
      return FALSE;
    }
  }

  /**
   * @description Melakukan logout dan menghapus session pelanggan
   */
  public function logout()
  {
    $this->session->set_flashdata('message_success', 'Logout berhasil, sampai jumpa lagi!');
    $this->session->sess_destroy();
    redirect('pelanggan/masuk');
  }
}