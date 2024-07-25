<?php

namespace App\Controllers;

// Use necessary models and libraries
use App\Models\PelangganModel;
use Myth\Auth\Models\UserModel as MythUserModel;

class Pelanggan extends BaseController
{
    private $_user_model;

    // Constructor to initialize the PelangganModel
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
    }

    // Method to display the list of customers
    public function index()
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

    // Method to display the profile of the logged-in customer
    public function profilepelanggan()
    {
        $userModel = new MythUserModel();

        // Get the currently logged-in user's ID
        $userId = user()->id;
        // Fetch user data from the model
        $user = $userModel->find($userId);

        // Prepare data for the view
        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE',
            'user' => $user
        ];

        // Return the view with the user's profile data
        return view('pages/pelanggan/profilepelanggan', $data);
    }

    // Method to display the edit profile page
    public function editprofilepelanggan()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE'
        ];
        // Return the view for editing the profile
        return view('pages/pelanggan/editprofilepelanggan', $data);
    }

    // Method to display the electricity bill page
    public function tagihanlistrik()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE'
        ];
        // Return the view for the electricity bill
        return view('pages/pelanggan/tagihanlistrik', $data);
    }
}
