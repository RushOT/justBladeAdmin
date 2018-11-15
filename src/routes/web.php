<?php

Route::group([
    'prefix' => 'dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Dashboard'
], function () {
    //Dashboard
    Route::get('/', [
        'as' => 'index',
        'uses' => 'DashboardController@index'
    ]);

    Route::get('/forms', [
        'as' => 'forms',
        'uses' => 'DashboardController@forms'
    ]);

    Route::get('/calendar', [
        'as' => 'calendar',
        'uses' => 'DashboardController@calendar'
    ]);

    Route::get('/email', [
        'as' => 'email',
        'uses' => 'DashboardController@email'
    ]);

    Route::get('/compose', [
        'as' => 'compose',
        'uses' => 'DashboardController@compose'
    ]);

    Route::get('/chat', [
        'as' => 'chat',
        'uses' => 'DashboardController@chat'
    ]);

    Route::get('/charts', [
        'as' => 'charts',
        'uses' => 'DashboardController@charts'
    ]);

    Route::get('/uielements', [
        'as' => 'uielements',
        'uses' => 'DashboardController@uielements'
    ]);

    Route::get('/basic-tables', [
        'as' => 'basicTables',
        'uses' => 'DashboardController@basicTables'
    ]);

    Route::get('/datatable', [
        'as' => 'datatable',
        'uses' => 'DashboardController@datatable'
    ]);

    Route::group([
        'prefix' => '/pages',
        'as' => 'pages.',
    ], function () {

        Route::get('/404', [
            'as' => '404',
            'uses' => 'DashboardController@notFoundPage'
        ]);

        Route::get('/500', [
            'as' => '500',
            'uses' => 'DashboardController@serverErrorPage'
        ]);

        Route::get('/signin', [
            'as' => 'signin',
            'uses' => 'DashboardController@signInPage'
        ]);

        Route::get('/signup', [
            'as' => 'signup',
            'uses' => 'DashboardController@signUpPage'
        ]);
    });
});

