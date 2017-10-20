<?php

/*
|--------------------------------------------------------------------------
| CALENDARS Routes
|--------------------------------------------------------------------------
|
*/

Route::get('year/delete', ['as' => 'year.delete', 'uses' => 'CalendarController@yearDelete']);
