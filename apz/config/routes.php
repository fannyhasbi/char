<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['signup'] = 'home/daftar';
$route['signout'] = 'panti/logout';

// Products
$route['products'] = 'produk';

// Panti
$route['in'] = 'panti';
$route['in/signin'] = 'panti/login';
$route['in/produk'] = 'panti/produk';
$route['in/tambah-produk'] = 'panti/tambah_produk';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
