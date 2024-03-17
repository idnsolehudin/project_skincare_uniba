<?php 
namespace Config;

$routes=Services::routes();

// create a new instance of our routecollection class

$routes->setAutoRoute(true);
$routes->setTranslateURIDashes(true);

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'pages::index');
<<<<<<< HEAD



=======
$routes->get('/user/(:segment)', 'User::index/$1');
$routes->get('/produk/index','Produk::index');
$routes->get('/produk/detail','Produk::detail');
>>>>>>> b1649c335730ebdd8f387d76e78081ef0b015ada
