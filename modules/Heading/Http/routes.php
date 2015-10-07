<?php

Route::group(['prefix' => 'heading', 'namespace' => 'Modules\Heading\Http\Controllers'], function()
{
	Route::get('/', 'HeadingController@index');
});