<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Route to the Admin pages
 */
Route::get('admin', [
    'as' => 'admin',
    'uses' => 'AdminController@index'
]);


/**
 * Route to home
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'PageController@index'
]);

/**
 * Dynamic URL Routing
 */
Route::get('app/{query}',
    'PageController@display'
)->where('query','.+');