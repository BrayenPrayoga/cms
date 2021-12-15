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

Route::get('/', function () {
    return view('template.front_login.login');
});

Auth::routes(['register' => false]);
Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@getLogin')->middleware('guest');
    Route::post('/login', 'LoginController@postLogin')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::name('admin.')->middleware('auth:admin')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('dashboard-admin', 'DashboardAdminController@index')->name('dashboard');

    //Master Header
    Route::get('data-header', 'MasterHeaderController@index')->name('data.header');
    Route::post('data-header/store', 'MasterHeaderController@store')->name('data.header.store');
    Route::post('data-header/update', 'MasterHeaderController@update')->name('data.header.update');
    Route::get('data-header/hapus/{id}', 'MasterHeaderController@hapus')->name('data.header.hapus');

    //Master Pasal
    Route::get('data-pasal', 'MasterPasalController@index')->name('data.pasal');
    Route::post('data-pasal/store', 'MasterPasalController@store')->name('data.pasal.store');
    Route::post('data-pasal/update', 'MasterPasalController@update')->name('data.pasal.update');
    Route::get('data-pasal/hapus/{id}', 'MasterPasalController@hapus')->name('data.pasal.hapus');
});

Route::name('user.')->middleware('auth:user')->prefix('users')->group(function () {
    // Dashboard
    Route::get('dashboard-users', 'DashboardUsersController@index')->name('dashboard');

});
