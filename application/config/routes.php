<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['a_transaksi/index'] = 'a_transaksi/index';
$route['a_distance/update'] = 'a_distance/update';
$route['a_transaksi/(:any)'] = 'a_transaksi/detail/$1';
$route['a_transaksi'] = 'a_transaksi/index';

$route['a_pembayaran/index'] = 'a_pembayaran/index';
$route['a_distance/update'] = 'a_distance/update';
$route['a_pembayaran'] = 'a_pembayaran/index';

$route['a_distance/index'] = 'a_distance/index';
$route['a_distance/update'] = 'a_distance/update';
$route['a_distance/(:any)'] = 'a_distance/detail/$1';
$route['a_distance'] = 'a_distance/index';

$route['a_check/index'] = 'a_check/index';
$route['a_check/update'] = 'a_check/update';
$route['a_check/(:any)'] = 'a_check/detail/$1';
$route['a_check'] = 'a_check/index';

$route['a_mobil/index'] = 'a_mobil/index';
$route['a_mobil'] = 'a_mobil/index';

$route['a_tipe/index'] = 'a_tipe/index';
$route['a_tipe'] = 'a_tipe/index';

$route['a_tahun/index'] = 'a_tahun/index';
$route['a_tahun'] = 'a_tahun/index';

$route['a_warna/index'] = 'a_warna/index';
$route['a_warna'] = 'a_warna/index';

$route['a_wilayah/index'] = 'a_wilayah/index';
$route['a_wilayah/update'] = 'a_wilayah/update';
$route['a_wilayah'] = 'a_wilayah/index';

$route['a_kota/index'] = 'a_kota/index';
$route['a_kota/update'] = 'a_kota/update';
$route['a_kota'] = 'a_kota/index';

$route['a_iklan/index'] = 'a_iklan/index';
$route['a_iklan/update'] = 'a_iklan/update';
$route['a_iklan/(:any)'] = 'a_iklan/detail/$1';
$route['a_iklan'] = 'a_iklan/index';

$route['a_perusahaan/index'] = 'a_perusahaan/index';
$route['a_perusahaan/update'] = 'a_perusahaan/update';
$route['a_perusahaan/(:any)'] = 'a_perusahaan/detail/$1';
$route['a_perusahaan'] = 'a_perusahaan/index';

$route['a_master_iklan/index'] = 'a_master_iklan/index';
$route['a_master_iklan/update'] = 'a_master_iklan/update';
$route['a_master_iklan/(:any)'] = 'a_master_iklan/detail/$1';
$route['a_master_iklan'] = 'a_master_iklan/index';

$route['users/index'] = 'users/index';
$route['default_controller'] = 'page/view';
$route['(:any)'] = 'page/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
