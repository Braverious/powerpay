<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_customer');
        $this->load->model('M_dashboard');
    }

    public function index()
    {
        $data['judul'] = 'PowerPay';
        // $data = [
        //     'limbah' => $this->LimbahModel->getLimbah(),
        //     'bp' => $this->LimbahModel->getLimbahById(1),
        //     'ka' => $this->LimbahModel->getLimbahById(2),
        //     'kk' => $this->LimbahModel->getLimbahById(3)
        // ];
        // $data['total'] = $data['bp']['total_sampah'] + $data['ka']['total_sampah'] + $data['kk']['total_sampah'];

        $this->load->view('home', $data);
    }
}

//a

// xdebug_info();
