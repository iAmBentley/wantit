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
    return view('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
	// DASHBOARD ROUTES
	Route::get('dashboard', 'DashboardController@index')->name('dashboard');
	// ITEM ROUTES
	Route::resource('items', 'ItemController');
	Route::get('items-list', 'ItemListController@index')->name('items-list');
});
