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
|	https://codeigniter.com/userguide3/general/routing.html
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
#ROUTES FRONTEND
$route['default_controller'] = 'home';
#controller Shop.
$route['katalog'] = 'shop/katalog';
$route['produk/(:num)'] = 'shop/detail/$1';
#ROUTES ADMIN
$route['dashboard'] = 'admin/dashboard/index';
$route['dashboard/produk'] = 'dashboard/produk';

#Admin Katalog
$route['admin'] = 'dashboard';
$route['produk'] = 'admin/produk';
$route['admin/produk/tambah'] = 'admin/produk/tambah';
$route['admin/produk/update/(:num)'] = 'admin/produk/update/$1';
$route['admin/produk/edit/(:num)'] = 'admin/produk/edit/$1';
#Login
$route['login'] = 'auth';
$route['logout'] = 'auth/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// FRONTEND BERITA
$route['berita'] = 'BeritaProduk/berita';
$route['berita/detail/(:num)'] = 'BeritaProduk/detail/$1';

// FRONTEND PENGUMUMAN
$route['pengumuman'] = 'PengumumanProduk/pengumuman';
$route['pengumuman/detail_pengumuman/(:num)'] = 'PengumumanProduk/detail_pengumuman/$1';
$route['videoo'] = 'VideoParfume/videoo';

$route['videoo'] = '/admin/videoo/index';
$route['admin/videoo/tambah'] = 'admin/videoo/tambah';
$route['admin/videoo/store'] = 'admin/videoo/store';
$route['admin/videoo/edit/(:num)'] = 'admin/videoo/edit/$1';
$route['admin/videoo/update/(:num)'] = 'admin/videoo/update/$1';
$route['admin/videoo/hapus/(:num)'] = 'admin/videoo/delete/$1';

$route['layanan'] = 'admin/layanan/index';
$route['admin/layanan/tambah'] = 'admin/layanan/tambah';
$route['admin/layanan/simpan'] = 'admin/layanan/simpan';
$route['admin/layanan/edit/(:num)'] = 'admin/layanan/edit/$1';
$route['admin/layanan/update/(:num)'] = 'admin/layanan/update/$1';
$route['admin/layanan/hapus/(:num)'] = 'admin/layanan/hapus/$1';

$route['team'] = 'TeamPage/team';
$route['team'] = 'admin/team/index';
$route['admin/team/tambah'] = 'admin/team/tambah';
$route['admin/team/simpan'] = 'admin/team/simpan';
$route['admin/team/edit/(:num)'] = 'admin/team/edit/$1';
$route['admin/team/update/(:num)'] = 'admin/team/update/$1';
$route['admin/team/hapus/(:num)'] = 'admin/team/hapus/$1';

$route['contact'] = 'contact/index';
$route['contact/kirim'] = 'contact/kirim';

$route['admin/contact'] = 'ContactAdmin/index';
$route['admin/contact/delete/(:num)'] = 'ContactAdmin/hapus/$1';



// admin berita
$route['berita'] = 'admin/berita/index';
$route['admin/berita/tambah'] = 'admin/berita/tambah';
$route['admin/berita/simpan'] = 'admin/berita/simpan';
$route['admin/berita/edit/(:num)'] = 'admin/berita/edit/$1';
$route['admin/berita/update/(:num)'] = 'admin/berita/update/$1';
$route['admin/berita/hapus/(:num)'] = 'admin/berita/hapus/$1';

// admin pengumuman
$route['pengumuman'] = 'admin/pengumuman/index';
$route['admin/pengumuman/tambah'] = 'admin/pengumuman/tambah';
$route['admin/pengumuman/simpan'] = 'admin/pengumuman/simpan';
$route['admin/pengumuman/edit/(:num)'] = 'admin/pengumuman/edit/$1';
$route['admin/pengumuman/update/(:num)'] = 'admin/pengumuman/update/$1';
$route['admin/pengumuman/hapus/(:num)'] = 'admin/pengumuman/hapus/$1';


