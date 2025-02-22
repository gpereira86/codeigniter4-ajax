<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->options('/api/users', 'User::index', ['filter' => 'my_cors']);
$routes->get('/api/users', 'User::index', ['filter' => 'my_cors']);
