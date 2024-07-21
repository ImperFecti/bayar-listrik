<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/price', 'Home::harga');
$routes->get('/kalkulator', 'Home::kalkulator');
