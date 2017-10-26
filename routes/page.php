<?php

/*
|--------------------------------------------------------------------------
| PAGES Routes
|--------------------------------------------------------------------------
|
*/

/*
 * EDIT
 */
Route::get('page/{id}/edit', ['as' => 'page.edit', 'uses' => 'PagesController@edit']);
Route::post('page/{id}/update', ['as' => 'page.update', 'uses' => 'PagesController@update']);

Route::group(['middleware' => '\App\Http\Middleware\IsUserAdmin'], function() {
    /*
     * LIST/CREATING/DELETING
     */
    Route::get('page/show', ['as' => 'pages.show', 'uses' => 'PagesController@show']);
    Route::get('page/create', ['as' => 'page.create', 'uses' => 'PagesController@create']);
    Route::post('page/store', ['as' => 'page.store', 'uses' => 'PagesController@store']);
    Route::get('page/delete', ['as' => 'page.delete', 'uses' => 'PagesController@delete']);
});