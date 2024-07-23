<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/home', $data);
    }

    public function kalkulator()
    {
        $data = [
            'title' => 'Kalkulator | HITUNG PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/kalkulator', $data);
    }

    public function harga()
    {
        $data = [
            'title' => 'Tarif | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/price', $data);
    }

    public function tagihanlistrik()
    {
        $data = [
            'title' => 'Tagihan Listrik | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/tagihanlistrik', $data);
    }

    public function admin()
    {
        $data = [
            'title' => 'Admin | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/admin/admin', $data);
    }
}
