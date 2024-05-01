<?php 
namespace Config;

$routes=Services::routes();

// create a new instance of our routecollection class

$routes->setAutoRoute(true);
$routes->setTranslateURIDashes(true);

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'pages::index');
$routes->get('login', 'auth::login');

// $routes->get('/user/(:segment)', 'User::index/$1');
$routes->get('/produk/index','Produk::index');
$routes->get('/produk/detail','Produk::detail');
$routes->get('/user/dashboard','Dashboard::index');
$routes->get('/dashboard/produk','Dashboard::produk');
$routes->get('/dashboard/transaksi','Dashboard::transaksi');
$routes->get('/dashboard/customer','Dashboard::customer');
$routes->get('/dashboard/order','Dashboard::order');
$routes->get('/dashboard/reseller','Dashboard::reseller');
$routes->get('/dashboard/laporan','Dashboard::laporan');
$routes->get('/dashboard/keuangan','Dashboard::keuangan');
$routes->get('/dashboard/produk/tambah_produk','Dashboard::tambahProduk');
$routes->post('/kategori/save','Produk::tambahKategori');



