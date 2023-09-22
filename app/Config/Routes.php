<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'MainController::index');
$routes->get('/add', 'MainController::add');
$routes->post('/save', 'MainController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
$routes->get('/edit/(:any)', 'MainController::edit/$1');
$routes->post('/update/(:any)', 'MainController::update/$1');
$routes->get('/category', 'MainController::create_category');
$routes->post('/save_cat', 'MainController::save_cat');
$routes->get('/delete_cat/(:any)', 'MainController::delete_cat/$1');