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

Route::get('/example_get', 'TableController@selectMovieByIdWithResource')->name('example_get');
Route::post('/example_post', 'TableController@selectMovieByIdwithRelation')->name('example_post');
Route::get('/display/{name}','TableController@RenderExample')->name('render_example');
