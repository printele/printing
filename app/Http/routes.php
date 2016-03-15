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

Route::get('/test', function () {
    $ar = ["1","3",4,5,6,7];

    $counter = 0;

    foreach ($ar as $number) {
        if ($counter == 0) {
            echo 'row<br>';
        }
        echo $number . ' ' . $counter .'<br>';
        $counter++;
        if ($counter == 4) {
            echo 'endrow<br>';
            $counter = 0;
        }

    }

});


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


    Route::get('/', [
        'uses' => 'PagesController@home',
        'as' => 'home',
        'middleware' => ['guest']
    ]);



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

    /*Route::get('/product/{id}', [
       'uses' => 'ProductsController@show'
    ]);*/

    Route::group(['prefix' => 'customer', 'middleware' => ['auth']], function () {

        Route::get('/', [
            'uses' => 'CustomerController@index',
            'as' => 'customer.index'
        ]);

        Route::get('/product/{id}', [
            'uses' => 'ProductsController@show'
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

            Route::post('/new-product', [
                'uses' => 'ProductsController@store',
                'as' => 'store-product'
            ]);

            Route::delete('/remove/{id}', [
                'uses' => 'ProductsController@destroy',
                'as' => 'delete-product'
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

            Route::post('/new-promise', [
                'uses' => 'PromisesController@store',
                'as' => 'store-promise'
            ]);

            Route::delete('/remove/{id}', [
               'uses' => 'PromisesController@destroy',
                'as' => 'delete-promise'
            ]);


        });

        Route::group(['prefix' => 'clients'], function () {

            Route::get('/', [
                'uses' => 'ClientsController@index',
                'as' => 'clients'
            ]);

            Route::get('/new-client', [
                'uses' => 'ClientsController@create',
                'as' => 'new-client'
            ]);

            Route::post('/new-client', [
                'uses' => 'ClientsController@store',
                'as' => 'store-client'
            ]);

            Route::delete('/remove/{id}', [
                'uses' => 'ClientsController@destroy',
                'as' => 'delete-client'
            ]);


        });

        Route::group(['prefix' => 'gallery'], function () {

            Route::get('/', [
                'uses' => 'GalleryController@index',
                'as' => 'gallery'
            ]);

            Route::get('/new-item', [
                'uses' => 'GalleryController@create',
                'as' => 'new-item'
            ]);

            Route::post('/new-item', [
                'uses' => 'GalleryController@store',
                'as' => 'store-item'
            ]);

            Route::delete('/remove/{id}', [
                'uses' => 'GalleryController@destroy',
                'as' => 'delete-item'
            ]);


        });



    });


    Route::get('/logout', [
        'uses' => 'AuthController@doSignout',
        'as' => 'logout'
    ]);


});
