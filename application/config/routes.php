<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|rewrite url home
*/
$route['trang-chu'] = 'home';
$route['thong-tin-ve-chung-toi.html'] = 'introduce';
$route['du-an.html'] = 'project';
$route['nha-pho-thuong-mai.html'] = 'sunhouse';
$route['tuyen-dung.html'] = 'recruitment';
$route['lien-he.html'] = 'contact';
$route['bai-viet-hay.html'] = 'news';
$route['cong-ty-thanh-vien.html'] = 'member';
$route['san-giao-dich.html'] = 'place';
$route['dinh-huong-phat-trien.html'] = 'develop';
$route['bai-viet/chi-tiet/(:any)-(:num)'] = 'news/view/$1/$2';
$route['du-an/chi-tiet/(:any)-(:num)'] = 'project/view/$1/$2';
$route['nha-pho/chi-tiet/(:any)-(:num)'] = 'sunhouse/view/$1/$2';	
$route['san-pham/chi-tiet/(:any)-(:num)'] = 'product/view/$1/$2';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
