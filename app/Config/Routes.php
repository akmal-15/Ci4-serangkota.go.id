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
$routes->setDefaultController('Home');
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

// ====================== W E B S I T E ==================================== //

$routes->get('/', 'Website\Home::index', ['as' => 'home']);
$routes->get('/album', 'Website\GalleryWeb::index', ['as' => 'gallery']);
$routes->get('/album/(:segment)', 'Website\GalleryWeb::details/$1');



// ====================== A D M I N ======================================== //

$routes->get('/admin', 'Login\Login::index', ['as' => 'index-login']);
$routes->post('/admin/login', 'Login\Login::in');

// ADMIN BERITA
$routes->get('/admin/berita', 'Berita::index');
$routes->get('/admin/berita/create', 'Berita::create', ['as' => 'create-berita']);

// ADMIN GALLERY
$routes->get('/admin/gallery', 'Admin\GalleryAdmin::index', ['as' => 'index-gallery']);
$routes->get('/admin/gallery/create', 'Admin\GalleryAdmin::create', ['as' => 'create-gallery']);
$routes->get('/admin/gallery/update/(:num)', 'Admin\GalleryAdmin::update/$1', ['as' => 'update-gallery']);
$routes->post('/admin/gallery/update', 'Admin\GalleryAdmin::updatePost');
$routes->post('/admin/gallery/save', 'Admin\GalleryAdmin::save');
$routes->post('/admin/gallery/add-album', 'Admin\GalleryAdmin::addAlbum', ['as' => 'addAlbum']);
$routes->delete('/admin/gallery/delete', 'Admin\GalleryAdmin::delete');

// ADMIN RUNNING TEXT
$routes->get('/admin/running-text', 'Admin\RunningAdmin::index', ['as' => 'index-running']);
$routes->post('/admin/running-text/update', 'Admin\RunningAdmin::update', ['as' => 'update-running']);

// ADMIN BANNER WEB
$routes->get('/admin/banner-website', 'Admin\BannerAdmin::index', ['as' => 'index-banner']);
$routes->get('/admin/banner-website/create', 'Admin\BannerAdmin::create', ['as' => 'create-banner']);
$routes->post('/admin/banner-website/save', 'Admin\BannerAdmin::save');
$routes->get('/admin/banner-website/update/(:num)', 'Admin\BannerAdmin::update/$1', ['as' => 'update-banner']);
$routes->post('/admin/banner-website/update', 'Admin\BannerAdmin::updatePost');
$routes->delete('/admin/banner-website/delete', 'Admin\BannerAdmin::delete');

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
