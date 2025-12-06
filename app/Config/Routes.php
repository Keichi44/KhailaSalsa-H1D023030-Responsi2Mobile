<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/registrasi', 'RegistrasiController::registrasi');
$routes->post('/login', 'LoginController::login');

$routes->group('produk', function ($routes) {
    $routes->post('/', 'ProdukController::create');     // Untuk tambah data
    $routes->get('/', 'ProdukController::list');        // Untuk lihat semua data
    $routes->get('(:segment)', 'ProdukController::detail/$1'); // Untuk lihat 1 data
    $routes->put('(:segment)', 'ProdukController::ubah/$1');   // Untuk edit data
    $routes->delete('(:segment)', 'ProdukController::hapus/$1'); // Untuk hapus data
});

$routes->group('buku', function ($routes) {
    $routes->post('/', 'BukuController::create');
    $routes->get('/', 'BukuController::list');
    $routes->get('(:segment)', 'BukuController::detail/$1');
    $routes->put('(:segment)', 'BukuController::ubah/$1');
    $routes->delete('(:segment)', 'BukuController::hapus/$1');
});