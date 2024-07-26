<?php

namespace App\Controllers;

// Use necessary models and libraries

use App\Models\PenggunaanModel;
use App\Models\PelangganModel;
use Myth\Auth\Models\UserModel;

class Pelanggan extends BaseController
{
    private $_user_model;
    private $penggunaanModel;

    // Constructor to initialize the PelangganModel
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
        $this->penggunaanModel = new PenggunaanModel();
    }

    // Method to display the profile of the logged-in customer
    public function profile()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId);
        // dd($data_user);
        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];

        // Return the view with the user's profile data
        return view('pages/pelanggan/profile', $data);
    }

    // Method to display the edit profile page
    public function editprofile()
    {
        $data_user = $this->_user_model->getUser(user_id());

        // dd($data_user);

        $data = [
            'title' => 'Edit Profile | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];


        // Return the view for editing the profile
        return view('pages/pelanggan/editprofile', $data);
    }

    public function updateprofile($id)
    {
        $this->_user_model->save([
            'id' => $id,
            'username' => $this->request->getPost('username'),
            'namalengkap' => $this->request->getPost('namalengkap'),
            'email' => $this->request->getPost('email'),
            'nomorhp' => $this->request->getPost('nomorhp'),
            'alamat' => $this->request->getPost('alamat'),
            'nomorkwh' => $this->request->getPost('nomorkwh')
        ]);

        session()->setFlashdata('success', 'Profile updated successfully');
        return redirect()->to('/profile');
    }


    // Method to display the electricity bill page
    public function tagihanlistrik()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId);

        // Prepare data for the view
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];
        // Return the view for the electricity bill
        return view('pages/pelanggan/tagihanlistrik', $data);
    }

    public function bayarlistrik()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId);

        $data = [
            'title' => 'Bayar Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user,
        ];

        return view('pages/pelanggan/bayar', $data);
    }

    public function bayar($id)
    {
        $this->penggunaanModel->save([
            'id_users' => $id,
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'meter_awal' => $this->request->getPost('meter_awal'),
            'meter_akhir' => $this->request->getPost('meter_akhir'),
        ]);

        return redirect()->to('/tagihanlistrik');
    }
}
