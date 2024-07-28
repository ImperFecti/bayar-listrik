<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PenggunaanModel;
use Myth\Auth\Models\UserModel;
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
