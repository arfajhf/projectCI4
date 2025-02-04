<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'WelcomController::index');

$routes->group('/', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    $routes->get('/login', 'Auth::index');
    $routes->post('/login', 'Auth::login');
    $routes->get('/logout', 'Auth::logout', ['as' => 'logout']);

    $routes->get('/unauthorized', 'ErrorController::unauthorized');
});

$routes->get('/dashboard', 'Home::index', ['as' => 'dashboard']);

$routes->group('/', function ($routes) {
    $routes->group('/', ['filters' => 'role:admin'], function ($routes) {
        $routes->get('/admin', 'AdminController::index');
        $routes->get('/penduduk', 'AdminController::penduduk');
    });
});
