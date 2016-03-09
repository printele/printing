<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'PagesController@home',
    'as' => 'home'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //


    Route::get('/login', [
        'uses' => 'AuthController@index',
        'as' => 'login'
    ]);

    Route::post('/login', [
        'uses' => 'AuthController@doSignin',
        'as' => 'sign-in'
    ]);

    Route::post('/new-customer', [
        'uses' => 'AuthController@doSignup',
        'as' => 'sign-up'
    ]);

    Route::group(['prefix' => 'customer', 'middleware' => ['auth']], function () {

        Route::get('/', [
            'uses' => 'CustomerController@index',
            'as' => 'customer.index'
        ]);

    });

    Route::get('/p-login', [
        'uses' => 'SuperAdminPageController@index',
        'as' => 'superAdmin'
    ]);


    Route::group(['prefix' => 'admin'], function () {

        Route::group(['prefix' => 'products'], function () {

            Route::get('/', [
                'uses' => 'ProductsController@index',
                'as' => 'products'
            ]);

            Route::get('/new-product', [
                'uses' => 'ProductsController@create',
                'as' => 'new-product'
            ]);

        });

        Route::group(['prefix' => 'promises'], function () {

            Route::get('/', [
                'uses' => 'PromisesController@index',
                'as' => 'promises'
            ]);

            Route::get('/new-promise', [
                'uses' => 'PromisesController@create',
                'as' => 'new-promise'
            ]);


        });

        Route::group(['prefix' => 'clients'], function () {

            Route::get('/', [
                'uses' => 'ClientsController@index',
                'as' => 'clients'
            ]);

        });

    });


    Route::get('/logout', [
        'uses' => 'AuthController@doSignout',
        'as' => 'logout'
    ]);


});
