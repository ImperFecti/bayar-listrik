<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PenggunaanModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    private $_user_model;
    private $penggunaanModel;

    // Constructor to initialize the models
    public function __construct()
    {
        $this->_user_model = new PelangganModel();
        $this->penggunaanModel = new PenggunaanModel();
    }

    // Method to display the admin dashboard
    public function index()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID
        $userModel = new UserModel();
        $data_user = $userModel->find($userId);

        $data = [
            'title' => 'Dashboard Admin | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];
        return view('pages/admin/admin', $data);
    }

    // Method to display the user table
    public function tableuser()
    {
        $data_user = $this->_user_model->getUser();
        $data = [
            'title' => 'Data Tabel Pelanggan | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];

        return view('pages/admin/tableuser', $data);
    }

    // Method to add a new user
    public function tambahpelanggan()
    {
        $authorize = service('authorization');

        $data = [
            'username' => $this->request->getPost('username'),
            'namalengkap' => $this->request->getPost('namalengkap'),
            'email' => $this->request->getPost('email'),
            'password_hash' => Password::hash($this->request->getPost('password')),
            'nomorhp' => $this->request->getPost('nomorhp'),
            'alamat' => $this->request->getPost('alamat'),
            'active' => 1, // Assuming you want the user to be active by default
        ];

        // Insert user and get the user ID
        $userModel = new UserModel();
        $userId = $userModel->insert($data, true); // The second parameter 'true' returns the insert ID

        // Assign default user group
        if ($userId) {
            $authorize->addUserToGroup($userId, config('Auth')->defaultUserGroup);
        }

        return redirect()->to('/tableuser')->with('message', 'User berhasil ditambahkan.');
    }


    public function ubahpelanggan($id)
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'namalengkap' => $this->request->getPost('namalengkap'),
            'email' => $this->request->getPost('email'),
            'nomorhp' => $this->request->getPost('nomorhp'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $this->_user_model->update($id, $data);
        return redirect()->to('/tableuser')->with('message', 'User berhasil diubah.');
    }

    // Method to delete a user
    public function deleteUser($id)
    {
        // Check if the user exists
        $user = $this->_user_model->find($id);
        if ($user) {
            $this->_user_model->delete($id);
            return redirect()->to('/tableuser')->with('message', 'User berhasil dihapus.');
        } else {
            return redirect()->to('/tableuser')->with('error', 'Data tidak ditemukan.');
        }
    }

    // Method to display the bill table
    public function tablebayar()
    {
        $data_bayar = $this->penggunaanModel->getBayar();

        $data = [
            'title' => 'Data Tagihan Pelanggan | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_bayar
        ];

        return view('pages/admin/tablebayar', $data);
    }

    public function tambahbayar()
    {
        $data = [
            'id_users' => $this->request->getPost('id_users'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'meter_awal' => $this->request->getPost('meter_awal'),
            'meter_akhir' => $this->request->getPost('meter_akhir'),
        ];

        $this->penggunaanModel->insert($data);

        return redirect()->to('/tablebayar')->with('message', 'Data tagihan berhasil ditambahkan.');
    }

    public function ubahbayar($id)
    {
        $data = [
            'id_users' => $this->request->getPost('id_users'),
            'bulan' => $this->request->getPost('bulan'),
            'tahun' => $this->request->getPost('tahun'),
            'meter_awal' => $this->request->getPost('meter_awal'),
            'meter_akhir' => $this->request->getPost('meter_akhir'),
        ];

        $this->penggunaanModel->update($id, $data);

        return redirect()->to('/tablebayar')->with('message', 'Data tagihan berhasil diubah.');
    }


    // Method to delete a bill
    public function deleteBayar($id)
    {
        // Check if the bill exists
        $data_bayar = $this->penggunaanModel->getBayar();

        if ($data_bayar) {
            $this->penggunaanModel->delete($id);
            return redirect()->to('/tablebayar')->with('message', 'Data tagihan berhasil dihapus.');
        } else {
            return redirect()->to('/tablebayar')->with('error', 'Data tidak ditemukan.');
        }
    }
}
