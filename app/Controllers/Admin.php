<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $_user_model;

    // Constructor to initialize the PelangganModel
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
    }

    public function index()
    {
        $user = user();
        return view('pages/admin/admin',);
    }

    public function tableuser()
    {
        // Fetch all customer data from the model
        $data_user = $this->_user_model->findAll();

        // Prepare data for the view
        $data = [
            'title' => 'Data Pelanggan | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];

        // Return the view with the customer data
        return view('pages/admin/tableuser', $data);
    }
}
