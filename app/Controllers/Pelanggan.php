<?php

namespace App\Controllers;

class Pelanggan extends BaseController
{
    public function profilepelanggan()
    {
        $data = [
            'title' => 'Profile | PEMBAYARAN LISTRIK ONLINE'
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
