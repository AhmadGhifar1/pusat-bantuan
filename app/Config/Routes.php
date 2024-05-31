<?php

use App\Controllers\Kategori;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Home::beranda');


// artikel
$routes->get('/artikel', 'Home::beranda');
$routes->get('/artikeldetail/(:num)/(:num)', 'Home::artikeldetail/$1/$2');
$routes->get('/detailartikel2', 'Home::detailartikel2');
$routes->get('/detailartikel3', 'Home::detailartikel3');

// Kategori
$routes->get('/kategori', 'Home::kategori');
$routes->get('/subkategori', 'Home::subkategori');
$routes->get('/subkategori/(:num)', 'Home::subkategori/$1');

// tiket
$routes->get('/tiket', 'Home::tiket'); 
$routes->post('/tiket/store', 'Tiket::store');

$routes->get('/tentangkami', 'Tentangkami::tentangkami');
$routes->get('/privacypolicy', 'Home::privacypolicy');
$routes->get('/termscondition', 'Home::termscondition');

// app/Config/Routes.php
// $routes->get('/subkategori/(:num)', 'Home::subkategori/$1');


