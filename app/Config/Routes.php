<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Home::home_login');

$routes->get('loginhome','Home::after_login');

$routes->get('/register','Home::home_register');

$routes->post('/loginn','AuthController::login');

$routes->post('/register','AuthController::register');

$routes->get('/logout','AuthController::logout');

$routes->post('/search','UsersController::searchUsers');