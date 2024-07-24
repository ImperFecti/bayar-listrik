<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/price', 'Home::harga');
$routes->get('/kalkulator', 'Home::kalkulator');
$routes->get('/admin', 'Home::admin');

$routes->get('/tagihanlistrik', 'Pelanggan::tagihanlistrik');
$routes->get('/profilepelanggan', 'Pelanggan::profilepelanggan');
$routes->get('/editprofilepelanggan', 'Pelanggan::editprofilepelanggan');

$routes->get('/customer/index', 'Customer::index')->setAutoRoute(true);
$routes->addRedirect('/customer', '/customer/index');
