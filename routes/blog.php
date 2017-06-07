<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| BLOG Routes
|--------------------------------------------------------------------------
|
*/

Route::get('blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);