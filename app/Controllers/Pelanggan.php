<?php

namespace App\Controllers;

// Use necessary models and libraries

use App\Models\PenggunaanModel;
use App\Models\PelangganModel;
use Myth\Auth\Models\UserModel;
use Myth\Auth\Password;

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
        $data_user = $this->_user_model->getUser($userId);

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
        $tarifModel = new \App\Models\TarifModel();
        $tarif = $tarifModel->findAll();

        $data = [
            'title' => 'Edit Profile | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user,
            'tarif' => $tarif
        ];

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
            'nomorkwh' => $this->request->getPost('nomorkwh'),
            'id_tarif' => $this->request->getPost('id_tarif')
        ]);

        session()->setFlashdata('success', 'Profile updated successfully');
        return redirect()->to('/profile');
    }


    public function ubahpassword()
    {
        $data_user = $this->_user_model->getUser(user_id());

        $data = [
            'title' => 'Ubah Password | PEMBAYARAN LISTRIK ONLINE',
            'result' => $data_user
        ];

        return view('pages/pelanggan/ubahpassword', $data);
    }

    public function updatepassword($id)
    {

        $rules = [
            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|matches[new_password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/ubahpassword')->withInput();
        }

        $userModel = new UserModel();
        $user = $userModel->find($id);
        $currentPassword = $this->request->getVar('password');

        if (!Password::verify($currentPassword, $user->password_hash)) {
            return redirect()->to('/ubahpassword')->with('error', 'Password lama salah');
        }

        // Update password
        $newPassword = Password::hash($this->request->getVar('new_password'));
        $userModel->update($id, ['password_hash' => $newPassword]);

        session()->setFlashdata('success', 'Password updated successfully');
        return redirect()->to('/ubahpassword');
    }


    // Method to display the electricity bill page
    public function tagihanlistrik()
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID

        // Ambil data tagihan dari model
        $tagihan = $this->penggunaanModel->getTagihanByUserId($userId);

        // Siapkan data untuk dikirim ke view
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE',
            'tagihan' => $tagihan
        ];

        // Return the view for the electricity bill
        return view('pages/pelanggan/tagihanlistrik', $data);
    }


    public function buktitagihan($id)
    {
        $auth = service('authentication');
        if (!$auth->check()) {
            return redirect()->to('/login'); // Redirect to login if not authenticated
        }

        $userId = $auth->id(); // Get the authenticated user's ID

        // Ambil data tagihan berdasarkan ID tagihan
        $tagihan = $this->penggunaanModel->find($id);

        if ($tagihan['id_users'] != $userId) {
            return redirect()->to('/tagihanlistrik')->with('error', 'Access denied.');
        }

        $userModel = new UserModel();
        $data_user = $userModel->find($tagihan['id_users']);

        // Siapkan data untuk dikirim ke view
        $data = [
            'title' => 'Bukti Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE',
            'tagihan' => $tagihan,
            'result' => $data_user
        ];

        // dd($tagihan);

        // Return the view for the electricity bill
        return view('pages/pelanggan/buktitagihan', $data);
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
