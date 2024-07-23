<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/price', 'Home::harga');
$routes->get('/kalkulator', 'Home::kalkulator');
$routes->get('/tagihanlistrik', 'Home::tagihanlistrik');
$routes->get('/admin', 'Home::admin');

$routes->get('/customer/index', 'Customer::index')->setAutoRoute(true);
$routes->addRedirect('/customer', '/customer/index');
