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
$routes->get('/admin', 'Admin::profileadmin', ['filter' => 'role:admin']);

// Route untuk halaman tabel user (dengan filter role admin)
$routes->get('/tableuser', 'Pelanggan::index', ['filter' => 'role:admin']);

// Route contoh yang di-comment
// $routes->get('/example', 'Pelanggan::index');

// Route untuk halaman tagihan listrik (dengan filter role pelanggan)
$routes->get('/tagihanlistrik', 'Pelanggan::tagihanlistrik', ['filter' => 'role:pelanggan']);

// Route untuk halaman profil pelanggan
$routes->get('/profilepelanggan', 'Pelanggan::profilepelanggan');

// Route untuk halaman edit profil pelanggan
$routes->get('/editprofilepelanggan', 'Pelanggan::editprofilepelanggan');

// Route untuk halaman profil pelanggan (duplikat, bisa dihapus jika tidak perlu)
// $routes->get('/profilepelanggan', 'Pelanggan::profilepelanggan');

// Route untuk halaman edit profil pelanggan dengan metode GET dan POST
$routes->match(['get', 'post'], '/editprofilepelanggan', 'Pelanggan::editprofilepelanggan');

// Route untuk halaman index pengguna
$routes->get('/users/index', 'Users::index')->setAutoRoute(true);

// Redirect dari /users ke /users/index
$routes->addRedirect('/users', '/users/index');
