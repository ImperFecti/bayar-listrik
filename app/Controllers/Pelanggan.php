<?php

namespace App\Controllers;

// Use necessary models and libraries
use App\Models\PenggunaanModel;
use App\Models\PelangganModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

class Pelanggan extends BaseController
{
    // Declare model variables
    private $_user_model;
    private $penggunaanModel;

    // Constructor to initialize the PelangganModel and PenggunaanModel
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
        $this->penggunaanModel = new PenggunaanModel();
    }

    // Method to display the profile of the logged-in customer
    public function profile()
    {
        $auth = service('authentication'); // Call authentication service
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $data_user = $this->_user_model->getUserProfile($userId); // Get user profile data

        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user // User data to display
        ];

        // Return the view with the user's profile data
        return view('pages/pelanggan/profile', $data);
    }

    // Method to display the edit profile page
    public function editprofile()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $data_user = $this->_user_model->find($userId); // Get user data

        $tarifModel = new \App\Models\TarifModel();
        $tarif = $tarifModel->findAll(); // Get all tariff data

        $data = [
            'title' => 'Edit Profile | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user, // User data to display
            'tarif' => $tarif // Tariff data to display
        ];

        return view('pages/pelanggan/editprofile', $data); // Render edit profile view
    }

    // Method to update the user profile
    public function updateprofile($id)
    {
        // Save updated profile data
        $this->_user_model->save([
            'id' => $id, // User ID
            'username' => $this->request->getPost('username'), // Get updated username
            'namalengkap' => $this->request->getPost('namalengkap'), // Get updated full name
            'email' => $this->request->getPost('email'), // Get updated email
            'nomorhp' => $this->request->getPost('nomorhp'), // Get updated phone number
            'alamat' => $this->request->getPost('alamat'), // Get updated address
            'nomorkwh' => $this->request->getPost('nomorkwh'), // Get updated KWH number
            'id_tarif' => $this->request->getPost('id_tarif') // Get updated tariff ID
        ]);

        session()->setFlashdata('success', 'Profile updated successfully'); // Set success message
        return redirect()->to('/profile'); // Redirect to profile page
    }

    // Method to display the change password page
    public function ubahpassword()
    {
        $data_user = $this->_user_model->getUser(user_id()); // Get the authenticated user's data

        $data = [
            'title' => 'Ubah Password | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user // User data to display
        ];

        return view('pages/pelanggan/ubahpassword', $data); // Render change password view
    }

    // Method to update the user's password
    public function updatepassword($id)
    {
        // Set validation rules
        $rules = [
            'password' => 'required', // Current password is required
            'new_password' => 'required', // New password is required
            'confirm_password' => 'required|matches[new_password]' // Confirmation must match new password
        ];

        // Validate input data
        if (!$this->validate($rules)) {
            return redirect()->to('/ubahpassword')->withInput()->with('validation', $this->validator); // Redirect with validation errors
        }

        $userModel = new UserModel();
        $user = $userModel->find($id); // Find user by ID
        $currentPassword = $this->request->getVar('password'); // Get current password input

        // Verify current password
        if (!Password::verify($currentPassword, $user->password_hash)) {
            return redirect()->to('/ubahpassword')->with('error', 'Incorrect old password'); // Redirect with error message
        }

        // Update password
        $newPassword = Password::hash($this->request->getVar('new_password')); // Hash new password
        $userModel->update($id, ['password_hash' => $newPassword]); // Update password in database

        session()->setFlashdata('success', 'Password successfully changed'); // Set success message
        return redirect()->to('/ubahpassword'); // Redirect to change password page
    }

    // Method to display the electricity bill page
    public function tagihanlistrik()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID

        // Get billing data for the user from the model
        $tagihan = $this->penggunaanModel->getTagihanByUserId($userId);

        // Prepare data to send to the view
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE', // Page title
            'tagihan' => $tagihan // Billing data to display
        ];

        // Return the view for the electricity bill
        return view('pages/pelanggan/tagihanlistrik', $data);
    }

    // Method to display the billing receipt
    public function buktitagihan($id)
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $tagihan = $this->penggunaanModel->getBayar($id); // Get billing data by ID

        // Check if the billing data belongs to the authenticated user
        if ($tagihan->id_users != $userId) {
            return redirect()->to('/tagihanlistrik')->with('error', 'Access denied.'); // Redirect with error message
        }

        $userModel = new UserModel();
        $data_user = $userModel->find($tagihan->id_users); // Find user data by billing user ID

        $data = [
            'title' => 'Bukti Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE', // Page title
            'tagihan' => $tagihan, // Billing data to display
            'result' => $data_user // User data to display
        ];

        return view('pages/pelanggan/buktitagihan', $data); // Render billing receipt view
    }

    // Method to display the electricity bill payment page
    public function bayarlistrik()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId); // Find user data by ID

        $data = [
            'title' => 'Bayar Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE', // Page title
            'result' => $data_user, // User data to display
        ];

        return view('pages/pelanggan/bayar', $data); // Render electricity bill payment view
    }

    // Method to process the payment of the electricity bill
    public function bayar($id)
    {
        // Save payment data
        $this->penggunaanModel->save([
            'id_users' => $id, // User ID
            'bulan' => $this->request->getPost('bulan'), // Get month input
            'tahun' => $this->request->getPost('tahun'), // Get year input
            'meter_awal' => $this->request->getPost('meter_awal'), // Get initial meter input
            'meter_akhir' => $this->request->getPost('meter_akhir'), // Get final meter input
        ]);

        return redirect()->to('/tagihanlistrik'); // Redirect to the electricity bill page
    }
}
