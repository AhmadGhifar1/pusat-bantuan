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
$routes->post('/tiket/store', 'Home::store');
$routes->get('/tentangkami', 'Tentangkami::tentangkami');
$routes->get('/detailkat', 'Home::detailkat');


