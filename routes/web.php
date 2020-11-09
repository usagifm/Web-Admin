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
    Route::get('/sanclass/class/memasak','sanclass\DaftarKelasController@class')->name('san-class-list');
    Route::get('/sanclass/class/memasak/meet/1','sanclass\DaftarKelasController@meet')->name('san-class-list');
    Route::get('/sanclass/point','sanclass\DaftarPointController@point')->name('san-class-point');

    //member
    Route::get('/member/siswa','member\SiswaController@siswa')->name('member-siswa');
    Route::get('/member/guru','member\GuruController@index')->name('member-guru');
    Route::get('/member/datawilayah','member\DataWilayahController@index')->name('member-data-wilayah');
});
Route::get('/home', 'HomeController@index')->name('home');
