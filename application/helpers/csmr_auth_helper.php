<?php
function is_customer_login()
{
    $CI = &get_instance();
    $is_login = $CI->session->has_userdata("logged_in", TRUE);
    if (!$is_login) {
        $CI->session->set_flashdata('message_error', 'Silahkan login terlebih dahulu!');
        redirect('pelanggan/masuk');
    }

    $role = $CI->session->userdata("role");
    if (strpos($role, 'CUSTOMER') === false) {
        redirect('akses/block');
    }

    $customer = get_logged_in_customer();

    // Cek apakah pelanggan ada dan kolom 'blokir' bernilai '1'
    if ($customer && $customer->blokir == '1') {
        
        // JANGAN GUNAKAN sess_destroy() di sini karena akan menghapus flashdata juga.
        
        // 1. Atur pesan error terlebih dahulu
        $CI->session->set_flashdata('message_error', 'Akses ditolak, akun Anda telah diblokir. <br>Silakan hubungi Administrator.');
        
        // 2. Hapus hanya data spesifik yang menandakan login dari sesi
        $logout_data = array('id_pelanggan', 'role', 'logged_in');
        $CI->session->unset_userdata($logout_data);
        
        // 3. Arahkan kembali ke halaman login
        redirect('pelanggan/masuk');
    }
}

function get_logged_in_customer()
{
    $CI = &get_instance();
    $session = $CI->session->userdata();

    // Pastikan id_pelanggan ada di sesi sebelum digunakan
    if (isset($session["id_pelanggan"])) {
        $id = $session["id_pelanggan"];
        return $CI->M_customer->get_customer_by_id($id);
    }
    return null; // Kembalikan null jika id_pelanggan tidak ada
}

function is_customer_already_logged_in()
{
    $CI = &get_instance();
    if ($CI->session->has_userdata('customer')) {
        redirect('pelanggan');
    }
}