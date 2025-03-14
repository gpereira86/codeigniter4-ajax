<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->options('/api/users', 'User::index', ['filter' => 'my_cors']);
$routes->get('/api/users', 'User::index', ['filter' => 'my_cors']);

$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->post('/contact', 'Contact::store', ['as' => 'contact.store']);

$routes->get('/user/create', 'User::create', ['as' => 'user.create']);
$routes->post('/user/store', 'User::store', ['as' => 'user.store']);
