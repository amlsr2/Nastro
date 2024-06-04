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

// Halaman Login
$routes->get('/', 'Auth::login');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login_submit');
$routes->get('/logout', 'Auth::logout');

// Halaman Data Costumer ADMIN
$routes->get('/adm', 'DataCostumer::list');
$routes->get('/adm/insert', 'DataCostumer::insert');
$routes->post('/adm/insert', 'DataCostumer::insert_save');
$routes->get('/adm/(:segment)', 'DataCostumer::update/$1');
$routes->post('/adm/(:segment)', 'DataCostumer::update_save/$1');
$routes->get('/adm/delete/(:segment)', 'DataCostumer::delete/$1');

// Halaman Pesanan Admin
$routes->get('/a-pesanan', 'Pesanan::list');

// Halaman Pricelist Admin
$routes->get('/a-pricelist', 'Pricelist::a_list');
$routes->get('/a-pricelist/insert', 'Pricelist::a_insert');
$routes->post('/a-pricelist/insert', 'Pricelist::a_insert_save');

// Halaman Drive Admin
$routes->get('/a-drive', 'Drive::a_list');
$routes->get('/a-drive/insert', 'Drive::a_insert');
$routes->post('/a-drive/insert', 'Drive::a_insert_save');

// Halaman Chart Admin
$routes->get('/chart_bar', 'Chart::bar');
$routes->get('/chart_line', 'Chart::line');

// $routes->get('/apricelist/pesan', 'AdminPricelist::pesan');

$routes->get('/client/pdf', 'DataCostumer::export_pdf');









// Halaman Dashboard Client
$routes->get('/dashboard', 'Dashboard::list');

// Halaman Pricelist Client
$routes->get('/c-pricelist', 'Pricelist::c_list');
$routes->get('/pricelist/pesan', 'Pricelist::pesan');
$routes->post('/pricelist/pesan', 'Pricelist::pesan_save');


// Halaman Drive Client
$routes->get('/c-drive', 'Drive::c_list');

// Halaman Cara Order Client
$routes->get('/c-caraorder', 'CaraOrder::list');

// Halaman About Client
$routes->get('/about', 'About::list');




$routes->get('/pelanggan/add', 'Admin::tambah');
$routes->post('/pelanggan/add', 'Admin::store');
$routes->get('/pelanggan/edit/(:any)', 'Admin::edit/$1');
$routes->post('/pelanggan/edit/(:any)', 'Admin::update/$1');
$routes->get("/pelanggan/delete/(:any)", 'Admin::delete/$1');
$routes->get("/pelanggan/grafik", 'Admin::grafik');
$routes->get("/pelanggan/pdf", 'Admin::fpdf');





//

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
