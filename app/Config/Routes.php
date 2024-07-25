<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/price', 'Home::harga');
$routes->get('/kalkulator', 'Home::kalkulator');

$routes->get('/admin', 'Home::admin', ['filter' => 'role:admin']);
$routes->get('/tableuser', 'Pelanggan::index', ['filter' => 'role:admin']);

$routes->get('/tagihanlistrik', 'Pelanggan::tagihanlistrik');
$routes->get('/profilepelanggan', 'Pelanggan::profilepelanggan');
$routes->get('/editprofilepelanggan', 'Pelanggan::editprofilepelanggan');

$routes->get('/profilepelanggan', 'Pelanggan::profilepelanggan');
$routes->match(['get', 'post'], '/editprofilepelanggan', 'Pelanggan::editprofilepelanggan');

$routes->get('/users/index', 'Users::index')->setAutoRoute(true);
$routes->addRedirect('/users', '/users/index');
