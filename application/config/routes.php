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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['ortu'] = 'Ortu_controllers/index';
$route['ortu/tambah'] = 'Ortu_controllers/tambah_ortu';
$route['ortu/hapus/(:num)'] = 'Ortu_controllers/hapus_ortu/$1';
$route['ortu/ubah/(:num)'] = 'Ortu_controllers/ubah_ortu/$1';

$route['anak'] = 'Anak_controllers/index';
$route['anak/tambah'] = 'Anak_controllers/tambah_anak';
$route['anak/hapus/(:num)'] = 'Anak_controllers/hapus_anak/$1';
$route['anak/ubah/(:num)'] = 'Anak_controllers/ubah_anak/$1';

$route['kunjungan'] = 'Kunjungan_controllers/index';
$route['kunjungan/tambah'] = 'Kunjungan_controllers/tambah_kunjungan';
$route['kunjungan/hapus/(:num)'] = 'Kunjungan_controllers/hapus_kunjungan/$1';
$route['kunjungan/ubah/(:num)'] = 'Kunjungan_controllers/ubah_kunjungan/$1';

$route['pengukuran'] = 'Pengukuran_controllers/index';
$route['pengukuran/tambah'] = 'Pengukuran_controllers/tambah_pengukuran';
$route['pengukuran/hapus/(:num)'] = 'Pengukuran_controllers/hapus_pengukuran/$1';
$route['pengukuran/ubah/(:num)'] = 'Pengukuran_controllers/ubah_pengukuran/$1';

$route['laporan']                     = 'laporan';
$route['laporan/kunjungan']           = 'laporan/kunjungan';
$route['laporan/pengukuran']          = 'laporan/pengukuran';

$route['laporan/kunjungan/cetak']   = 'laporan/cetak_kunjungan';
$route['laporan/pengukuran/cetak']  = 'laporan/cetak_pengukuran';

