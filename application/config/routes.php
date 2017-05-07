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
$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//route baru
$route['logout'] = 'login_controller/logout';
//user
$route['user'] = 'event_controller/list_event_today2';
$route['list_kepengurusan'] = 'kepengurusan_controller/list_kepengurusan2';
$route['list_departemen'] = 'kepengurusan_controller/list_tahun_departemen';
$route['list_anggota'] = 'kepengurusan_controller/list_tahun_user';
$route['gallery'] = 'user_controller/view_gallery';
$route['tambah_foto'] = 'user_controller/upload_foto';
$route['lihat_event'] = 'user_controller/show_event';
$route['tambah_event'] = 'kepengurusan_controller/list_tahun_event';
$route['update_event'] = 'user_controller/edit_event';
$route['penilaian_event'] = 'user_controller/show_penilaian';
$route['form_penilaian'] = 'user_controller/tambah_penilaian';
$route['update_penilaian'] = 'user_controller/update_penilaian';

//admin
$route['admin'] = 'event_controller/list_event_today';
$route['list_departemen_admin'] = 'admin_controller/show_departemen';
$route['tambah_departemen_admin'] = 'admin_controller/tambah_departemen';
$route['tambah_kepengurusan_admin'] = 'admin_controller/tambah_kepengurusan';
$route['list_kepengurusan_admin'] = 'kepengurusan_controller/list_kepengurusan';
$route['list_anggota_admin'] = 'admin_controller/show_anggota';
$route['tambah_anggota_admin'] = 'admin_controller/tambah_anggota';
$route['gallery_admin'] = 'admin_controller/show_gallery';
$route['lihat_event_admin'] = 'admin_controller/show_event';
$route['tambah_event_admin'] = 'admin_controller/add_event';
$route['update_event_admin'] = 'admin_controller/edit_event';
$route['tambah_foto_admin'] = 'admin_controller/upload_foto';
$route['penilaian_event_admin'] = 'admin_controller/show_penilaian';
$route['form_penilaian_admin'] = 'admin_controller/tambah_penilaian';
$route['update_penilaian_admin'] = 'admin_controller/update_penilaian';
