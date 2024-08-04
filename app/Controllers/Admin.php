<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PenggunaanModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    // Declare model variables to be used
    private $_user_model;
    private $penggunaanModel;

    // Constructor to initialize models
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
        $this->penggunaanModel = new PenggunaanModel();
    }

    // Method to display the admin dashboard
    public function index()
    {
        $auth = service('authentication'); // Call authentication service
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login page if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId); // Find user data by ID

        $data = [
            'title' => 'Dashboard Admin | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user // User data to display
        ];
        return view('pages/admin/admin', $data); // Render admin dashboard view
    }

    // Method to display the user table
    public function tableuser()
    {
        $auth = service('authentication');
        $id = $auth->id(); // Get the ID of the logged-in admin

        $data_user = $this->_user_model->getUser($id); // Get user data
        $data = [
            'title' => 'Data Tabel Pelanggan | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user // User data to display
        ];

        return view('pages/admin/tableuser', $data); // Render user table view
    }

    // Method to add a new user
    public function tambahpelanggan()
    {
        $authorize = service('authorization'); // Call authorization service

        $data = [
            'username' => $this->request->getPost('username'), // Get username input
            'namalengkap' => $this->request->getPost('namalengkap'), // Get full name input
            'email' => $this->request->getPost('email'), // Get email input
            'password_hash' => Password::hash($this->request->getPost('password')), // Hash password
            'nomorhp' => $this->request->getPost('nomorhp'), // Get phone number input
            'alamat' => $this->request->getPost('alamat'), // Get address input
            'active' => 1, // Set user as active by default
        ];

        // Insert user and get the user ID
        $userModel = new UserModel();
        $userId = $userModel->insert($data, true); // The second parameter 'true' returns the insert ID

        // Assign default user group
        if ($userId) {
            $authorize->addUserToGroup($userId, config('Auth')->defaultUserGroup);
        }

        return redirect()->to('/tableuser')->with('message', 'User successfully added.'); // Redirect with success message
    }

    // Method to update user data
    public function ubahpelanggan($id)
    {
        $data = [
            'username' => $this->request->getPost('username'), // Get username input
            'namalengkap' => $this->request->getPost('namalengkap'), // Get full name input
            'email' => $this->request->getPost('email'), // Get email input
            'nomorhp' => $this->request->getPost('nomorhp'), // Get phone number input
            'alamat' => $this->request->getPost('alamat'), // Get address input
        ];

        $this->_user_model->update($id, $data); // Update user data
        return redirect()->to('/tableuser')->with('message', 'User successfully updated.'); // Redirect with success message
    }

    // Method to delete a user
    public function deleteUser($id)
    {
        // Check if the user exists
        $user = $this->_user_model->find($id);
        if ($user) {
            $this->_user_model->delete($id); // Delete user
            return redirect()->to('/tableuser')->with('message', 'User successfully deleted.'); // Redirect with success message
        } else {
            return redirect()->to('/tableuser')->with('error', 'Data not found.'); // Redirect with error message
        }
    }

    // Method to display the bill table
    public function tablebayar()
    {
        $data_bayar = $this->penggunaanModel->getBayar(); // Get billing data

        $data = [
            'title' => 'Data Tagihan Pelanggan | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_bayar // Billing data to display
        ];

        return view('pages/admin/tablebayar', $data); // Render bill table view
    }

    // Method to add billing data
    public function tambahbayar()
    {
        $data = [
            'id_users' => $this->request->getPost('id_users'), // Get user ID input
            'bulan' => $this->request->getPost('bulan'), // Get month input
            'tahun' => $this->request->getPost('tahun'), // Get year input
            'meter_awal' => $this->request->getPost('meter_awal'), // Get initial meter input
            'meter_akhir' => $this->request->getPost('meter_akhir'), // Get final meter input
        ];

        $this->penggunaanModel->insert($data); // Insert billing data into the database

        return redirect()->to('/tablebayar')->with('message', 'Billing data successfully added.'); // Redirect with success message
    }

    // Method to update billing data
    public function ubahbayar($id)
    {
        $data = [
            'id_users' => $this->request->getPost('id_users'), // Get user ID input
            'bulan' => $this->request->getPost('bulan'), // Get month input
            'tahun' => $this->request->getPost('tahun'), // Get year input
            'meter_awal' => $this->request->getPost('meter_awal'), // Get initial meter input
            'meter_akhir' => $this->request->getPost('meter_akhir'), // Get final meter input
        ];

        $this->penggunaanModel->update($id, $data); // Update billing data in the database

        return redirect()->to('/tablebayar')->with('message', 'Billing data successfully updated.'); // Redirect with success message
    }

    // Method to delete billing data
    public function deleteBayar($id)
    {
        // Check if the billing data exists
        $data_bayar = $this->penggunaanModel->getBayar();

        if ($data_bayar) {
            $this->penggunaanModel->delete($id); // Delete billing data
            return redirect()->to('/tablebayar')->with('message', 'Billing data successfully deleted.'); // Redirect with success message
        } else {
            return redirect()->to('/tablebayar')->with('error', 'Data not found.'); // Redirect with error message
        }
    }
}
