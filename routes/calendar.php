<?php

/*
|--------------------------------------------------------------------------
| CALENDARS Routes
|--------------------------------------------------------------------------
|
*/

Route::get('year/delete', ['as' => 'year.delete', 'uses' => 'CalendarController@yearDelete']);
Route::get('year/getYearFiles', ['as' => 'calendar.getYearFiles', 'uses' => 'CalendarController@getYearFiles']);
