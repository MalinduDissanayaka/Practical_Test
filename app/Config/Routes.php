<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'ProductController::index');
$routes->get('ProductController/create', 'ProductController::create');
$routes->post('ProductController/store', 'ProductController::store');
$routes->get('ProductController/edit/(:num)', 'ProductController::edit/$1');
$routes->post('ProductController/update/(:num)', 'ProductController::update/$1');
$routes->get('ProductController/delete/(:num)', 'ProductController::delete/$1');
