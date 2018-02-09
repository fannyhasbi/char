<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['signup'] = 'home/daftar';
$route['signout'] = 'panti/logout';

// Products
$route['products'] = 'produk';
$route['products/(:num)'] = 'produk';

// Panti
$route['in'] = 'panti';
$route['in/signin'] = 'panti/login';
$route['in/produk'] = 'panti/produk';
$route['in/tambah-produk'] = 'panti/tambah_produk';
$route['in/edit-produk/(:num)'] = 'panti/edit_produk/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
