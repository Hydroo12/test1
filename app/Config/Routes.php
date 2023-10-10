<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Latihan1::index');

$routes->get("/hasil/(:num)/(:num)", "Latihan1::add/$1/$2");