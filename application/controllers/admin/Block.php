<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Block extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Pastikan hanya admin yang bisa akses
        is_user_login();
        // Load model pelanggan
        $this->load->model('M_customer');
    }

    /**
     * Menampilkan halaman utama dengan daftar semua pelanggan.
     */
    public function index()
    {
        $data['title'] = "Pemblokiran Pelanggan";
        $data['user_auth'] = get_logged_in_user();
        $data['customers'] = $this->M_customer->get_customers();

        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/sidebar_admin', $data);
        $this->load->view('layouts/header_admin', $data);
        $this->load->view('admin/block/pemblokiran', $data);
        $this->load->view('layouts/footer', $data);
        $this->load->view('layouts/end', $data);
    }

    /**
     * Mengubah status pelanggan menjadi 'diblokir' (1).
     *
     * @param int $id ID Pelanggan
     */
    public function block_customer($id)
    {
        $this->M_customer->update_block_status($id, '1');
        $this->session->set_flashdata('message_success', 'Pelanggan berhasil diblokir.');
        redirect('administrator/pemblokiran');
    }

    /**
     * Mengubah status pelanggan menjadi 'tidak diblokir' (0).
     *
     * @param int $id ID Pelanggan
     */
    public function unblock_customer($id)
    {
        $this->M_customer->update_block_status($id, '0');
        $this->session->set_flashdata('message_success', 'Blokir untuk pelanggan berhasil dibuka.');
        redirect('administrator/pemblokiran');
    }
}
