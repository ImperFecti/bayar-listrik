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
            'title' => 'Kalkulator | PEMBAYARAN LISTRIK ONLINE'
        ];
        return view('pages/kalkulator', $data);
    }
}
