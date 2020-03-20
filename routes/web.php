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

Route::get('/', 'Site\SiteController@index');
Route::get('/arts/load-more', 'Site\SiteController@loadMoreArts');
Route::get('/arts', 'Site\SiteController@artList');
Route::get('/arts/{id}', 'Site\SiteController@artDetail');

Route::resource('/admin/arts', 'Admin\ArtController');
