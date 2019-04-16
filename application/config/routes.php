<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|rewrite url home
*/
$route['trang-chu'] = 'home';
$route['thong-tin-ve-chung-toi.html'] = 'introduce';
$route['dich-vu.html'] = 'service';
$route['lien-he.html'] = 'contact';
$route['bai-viet-hay.html'] = 'news';
$route['san-pham.html'] = 'product';
$route['san-pham/(:any)'] = 'product/view/$1';
$route['san-pham/chi-tiet/(:any)-(:num)'] = 'product/view/$1/$2';
$route['san-pham/danh-muc/(:any)'] = 'product/catalog/$1';
$route['bai-viet/chi-tiet/(:any)-(:num)'] = 'news/view/$1/$2';
$route['dich-vu/chi-tiet/(:any)-(:num)'] = 'service/view/$1/$2';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
