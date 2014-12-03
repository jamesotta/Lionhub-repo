<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*

unauthenticated group
*/

Route::group(array('before' => 'guest'), function () {

        /*

        cross site protection
        */
        /// Route::group(array('before' => 'csrf'), function()

        // {

        //create and saves users account

        Route::post('user/registration', array('as' => 'account_save', 'uses' =>
            'UserController@create_user')); // });

        Route::get('/', 'HomeController@showWelcome'); //login form route
        Route::get('user/login', array('as' => 'account_login', 'uses' =>
            'UserController@login')); //registration form route
        Route::get('user/registration', array('as' => 'account_create', 'uses' =>
            'UserController@registration')); //password reset form route
        Route::get('user/password_reset', 'UserController@resset');
        //service page  route
        Route::get('pages/services', 'ServiceController@service'); //service page  route
        Route::get('pages/contact_us', 'ContactController@contact'); //our team
        Route::get('pages/our_team', 'UserController@team'); //about us
        Route::get('pages/about_us', 'AboutController@about'); //activation page
        Route::get('user/activate/{code}', array('as' => 'account_activate', 'uses' =>
            'UserController@activate')); //video download
        Route::get('download', 'UserController@getDownload');
    }
);
