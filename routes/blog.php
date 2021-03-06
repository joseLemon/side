<?php

/*
|--------------------------------------------------------------------------
| BLOG Routes
|--------------------------------------------------------------------------
|
*/

Route::group(['middleware' => ['\App\Http\Middleware\IsUserEditor']], function() {
    Route::get('blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
    Route::post('blog/store', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
    Route::get('blog/{id}/edit', ['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
    Route::post('blog/{id}', ['as' => 'blog.update', 'uses' => 'BlogController@update']);
    Route::get('blog/show', ['as' => 'blog.show', 'uses' => 'BlogController@show']);
    Route::get('blog/delete', ['as' => 'blog.delete', 'uses' => 'BlogController@delete']);
});