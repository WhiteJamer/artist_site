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

Route::get('/', 'Site\SiteController@index')->name('site.index');
Route::get('/arts/load-more', 'Site\SiteController@loadMoreArts')->name('site.index.loadMore');
Route::get('/arts', 'Site\SiteController@artList')->name('site.arts.index');
Route::get('/arts/{id}', 'Site\SiteController@artDetail')->name('site.arts.show');

Route::resource('/admin/arts', 'Admin\ArtController', ['names' => 'admin.arts']);
