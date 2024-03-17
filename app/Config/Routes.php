<?php 
namespace Config;

$routes=Services::routes();

// create a new instance of our routecollection class

$routes->setAutoRoute(true);
$routes->setTranslateURIDashes(true);

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'pages::index');

$routes->get('/user/(:segment)', 'User::index/$1');
$routes->get('/produk/index','Produk::index');
$routes->get('/produk/detail','Produk::detail');

