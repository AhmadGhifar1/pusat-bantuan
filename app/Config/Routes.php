<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::beranda');
$routes->get('/artikel', 'Home::beranda');

$routes->get('/kategori', 'Home::kategori');

$routes->get('/tiket', 'Home::tiket'); 
$routes->post('/tiket/store', 'Tiket::store');


$routes->get('/detailkat', 'Home::detailkat');


