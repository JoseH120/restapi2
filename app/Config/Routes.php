<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('user/login', 'User::login');
$routes->post('user/register', 'User::register');

// $routes->resource('user');

$routes->resource('blog');
