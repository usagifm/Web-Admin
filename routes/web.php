<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function(){
    //sanclass
    Route::get('/sanclass/list','sanclass\DaftarKelasController@list')->name('san-class-list');
    Route::get('/sanclass/class/{id}','sanclass\DaftarKelasController@class')->name('san-class-list');
    Route::get('/sanclass/list/cari','sanclass\DaftarKelasController@search')->name('san-class-list');
    Route::get('/sanclass/point','sanclass\DaftarPointController@point')->name('san-class-point');

    // Pertemuan
    Route::get('/sanclass/class/{class_id}/meet/{id}','sanclass\DaftarPertemuanController@index')->name('san-class-list');


    // Materi
    Route::get('/sanclass/class/{class_id}/meet/{meeting_id}/lesson/{id}','sanclass\MateriController@index')->name('san-class-list');

    //member
    Route::get('/member/siswa','member\SiswaController@index')->name('member-siswa');
    Route::post('/member/change/password/{id}','member\SiswaController@changePassword')->name('member-siswa');
    Route::post('/member/delete/member/{id}','member\SiswaController@deleteMember')->name('member-siswa');
    Route::get('/member/siswa/cari','member\SiswaController@search')->name('member-siswa');
    Route::get('/member/guru','member\GuruController@index')->name('member-guru');
    // Route::get('/member/guru/cari','member\GuruController@search')->name('member-siswa');
    Route::get('/member/datawilayah','member\DataWilayahController@index')->name('member-data-wilayah');
    
});
Route::get('/home', 'HomeController@index')->name('home');
