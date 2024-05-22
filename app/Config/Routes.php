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
$routes->get('/tentangkami', 'Tentangkami::tentangkami');
$routes->get('/subkategori', 'Home::subkategori');
$routes->get('/privacypolicy', 'Home::privacypolicy');
$routes->get('/termscondition', 'Home::termscondition');

// app/Config/Routes.php
// $routes->get('/subkategori/(:num)', 'Home::subkategori/$1');


