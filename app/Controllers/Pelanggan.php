<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel as MythUserModel;

class Pelanggan extends BaseController
{
    public function profilepelanggan()
    {
        $userModel = new MythUserModel();

        // Dapatkan data pengguna yang sedang login
        $userId = user()->id;
        $user = $userModel->find($userId);

        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE',
            'user' => $user
        ];

        return view('pages/pelanggan/profilepelanggan', $data);
    }

    public function editprofilepelanggan()
    {
        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/pelanggan/editprofilepelanggan', $data);
    }

    public function tagihanlistrik()
    {
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/pelanggan/tagihanlistrik', $data);
    }
}
