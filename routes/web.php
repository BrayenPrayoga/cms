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

    //Master Data
    Route::get('data-header', 'MasterHeader@index')->name('data.header');
});

Route::name('user.')->middleware('auth:user')->prefix('users')->group(function () {
    // Dashboard
    Route::get('dashboard-users', 'DashboardUsersController@index')->name('dashboard');

});
