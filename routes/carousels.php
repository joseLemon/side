<?php

/*
|--------------------------------------------------------------------------
| CAROUSELS Routes
|--------------------------------------------------------------------------
|
*/

Route::get('carousel/product/delete', ['as' => 'product.delete', 'uses' => 'CarouselController@productDelete']);
