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
        /*
         * Dashboard Routes
         */
        Route::get('/', [
            'as' => 'admin.index',
            'uses' => 'Backend\DashboardController@index'
        ]);

        /*
         * User Routes
         */
        Route::get('/logout', [
            'as' => 'admin.logout',
            'uses' => 'Auth\AuthController@getLogout'
        ]);

        /*
         * Node Routes
         */
        Route::get('/node/{id}/toggle', [
            'as' => 'admin.node.toggle',
            'uses' => 'Backend\NodeController@toggle'
        ]);

        Route::get('/node/{id}/undo', [
            'as' => 'admin.node.undo',
            'uses' => 'Backend\NodeController@undoDelete'
        ]);

        Route::resource('node', 'Backend\NodeController');

        /*
         * Module Routes
         */
        Route::get('/module/{id}/toggle', [
            'as' => 'admin.module.toggle',
            'uses' => 'Backend\ModuleController@toggle'
        ]);

        Route::get('/module/partial/{module}/create', [
            'as' => 'admin.module.create',
            'uses' => 'Backend\ModuleController@create'
        ]);

        Route::resource('module', 'Backend\ModuleController', ['except' => 'create']);

        /*
         * Element Routes
         */
        Route::get('/element/{id}',[
            'as' => 'admin.element.index',
            'uses'  => 'Backend\ContentController@index'
        ]);

        Route::get('/element/{id}/create',[
            'as' => 'admin.element.create',
            'uses'  => 'Backend\ContentController@create'
        ]);

        Route::post('/element/{id}/store',[
            'as' => 'admin.element.store',
            'uses'  => 'Backend\ContentController@store'
        ]);

<<<<<<< HEAD
        Route::get('/element/{id}/edit',[
            'as' => 'admin.element.edit',
            'uses' => 'Backend\ContentController@edit'
        ]);

        Route::post('/element/{id}/update',[
            'as' => 'admin.element.update',
            'uses' => 'Backend\ContentController@update'
        ]);
=======
        /* User Routes */

        Route::get('/user',[
            'as' => 'admin.user.index',
            'uses'  => 'Backend\UserController@index'
        ]);

        Route::get('/user/edit',[
            'as' => 'admin.user.edit',
            'uses'  => 'Backend\UserController@edit'
        ]);

        Route::put('/user/update/{id}',[
            'as' => 'admin.user.update',
            'uses'  => 'Backend\UserController@update'
        ]);
//        Route::resource('user', 'Backend\UserController', ['only' => 'index', 'edit', 'update']);

>>>>>>> User-profile


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