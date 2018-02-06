<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['signup'] = 'home/daftar';

// Products
$route['products'] = 'produk';

// Panti
$route['signin'] = 'panti/login';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
