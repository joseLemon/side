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

Route::get('/', ['as' => 'site.index', 'uses' => 'IndexController@index']);
Route::get('/micro/{name}', ['as' => 'site.micro', 'uses' => 'IndexController@micro']);

require __DIR__.'/blog.php';
require __DIR__.'/mailer.php';
