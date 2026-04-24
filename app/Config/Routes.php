<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/venue', 'Home::venue');
$routes->get('/masuk', 'Home::masuk');
$routes->get('/detail', 'Home::detail');
$routes->get('/pembayaran', 'Home::pembayaran');
$routes->match(['get', 'post'], '/tiket', 'Home::tiket');