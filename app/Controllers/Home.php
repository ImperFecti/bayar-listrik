<?php

namespace App\Controllers;

// Home class extending BaseController
class Home extends BaseController
{
    // Method to display the home page
    public function index()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Home | PEMBAYARAN LISTRIK ONLINE'
        ];
        // Return the home view with the data
        return view('pages/home', $data);
    }

    // Method to display the calculator page
    public function kalkulator()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Kalkulator | HITUNG PEMBAYARAN LISTRIK ONLINE'
        ];
        // Return the calculator view with the data
        return view('pages/kalkulator', $data);
    }

    // Method to display the price page
    public function harga()
    {
        // Prepare data for the view
        $data = [
            'title' => 'Tarif | PEMBAYARAN LISTRIK ONLINE'
        ];
        // Return the price view with the data
        return view('pages/price', $data);
    }
}
