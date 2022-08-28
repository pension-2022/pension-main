<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$pages = [
    // Begin Home
    [
        'method' => 'get',
        'link' => '/',
        'controller' => 'Pages::index'
    ],
    // Begin Detail
    [
        'method' => 'get',
        'link' => '/article/(:any)',
        'controller' => 'Article::article/$1'
    ],
    // Begin Category
    [
        'method' => 'get',
        'link' => '/category/(:num)',
        'controller' => 'Pages::category/$1'
    ],
    // Begin Signin
    [
        'method' => 'get',
        'link' => '/sign-in',
        'controller' => 'Pages::sign_in'
    ],
    // Begin Signup
    [
        'method' => 'get',
        'link' => '/sign-up',
        'controller' => 'Pages::sign_up'
    ],
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/register',
        'controller' => 'PostController::register_users'
    ],  
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/sign-in',
        'controller' => 'PostController::login'
    ],  
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/sign-out',
        'controller' => 'PostController::logout'
    ],   
    // Begin Add Articles
    [
        'method' => 'post',
        'link' => '/new-comment/(:num)',
        'controller' => 'PostController::newcomment/$1'
    ], 
];

foreach ($pages as $p) {
    if ($p['method'] == 'get') {
        $routes->get($p['link'], $p['controller']);
    }

    if ($p['method'] == 'post') {
        $routes->post($p['link'], $p['controller']);
    }
}

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}