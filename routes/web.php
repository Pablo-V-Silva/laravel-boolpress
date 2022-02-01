<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'GuestController@index')->name('guest.home');
Route::get('show/{type}/{id}', 'GuestController@show')->name('guest.show');

Route::get('contacts', 'ContactController@show_contact_page')->name('contacts');
Route::post('contacts', 'ContactController@store')->name('contacts.send');


//Route::resource('products', 'ProductController')->only('index', 'show')->name('guest.products');


Auth::routes();

Route::namespace('admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
  Route::get('dashboard', 'HomeController@index')->name('dashboard');

  Route::resource('products', 'ProductController');
  Route::resource('posts', 'PostController');
  Route::resource('contacts', ContactController::class)->only('index', 'show', '');
});
