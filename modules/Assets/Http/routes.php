<?php

Route::group(['prefix' => 'assets', 'namespace' => 'Modules\Assets\Http\Controllers'], function()
{
	Route::get('/', 'AssetsController@index');
});