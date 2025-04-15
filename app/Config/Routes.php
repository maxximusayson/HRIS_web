<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about/company', 'Pages::company');
$routes->get('/about/team', 'Pages::team');
$routes->get('/about/careers', 'Pages::careers');


$routes->get('/resources', 'Resources::index');


