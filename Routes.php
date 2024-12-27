<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)', 'Home::image/$1');

$routes->group('admin', ['filter' => ['group:admin']], function ($routes) {
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');

    // Daftar Property Routes
    $routes->get('daftar-property', 'AdminController::daftarProperty');
    $routes->get('daftar-property/tambah', 'AdminController::daftarPropertyTambah');
    $routes->post('daftar-property/create', 'AdminController::createProperty');
    
    // Edit Property Routes
    $routes->get('daftar-property/edit/(:num)', 'AdminController::daftarPropertyEdit/$1');
    $routes->post('daftar-property/change/(:num)', 'AdminController::changeProperty/$1');

    // Hapus Property Routes
    $routes->get('daftar-property/hapus/(:num)', 'AdminController::hapusProperty/$1');
    $routes->post('daftar-property/hapus/(:num)', 'AdminController::hapusProperty/$1');

    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');

    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);
