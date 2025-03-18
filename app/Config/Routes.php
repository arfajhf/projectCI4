<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Router;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'WelcomController::index');

$routes->group('/', ['namespace' => 'App\Controllers\Auth'], function ($routes) {
    $routes->get('/login', 'Auth::index');
    $routes->post('/login', 'Auth::login');
    $routes->get('/registrasi', 'Auth::register');
    $routes->post('/regis', 'Auth::store');
    $routes->get('/logout', 'Auth::logout', ['as' => 'logout']);

    $routes->get('/unauthorized', 'ErrorController::unauthorized');
});

$routes->get('/dashboard', 'Home::index', ['as' => 'dashboard']);

$routes->group('/', function ($routes) {
    $routes->group('/', ['filters' => 'role:admin'], function ($routes) {
        // Front office
        $routes->get('/admin', 'AdminController::index');
        $routes->get('/admin/create', 'AdminController::create');
        $routes->post('/admin/store', 'AdminController::storeFo');
        $routes->post('/admin/delete/(:num)', 'AdminController::deleteFo/$1');
        $routes->get('/admin/view/(:num)', 'AdminController::view/$1');

        // penduduk
        $routes->get('/penduduk', 'AdminController::penduduk');
        $routes->get('/penduduk/view/(:num)', 'AdminController::viewPenduduk/$1');

        // kategori
        $routes->get('/kategori', 'KategoriController::index');
        $routes->get('/kategori/create', 'KategoriController::create');
        $routes->post('/kategori/store', 'KategoriController::store');
    });
});
