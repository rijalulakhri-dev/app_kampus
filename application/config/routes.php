<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Dashboard';
$route['petugas/daftar_user'] = 'petugas/View_controller/index';
$route['petugas/tambah_user'] = 'petugas/View_controller/addUser';
$route['petugas/tambah_user/process'] = 'petugas/View_controller/pro_add_user';
$route['petugas/tambah_mhs'] = 'petugas/View_controller/setMhs';
$route['petugas/process/tambah_mhs'] = 'petugas/View_controller/process_set_mhs';
$route['petugas/data_mhs'] = 'petugas/View_controller/viewMhs';
$route['petugas/tambah_matkul'] = 'petugas/View_controller/setMatkul';
$route['petugas/data_matkul'] = 'petugas/View_controller/viewMatkul';
$route['petugas/process/tambah_matkul'] = 'petugas/View_controller/process_set_matkul';



$route['dosen/data_mhs'] = 'dosen/View_controller/data_mhs';
$route['dosen/input_nilai/(:any)'] = 'dosen/View_controller/set_nilai/$1';
$route['dosen/input_nilai/pro/(:any)'] = 'dosen/View_controller/input_process_nilai/$1';
$route['cari_dosen/(:any)'] = 'petugas/View_controller/tesDosen/$1';








$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';
$route['login/process'] = 'AuthController/pro_login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
