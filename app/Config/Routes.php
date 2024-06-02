<?php 
namespace Config;
namespace Myth\Auth\Config;

$routes=Services::routes();

// create a new instance of our routecollection class

$routes->setAutoRoute(true);
$routes->setTranslateURIDashes(true);

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;

$routes->get('/', 'pages::index');


// $routes->get('/user/(:segment)', 'User::index/$1');
$routes->get('/produk/detail','Produk::detail');
$routes->get('/user/dashboard','Dashboard::index');
$routes->get('/dashboard/produk','ProdukKategori::index');
$routes->get('/dashboard/transaksi','Dashboard::transaksi');
$routes->get('/dashboard/customer','Dashboard::customer');
$routes->get('/dashboard/order','Dashboard::order');
$routes->get('/dashboard/reseller','Dashboard::reseller');
$routes->get('/dashboard/laporan','Dashboard::laporan');
$routes->get('/dashboard/keuangan','Dashboard::keuangan');
$routes->get('/dashboard/produk/tambah_produk','Dashboard::tambahProduk');
$routes->post('/kategori/save','Produk::tambahKategori');
$routes->post('/produk/tambah_kategori','Produk::tambahKategori');
$routes->post('/submit-form','TambahProduk::submit');
$routes->get('/detail/(:segment)', 'ProdukKategori::detail/$1');
$routes->delete('/produk/(:num)','ProdukKategori::hapus/$1');
$routes->get('/produk/update/(:segment)','ProdukKategori::update/$1');
$routes->get('/produk/update/(:segment)','ProdukKategori::index_detail');
$routes->post('/produk/update/(:segment)','TambahProduk::update/$1');
$routes->post('/cart/tambah/','Checkout::tambah');

$routes->get('/produk/detail/checkout/(:segment)', 'ProdukKategori::detail_home/$1');



/** @var RouteCollection $routes */


$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
