<<<<<<< HEAD
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
=======
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
>>>>>>> 5b5a62520b565197c76a679bd226b41beeeeb20d
$routes->match(['get', 'post'], '/tiket', 'Home::tiket');