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
Route::get('/{slug}', ['as' => 'site.micro', 'uses' => 'IndexController@micro']);
Route::get('/sitios/construccion', ['as' => 'site.underConstruction', 'uses' => 'IndexController@underConstruction']);
//Route::get('/micro/{name}', ['as' => 'site.micro', 'uses' => 'IndexController@micro']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/setLanguage', ['as' => 'language.set', 'uses' => 'IndexController@setLanguage']);

//  PUBLIC BLOG
Route::get('posts/getPosts', ['as' => 'posts.get', 'uses' => 'BlogController@getPosts']);
Route::get('blog/single/{id}', ['as' => 'blog.single', 'uses' => 'BlogController@single']);
//  PUBLIC PAGES
Route::get('page/getPages', ['as' => 'pages.get', 'uses' => 'PagesController@getPages']);
Route::get('pages/pagesSearch', ['as' => 'pages.search', 'uses' => 'PagesController@searchPages']);
//  PUBLIC CALENDAR
Route::get('year/getYearFiles', ['as' => 'calendar.getYearFiles', 'uses' => 'CalendarController@getYearFiles']);

require __DIR__.'/mailer.php';

//  ACCESS TO AUTHENTICATED USERS
Route::group(['middleware' => '\App\Http\Middleware\AfterLogin'], function() {
    Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    Route::group(['middleware' => '\App\Http\Middleware\IsUserAdmin'], function() {
        // Registration Routes...
        Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@registerUser']);
        Route::post('register', ['as' => '', 'uses' => 'Auth\RegisterController@register']);
    });

    //  BLOG SECTION
    require __DIR__.'/blog.php';
    //  PAGES SECTION
    require __DIR__.'/page.php';
    //  CAROUSEL SECTION
    require __DIR__.'/carousels.php';
    //  CALENDAR SECTION
    require __DIR__.'/calendar.php';
    //  USERS SECTION
    require __DIR__.'/users.php';

    Route::get('/test/show', function () {
        return \Auth::user();
    });
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