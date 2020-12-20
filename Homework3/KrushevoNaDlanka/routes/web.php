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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories/create', 'App\Http\Controllers\CategoriesController@create')
    ->middleware('is_admin');
Route::post('/categories', 'App\Http\Controllers\CategoriesController@store');

Route::get('/locations/create', 'App\Http\Controllers\LocationsController@create')
    ->middleware('is_admin');
Route::get('/locations/{location}', 'App\Http\Controllers\LocationsController@show');
Route::post('/locations', 'App\Http\Controllers\LocationsController@store');

Route::post('/reviews', 'App\Http\Controllers\ReviewsController@store');

Route::get('/admin', 'App\Http\Controllers\AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
