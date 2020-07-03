<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// untuk frontend

//peternak
Route::get('/', 'HomeController@index');
Route::get('/konsultasi', 'HomeController@konsultasi');

Route::post('/login', 'HomeController@auth');
Route::post('/simpan_keluhan', 'KeluhanController@simpanKeluhan');

Route::get('/semua-penyuluh', 'HomeController@penyuluh');
Route::get('/profil_penyuluh/{id}', 'HomeController@profilPenyuluh');
Route::get('/profil_peternak/{id}', 'HomeController@profilPeternak');
Route::get('/register_peternakan', 'HomeController@registerPeternakan');

Route::post('/simpan_peternakan', [ 'as' => 'simpan_peternakan', 'uses' => 'PeternakanController@simpanPeternakan']);

Route::get('/tips', 'HomeController@tips');
Route::get('/detail_tips/{id}', 'HomeController@detailTips');

//penyuluh

Route::get('/penyuluh', 'GembalaController@index');
Route::post('/cekLogin', 'GembalaController@cekLogin');
Route::get('/gembala', 'SuperGembalaController@index');

Route::get('/keluhan-peternak', 'GembalaController@keluhanPeternak');
Route::get('/lihat_keluhan/{id}', 'GembalaController@lihatKeluhan');

Route::post('/simpan_balasan', 'BalasanController@simpanBalasan');
Route::get('/logout_penyuluh', 'GembalaController@logout');


//untuk backend

// use Symfony\Component\Routing\Annotation\Route;

use Illuminate\Support\Facades\Route;

Route::get('/admin', 'AdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/dashboard', 'SuperAdminController@index');


//peternak
Route::get('/semua_peternak', 'PeternakController@index');
Route::post('/simpan_peternak', 'PeternakController@simpanPeternak');


//penyuluh
Route::get('/semua_penyuluh', 'PenyuluhController@index');
Route::get('/tambah_penyuluh', 'PenyuluhController@tambahPenyuluh');

Route::post('update_penyuluh/{id}', 'PenyuluhController@updatePenyuluh');
Route::post('/simpan_penyuluh', 'PenyuluhController@simpanPenyuluh');

Route::get('hapus_penyuluh/{id}', 'PenyuluhController@hapusPenyuluh');
Route::get('ubah_penyuluh/{id}', 'PenyuluhController@ubahPenyuluh');

//Tips
Route::get('/semua_tips', 'TipsController@index');
Route::get('/tambah_tips', 'TipsController@tambahTips');

Route::post('update_tips/{id}', 'TipsController@updateTips');
Route::post('/simpan_tips', 'TipsController@simpanTips');

Route::get('ubah_tips/{id}', 'TipsController@ubahTips');
Route::get('hapus_tips/{id}', 'TipsController@hapusTips');

// Auth::routes();

// Route::get('/home', 'HomeController@auth')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
