<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Publik');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Publik::index');
$routes->get('/Home', 'Home::index', ['filter' => 'auth']);
$routes->get('Home/', 'Home::index', ['filter' => 'auth']);
$routes->get('Home/admin', 'Home::admin', ['filter' => 'auth']);
$routes->get('Home/pricing', 'Home::pricing', ['filter' => 'auth']);
$routes->get('Home/custom', 'Home::custom', ['filter' => 'auth']);
$routes->get('Home/checkout', 'Home::checkout', ['filter' => 'auth']);
$routes->get('Home/transaksi', 'Home::transaksi', ['filter' => 'auth']);
$routes->get('Home/help', 'Home::help', ['filter' => 'auth']);

//$routes->group('Home', ['filter' => 'auth'], function ($routes) {
//	$routes->get('/Home', 'Home::index');
//	$routes->get('Home/help', 'Home::help');
//	$routes->get('Home/checkout', 'Home::checkout');
//	$routes->get('Home/transaksi', 'Home::transaksi');
//	$routes->get('Home/custom', 'Home::custom');
//	$routes->get('Home/pricing', 'Home::pricing');
// $routes->post('products/store', 'Products::store');
//});

/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
