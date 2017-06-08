<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| BLOG Routes
|--------------------------------------------------------------------------
|
*/

Route::get('blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
Route::post('blog/store', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
Route::get('blog/{id}/edit', ['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
Route::post('blog/{id}', ['as' => 'blog.update', 'uses' => 'BlogController@update']);
Route::get('blog/show', ['as' => 'blog.show', 'uses' => 'BlogController@show']);