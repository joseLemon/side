<?php

/*
|--------------------------------------------------------------------------
| PAGES Routes
|--------------------------------------------------------------------------
|
*/

Route::get('page/show', ['as' => 'page.show', 'uses' => 'PagesController@show']);
Route::get('page/getPages', ['as' => 'pages.get', 'uses' => 'PagesController@getPages']);
Route::get('page/delete', ['as' => 'page.delete', 'uses' => 'PagesController@delete']);
Route::get('page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PagesController@edit']);

/*
 * INDEX
 */
Route::post('page/{id}', ['as' => 'page.update.index', 'uses' => 'PagesController@updateIndex']);

/*
 * MICRO SITES
 */

