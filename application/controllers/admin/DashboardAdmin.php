<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class Dashboard Admin
 *
 * @description Controller untuk halaman dan mengatur fitur pelanggan
 *
 * @package     Admin Controller
 * @subpackage  Dashboard Admin
 * @category    Controller
 */
class DashboardAdmin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_user_login();
  }

  public function index()
  {
    $data['user_auth'] = get_logged_in_user();
    $data["title"] = "Dashboard";
    $data["payment_recap"] = $this->M_dashboard->recap_pembayaran();
    $data["total_revenue"] = $this->M_dashboard->get_total_revenue();
    $data['count_biils'] = $this->M_dashboard->count_bills_last_month();
    $data['count_cs'] = $this->M_dashboard->count_customers();
    $data['latest_cs'] = $this->M_dashboard->get_latest_customers();
    $data['latest_bills'] = $this->M_dashboard->get_lastest_tagihan();

    // Ambil data untuk grafik pendapatan tahun 2025
    $data['revenue_grafik_2025'] = $this->M_dashboard->get_revenue_grafik_by_year(2025);

    // $data["usage_grafik"] = ... (ini sepertinya belum digunakan, bisa diabaikan sementara)

    // 1. DATA UNTUK DIAGRAM DONAT: STATUS TAGIHAN
    // Query ini menghitung jumlah tagihan berdasarkan kolom 'status'
    $bills_status_query = $this->db->select('status, COUNT(id_tagihan) as total')
      ->from('tagihan')
      ->group_by('status')
      ->get()->result();

    // Olah data agar mudah digunakan di JavaScript
    $bills_status_summary = ['PAID' => 0, 'UNPAID' => 0];
    foreach ($bills_status_query as $row) {
      if (isset($bills_status_summary[$row->status])) {
        $bills_status_summary[$row->status] = (int) $row->total;
      }
    }
    $data['bills_status_summary'] = $bills_status_summary;


    // 2. DATA UNTUK DIAGRAM DONAT: DISTRIBUSI DAYA PELANGGAN
    // Query ini menggabungkan tabel pelanggan dan tarif, lalu menghitung jumlah pelanggan per jenis daya
    $power_distribution_query = $this->db->select('T.daya, COUNT(P.id_pelanggan) as total')
      ->from('pelanggan P')
      ->join('tarif T', 'P.id_tarif = T.id_tarif', 'left')
      ->group_by('T.daya')
      ->order_by('T.daya', 'ASC')
      ->get()->result();

    // Olah data menjadi format label dan data untuk Chart.js
    $customer_power_summary = [
      'labels' => [],
      'data' => []
    ];
    foreach ($power_distribution_query as $row) {
      $customer_power_summary['labels'][] = $row->daya . ' VA'; // Menambahkan 'VA' untuk kejelasan
      $customer_power_summary['data'][] = (int) $row->total;
    }
    $data['customer_power_summary'] = $customer_power_summary;

    $this->load->view('layouts/head', $data);
    $this->load->view('layouts/sidebar_admin', $data);
    $this->load->view('layouts/header_admin', $data);
    $this->load->view('admin/v_dashboard', $data);
    $this->load->view('layouts/footer', $data);
    $this->load->view('layouts/end', $data);
  }
}
