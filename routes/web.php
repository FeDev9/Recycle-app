<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/daily-view', 'App\Http\Controllers\PagesController@daily');
Route::get('/weekly-view', 'App\Http\Controllers\PagesController@weekly');


// Route::get('/collections', 'App\Http\Controllers\CollectionsController@index');

// Route::post('/collections', 'App\Http\Controllers\CollectionsController@store');
// Route::get('/collections/create', 'App\Http\Controllers\CollectionsController@create');

// Route::get('/collections/{collection}/edit', 'App\Http\Controllers\CollectionsController@edit' );
// Route::patch('/collections/{collection}', 'App\Http\Controllers\CollectionsController@update');
// Route::delete('/collections/{collection}', 'App\Http\Controllers\CollectionsController@destroy');

Route::resource('/collections', 'App\Http\Controllers\CollectionsController');