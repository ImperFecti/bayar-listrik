<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route untuk halaman utama
$routes->get('/', 'Home::index');

// Route untuk halaman harga
$routes->get('/price', 'Home::harga');

// Route untuk halaman kalkulator
$routes->get('/kalkulator', 'Home::kalkulator');



// Route untuk halaman admin (dengan filter role admin)
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);

// Route untuk halaman tabel user (dengan filter role admin)
$routes->get('/tableuser', 'Admin::tableuser', ['filter' => 'role:admin']);



// Route contoh yang di-comment
// $routes->get('/example', 'Pelanggan::index');



// Route untuk halaman profil pelanggan
$routes->get('/profile', 'Pelanggan::profile');

// Route untuk halaman edit profil pelanggan
$routes->get('/editprofilepelanggan', 'Pelanggan::editprofile');

// Route untuk halaman edit profil pelanggan dengan metode GET dan POST
$routes->match(['get', 'post'], '/editprofilepelanggan', 'Pelanggan::editprofile');

// Route untuk halaman tagihan listrik (dengan filter role pelanggan)
$routes->get('/tagihanlistrik', 'Pelanggan::tagihanlistrik', ['filter' => 'role:pelanggan']);
