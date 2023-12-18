<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
// $routes->get('/users', 'Users::index');
// $routes->get('/users/tambah', 'Users::tambah');
// $routes->post('/users/simpan', 'Users::simpan');
// $routes->get('/users/ubah/$id', 'Users::ubah');

$routes->setAutoRoute(true);
