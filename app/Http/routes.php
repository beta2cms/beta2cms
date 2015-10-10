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

Route::group(['prefix' => 'admin'], function() {

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', [
            'as' => 'admin.index',
            'uses' => 'Backend\AdminController@index'
        ]);

        Route::get('/logout', [
            'as' => 'admin.logout',
            'uses' => 'Auth\AuthController@getLogout'
        ]);


        Route::get('/node/{id}/active', [
            'as' => 'admin.node.active',
            'uses' => 'Backend\NodeController@toggleActive'
        ]);

        Route::resource('node', 'Backend\NodeController');
    });

    Route::group(['middleware' => 'guest'], function() {
        Route::get('/signin', [
            'as' => 'admin.signin',
            'uses' => 'Auth\AuthController@getLogin'
        ]);

        Route::post('/signin', [
            'uses' => 'Auth\AuthController@postLogin'
        ]);

        Route::get('/signup', [
            'as' => 'admin.signup',
            'uses' => 'Auth\AuthController@getRegister'
        ]);

        Route::post('/signup', [
            'uses' => 'Auth\AuthController@postRegister'
        ]);

    });
});




/**
 * Route to home
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'NodeController@index'
]);

/**
 * Dynamic URL Routing
 */
Route::get('app/{query}',
    'NodeController@display'
)->where('query','.+');