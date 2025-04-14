<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/company', 'Pages::company');
$routes->get('/team', 'Pages::team');
$routes->get('/careers', 'Pages::careers');
