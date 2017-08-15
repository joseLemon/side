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
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);


require __DIR__.'/mailer.php';

//  ACCESS TO AUTHENTICATED USERS
Route::group(['middleware' => '\App\Http\Middleware\AfterLogin'], function() {
    //  BLOG SECTION
    require __DIR__.'/blog.php';
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes...
    Route::get('register', ['as' => 'register','uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => '','uses' => 'Auth\RegisterController@register']);
});

Route::group(['middleware' => '\App\Http\Middleware\BeforeLogin'], function() {
    // Authentication Routes...
    Route::get('login', ['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => '','uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout','uses' => 'Auth\LoginController@logout']);

    // Password Reset Routes...
    Route::post('password/email', ['as' => 'password.email','uses' => 'Auth\UserForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset', ['as' => 'password.request','uses' => 'Auth\UserForgotPasswordController@showLinkRequestForm']);
    Route::post('password/reset', ['as' => '','uses' => 'Auth\UserResetPasswordController@reset']);
    Route::get('password/reset/{token}', ['as' => 'password.reset','uses' => 'Auth\UserResetPasswordController@showResetForm']);

    Route::post('/login/post', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
});
