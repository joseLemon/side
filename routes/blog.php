<?php

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
Route::get('posts/getPosts', ['as' => 'posts.get', 'uses' => 'BlogController@getPosts']);
Route::get('blog/delete', ['as' => 'blog.delete', 'uses' => 'BlogController@delete']);
