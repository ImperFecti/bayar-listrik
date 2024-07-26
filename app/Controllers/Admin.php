<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PenggunaanModel;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $_user_model;
    private $penggunaanModel;

    // Constructor to initialize the PelangganModel
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
        $this->penggunaanModel = new PenggunaanModel();
    }

    public function index()
    {
        $data_user = $this->_user_model->getUser();

        $data = [
            'title' => 'Data Pelanggan | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];
        return view('pages/admin/admin', $data);
    }

    public function tableuser()
    {
        $data_user = $this->_user_model->getUser();
        $data = [
            'title' => 'Data Pelanggan | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];

        return view('pages/admin/tableuser', $data);
    }

    public function tablebayar()
    {
        $data_bayar = $this->penggunaanModel->getBayar();

        $data = [
            'title' => 'Data Pembayaran | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_bayar
        ];

        return view('pages/admin/tablebayar', $data);
    }
}
