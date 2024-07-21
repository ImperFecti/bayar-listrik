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

    public function harga()
    {
        $data = [
            'title' => 'Harga Listrik Per kWh | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/price', $data);
    }
}
