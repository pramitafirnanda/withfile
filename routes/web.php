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



Route::resource('datatables','DatatablesController');
Route::get('dataUser','DatatablesController@listingUser');

Route::group(['middleware' => 'web'], function(){
    Auth::routes();
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/', 'HomeController@index');

    // PROFILE
//    Route::resource('/', 'Profile\ContentController');
//    Route::resource('pengumuman', 'PengumumanController');


    Route::group(['prefix' => 'admin'], function(){
        //Route::resource('tes', 'PelatiahnController');

        Route::resource('ditlitabmas', 'DitlitabmasController');
        Route::resource('hki', 'HkiController');


    Route::group(['prefix' => 'master'], function(){
        Route::resource('tahunkegiatan', 'TahunKegiatanController');
        Route::resource('periode', 'PeriodeController');
        Route::resource('bidangilmu', 'BidangIlmuController');
        Route::resource('user-reviewer', 'Admin\ReviewerController');
        Route::resource('user-admin', 'Admin\AdminController');
        Route::resource('datadosen', 'Admin\DataDosenController');
    });
});
