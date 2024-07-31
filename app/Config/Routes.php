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
$routes->post('admin/tambahpelanggan', 'Admin::tambahpelanggan', ['filter' => 'role:admin']);
$routes->post('admin/ubahpelanggan/(:num)', 'Admin::ubahpelanggan/$1', ['filter' => 'role:admin']);

// Route untuk halaman tabel user (dengan filter role admin)
$routes->get('/tableuser', 'Admin::tableuser', ['filter' => 'role:admin']);
$routes->get('/tablebayar', 'Admin::tablebayar', ['filter' => 'role:admin']);
$routes->post('admin/tambahbayar', 'Admin::tambahbayar', ['filter' => 'role:admin']);
$routes->post('admin/ubahbayar/(:num)', 'Admin::ubahbayar/$1', ['filter' => 'role:admin']);



// Route untuk halaman profil pelanggan
$routes->get('/profile', 'Pelanggan::profile', ['filter' => 'role:pelanggan']);
$routes->get('/ubahpassword', 'Pelanggan::ubahpassword', ['filter' => 'role:pelanggan']);
$routes->post('/updatepassword/(:num)', 'Pelanggan::updatepassword/$1', ['filter' => 'role:pelanggan']);

// Route untuk halaman edit profil pelanggan
$routes->get('/editprofile', 'Pelanggan::editprofile', ['filter' => 'role:pelanggan']);
$routes->post('/updateprofile/(:num)', 'Pelanggan::updateprofile/$1', ['filter' => 'role:pelanggan']);

$routes->get('/bayarlistrik', 'Pelanggan::bayarlistrik', ['filter' => 'role:pelanggan']);
// Update route untuk pembayaran listrik
$routes->post('/bayar/(:num)', 'Pelanggan::bayar/$1', ['filter' => 'role:pelanggan']);

// Route untuk halaman tagihan listrik (dengan filter role pelanggan)
$routes->get('/tagihanlistrik', 'Pelanggan::tagihanlistrik', ['filter' => 'role:pelanggan']);
$routes->get('/buktitagihan/(:num)', 'Pelanggan::buktitagihan/$1', ['filter' => 'role:pelanggan']);
