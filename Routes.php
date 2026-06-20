<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Homepage default
$routes->get('/', 'Home::index');

// AKTIFKAN AUTO ROUTE (biar URL langsung kebaca)
$routes->setAutoRoute(true);

// Route manual artikel (biar pasti aman)
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/admin', 'Artikel::admin_index');
$routes->post('/artikel/simpan', 'Artikel::simpan');
$routes->get('/artikel/detail/(:num)', 'Artikel::detail/$1');
$routes->get('/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('/artikel/update/(:num)', 'Artikel::update/$1');
$routes->get('/artikel/hapus/(:num)', 'Artikel::hapus/$1');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/admin', 'Artikel::admin_index');

$routes->get('/artikel/tambah', 'Artikel::tambah');
$routes->post('/artikel/simpan', 'Artikel::simpan');

$routes->get('/artikel/edit/(:num)', 'Artikel::edit/$1');
$routes->post('/artikel/update/(:num)', 'Artikel::update/$1');

$routes->get('/artikel/hapus/(:num)', 'Artikel::hapus/$1');
$routes->get('/artikel/detail/(:num)', 'Artikel::detail/$1');
$routes->resource('post');
$routes->post('api/login', 'UserController::login');